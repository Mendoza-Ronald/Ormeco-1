<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class User_model extends Model
{
    #-----------------------------------------#
    #                                         #
    #              User Login Model           #
    #                                         #
    #-----------------------------------------#
    public function login($user_email, $user_password)
    {
        $row = $this->db->table('users')
            ->where('user_email', $user_email)
            ->get();
        if ($row) {
            if (password_verify($user_password, $row['user_password'])) {
                return $row;
            } else {
                return false;
            }
        }
    }

    #-----------------------------------------#
    #                                         #
    #              Password Hashing           #
    #                                         #
    #-----------------------------------------#
    public function passwordhash($password)
    {
        $options = array(
            'cost' => 4,
        );
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }

    /**
     * Check if email address is already exists
     * @param mixed $user_email
     * @return bool
     */
    public function exist_check($user_email)
    {
        $check = $this->db->table('users')->where('user_email', $user_email)->get();
        if ($check) {
            return true;
        } else {
            return false;
        }
    }


    #-----------------------------------------#
    #                                         #
    #      Check if email is verified         #
    #                                         #
    #-----------------------------------------#
    public function check_verified($user_email)
    {
        $checkver = $this->db->table('users')->where('user_email', $user_email)->get();
        if ($checkver) {
            return $checkver['user_verification'];
        }
    }

    #-----------------------------------------#
    #                                         #
    #               Get Username              #
    #                                         #
    #-----------------------------------------#
    public function getusername($user_email)
    {
        $getuser = $this->db->table('users')->where('user_email', $user_email)->get();
        if ($getuser) {
            return $getuser['username'];
        }
    }

    #-----------------------------------------#
    #                                         #
    #            Register Method              #
    #                                         #
    #-----------------------------------------#
    public function register($username, $user_email, $user_password, $phone)
    {

        # GET CURRENT TIME 
        date_default_timezone_set('Asia/Manila');
        $bind = array(
            'username'          => $username,
            'user_email'        => $user_email,
            'user_password'     => $this->passwordhash($user_password),
            'user_verification' => 'no',
            'image'             => '',
            'phone'             => $phone,
            'join_date'         => date("F j, Y g:i a"),
            'status'            => 'offline'

        );
        return $this->db->table('users')
            ->insert($bind);
    }

    #-----------------------------------------#
    #                                         #
    #    Update User Verification To YES      #
    #                                         #
    #-----------------------------------------#
    public function update_verification($user_email)
    {
        $updatecode = $this->db->table('users')->where('user_email', $user_email)->update(array('user_verification' => 'yes'));
        if ($updatecode) {
            return true;
        } else {
            return false;
        }
    }


    public function update_password($user_email, $user_password)
    {
        $updatepassword = array('user_password' => password_hash($user_password, PASSWORD_BCRYPT));

        $updatepasswordquer = $this->db->table('users')->where('user_email', $user_email)->update($updatepassword);
        if ($updatepasswordquer) {
            return true;
        }
    }





    /**
     * Set up session for login
     * @param $this
     */
    public function set_logged_in($username)
    {
        return $this->session->set_userdata([
            'username' => $username,
            'loggedin' => 1
        ]);
    }


    /**
     * Get User ID
     * @return string User ID from Session
     */
    public function get_username()
    {
        $username = $this->session->userdata('username');
        return !empty($username) ? $username : false;
    }

    public function is_logged_in()
    {
        if ($this->session->userdata('loggedin') === 1)
            return true;
    }

    public function set_logged_out()
    {
        $this->session->unset_userdata(array('loggedin', 'user_id', 'username', 'user_email', 'phone'));
        $this->session->sess_destroy();
    }

    #-----------------------------------------#
    #                                         #
    #               Get All users             #
    #                                         #
    #-----------------------------------------#

    public function get_all_users()
    {
        return $this->db->table('users')
            ->get_all();
    }
    #-----------------------------------------#
    #                                         #
    #               Count All users           #
    #                                         #
    #-----------------------------------------#

    public function count_all_users()
    {
        return $this->db->table('users')
            ->select_count('user_id', 'count_all_users')
            ->get();
    }


    #-----------------------------------------#
    #                                         #
    #       Count All offline users           #
    #                                         #
    #-----------------------------------------#
    public function count_all_offline_users()
    {
        return $this->db->table('users')
            ->select_count('user_id', 'count_all_offline_users')
            ->where('status', 'offline')
            ->get();
    }

    #-----------------------------------------#
    #                                         #
    #          ADD USER INFORMATION           #
    #                                         #
    #-----------------------------------------#

    public function add_info_user($uid, $fname, $lname, $mname, $suffix, $ap, $bt, $gender, $region, $province, $city, $barangay, $occupation)
    {
        $data = [
            'user_id' => $uid,
            'firstname' => $fname,
            'middlename' => $mname,
            'lastname' => $lname,
            'suffix' => $suffix,
            'about_profile' => $ap,
            'blood_type' => $bt,
            'gender' => $gender,
            'region' => $region,
            'province' => $province,
            'city' => $city,
            'barangay' => $barangay,
            'occupation' => $occupation

        ];

        $result = $this->db->table('personal_info')->insert($data);

        if ($result)
            return true;
    }

    #-----------------------------------------#
    #                                         #
    #         UPDATE USERNAME                 #
    #                                         #
    #-----------------------------------------#

    public function update_user_name($uid, $uname)
    {
        $data = [
            'user_id' => $uid,
            'username' => $uname
        ];

        $result = $this->db->table('users')->where('user_id', $uid)->update($data);

        if ($result)
            return true;
    }

    public function get_user_information()
    {
        return $this->db->table('users as u')
            ->inner_join('personal_info as pi', 'u.user_id = pi.user_id')
            ->where('u.user_id', $this->session->userdata('user_id'))
            ->limit(1)
            ->order_by('pi.personal_info_id', 'DESC')
            ->get_all();
    }


    public function getUserInfo()
    {
        return $this->db->table('personal_info as pi')->get_all();
    }



    public function exist_user_info($user_id)
    {
        $check = $this->db->table('personal_info')->where('user_id', $user_id)->get();
        if ($check) {
            return true;
        } else {
            return false;
        }
    }
}
