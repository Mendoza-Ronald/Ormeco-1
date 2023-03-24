<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Admin_model extends Model
{


    /**
     * Check if email address is already exists
     * @param mixed $user_email
     * @return bool
     */
    public function exist_check($user_email)
    {
        $check = $this->db->table('admin')->where('admin_email', $user_email)->get();
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
        $checkver = $this->db->table('admin')->where('admin_email', $user_email)->get();
        if ($checkver) {
            return $checkver['user_verification'];
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

    #-----------------------------------------#
    #                                         #
    #           admin registrationss          #
    #                                         #
    #-----------------------------------------#
    public function register($username, $user_email, $user_password)
    {

        # GET CURRENT TIME 
        date_default_timezone_set('Asia/Manila');
        $bind = array(
            'username'          => $username,
            'admin_email'        => $user_email,
            'admin_password'     => $this->passwordhash($user_password),
            'user_verification' => 'no',

            // 'phone'             => $phone,
            'join_date'         => date("F j, Y g:i a"),
            // 'status'            => 'offline'

        );
        return $this->db->table('admin')
            ->insert($bind);
    }


    #-----------------------------------------#
    #                                         #
    #               Get Username              #
    #                                         #
    #-----------------------------------------#
    public function getusername($user_email)
    {
        $getuser = $this->db->table('admin')->where('admin_email', $user_email)->get();
        if ($getuser) {
            return $getuser['username'];
        }
    }

    #-----------------------------------------#
    #                                         #
    #    Update User Verification To YES      #
    #                                         #
    #-----------------------------------------#
    public function update_verification($user_email)
    {
        $updatecode = $this->db->table('admin')->where('admin_email', $user_email)->update(array('user_verification' => 'yes'));
        if ($updatecode) {
            return true;
        } else {
            return false;
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
    public function is_logged_in()
    {
        if ($this->session->userdata('loggedin') === 1)
            return true;
    }

    public function set_logged_out()
    {
        $this->session->unset_userdata(
            array(
                'loggedin',
                'admin_id',
                'username',
                'admin_email'
            )
        );

        $this->session->sess_destroy();
    }


    #-----------------------------------------#
    #                                         #
    #              User Login Model           #
    #                                         #
    #-----------------------------------------#
    public function login($user_email, $user_password)
    {
        $row = $this->db->table('admin')
            ->where('admin_email', $user_email)
            ->get();
        if ($row) {
            if (password_verify($user_password, $row['admin_password'])) {
                return $row;
            } else {
                return false;
            }
        }
    }
}