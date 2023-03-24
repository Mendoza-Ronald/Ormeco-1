<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class AdminAuth extends Controller
{
    public function forgot_password()
    {
        $this->call->view('auth/adminAuth/forgot-password');
    }

    public function register()
    {
        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('username')->required("Username is required")->min_length(5, "Input username more than 5 characters")->max_length(10, 'username must be 10 characters')
                ->name('admin_email')->required("Email is required")->valid_email('Email contains a valid email')
                ->name('admin_password')->required("Password is required")->min_length(8, "Password is too short");
            // ->name('phone')->required("Phone number is required")->max_length(11, "Phone number must be 11 digits")->min_length(11, "Phone number must be 11 digits")->numeric("Phone number must be a number");


            if ($this->form_validation->run()) {
                $user_code = $this->code_generator();

                if (!$this->Admin_model->exist_check($this->io->post('admin_email'))) {
                    if ($this->Admin_model->register($this->io->post('username'), $this->io->post('admin_email'), $this->io->post('admin_password'))) {
                        if ($this->send_verification($this->io->post('admin_email'), $user_code)) {
                            $this->session->set_userdata(array(
                                'adminemail' => $this->io->post('admin_email'),
                                'verification_code' => $user_code,
                                'username' => $this->Admin_model->getusername($this->io->post('admin_email'))
                            ));
                            redirect('account-a-verification');
                            exit();
                        } else {
                            set_flash_alert('danger', 'Cannot send the Verification');
                            // $this->session->set_flashdata(array('signup_status' => 'Cannot send the Verification'));
                        }
                    } else {
                        set_flash_alert('danger', config_item('SQLError'));
                    }
                } else {
                    // $this->session->set_flashdata(array('signup_status' => 'Email address is already taken. Please try another.'));
                    set_flash_alert('danger', 'Email address is already taken. Please try another.');
                }
            } else {
                set_flash_alert('danger', $this->form_validation->errors());
            }
        }
        $this->call->view('auth/adminAuth/register');
    }


    /**
     * Code Generator
     * @return int
     */
    public function code_generator()
    {
        return mt_rand(100000, 999999);
    }

    #-----------------------------------------#
    #                                         #
    #        Send Verification Code           #
    #                                         #
    #-----------------------------------------#

    public function send_verification($email, $code)
    {
        $this->email->subject('Account Verification');
        $template = file_get_contents(ROOT_DIR . PUBLIC_DIR . '/templates/email.html');
        $search = array('{code}',  '{url_forgot}', '{app_name}', '{app_link}');
        $replace = array($code,  BASE_URL . "forgot-password", "O R M E C O", BASE_URL);
        $template = str_replace($search, $replace, $template);
        $this->email->sender('ormeco@gmail.com');
        // $content = "<center><h2>Verify your Account</h2><br><p><b>\"" . $code . "\"</b> is your account Verification code. Please don't share this code to anyone</p><hr><p>&copy;2023 O R M E C O All Rights Reserved</p></center>";
        $this->email->email_content($template, 'html');
        $this->email->recipient($email);
        //$this->email->send();
        if ($this->email->send()) {
            return true;
        }
    }


    #-----------------------------------------#
    #                                         #
    #           User Verification             #
    #                                         #
    #-----------------------------------------#
    public function user_verify()
    {
        if ($this->form_validation->submitted()) {
            $this->form_validation->name('confirmation_code')->required("Code is required")->numeric("Invalid Code");
            if ($this->form_validation->run()) {
                if ($this->session->userdata('verification_code') == $this->io->post('confirmation_code')) {

                    // $data = $this->User_model->login($this->io->post('confirmation_code'));

                    if ($this->Admin_model->update_verification($this->session->userdata('adminemail'))) {

                        $this->Admin_model->set_logged_in($this->session->userdata('username'));


                        // $this->session->set_flashdata(array('status_home' => 'Thank you for Registering to my website'));

                        set_flash_alert('success', 'Your account has been verified. You can login now.');

                        redirect('login-a-account');
                    }
                } else {
                    // $this->session->set_flashdata(array('confirmation_status' => 'Code not matched'));
                    set_flash_alert('danger', 'Verification Code not matched.');
                }
            }
        }
        $this->call->view('auth/adminAuth/admin-a-verification');
    }


    /**
     * User Login Authentication
     * @return void
     */
    public function login()
    {


        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('admin_email')->required("Email is required")->valid_email("Email is Invalid")
                ->name('admin_password')->required("Password is required");
            if ($this->form_validation->run()) {
                if ($this->Admin_model->login($this->io->post('admin_email'), $this->io->post('admin_password'))) {
                    $data = $this->Admin_model->login($this->io->post('admin_email'), $this->io->post('admin_password'));
                    if ($this->Admin_model->check_verified($this->io->post('admin_email')) == 'no') {
                        $user_code = $this->code_generator();
                        if ($this->send_verification($this->io->post('admin_email'), $user_code)) {
                            // $this->session->set_flashdata(array('confirmation_status' => 'Your Account is not yet verified'));

                            // --using alert function from app/helpers/common_helper.php
                            set_flash_alert_login('success', 'Your Account is not yet verified');
                            $this->session->set_userdata(
                                array(
                                    'adminemail' => $this->io->post('admin_email'),
                                    'verification_code' => $user_code,
                                    'admin_id'   => $data['admin_id'],
                                    'username'  => $data['username'],
                                    // 'image'     => $data['image'],
                                    'join_date'     => $data['join_date'],

                                )
                            );



                            redirect('account-a-verification');
                            exit();
                        }
                    } else {
                        $this->Admin_model->set_logged_in($data);
                        $this->session->set_userdata([
                            'logged_in' => 1,
                            'adminemail' => $this->io->post('admin_email'),
                            'admin_id'   => $data['admin_id'],
                            'username'  => $data['username'],


                            'join_date' => $data['join_date'],

                        ]);

                        set_flash_alert_login('success', 'Welcome Back!');

                        redirect('dashboard');
                        exit();
                    }
                } else {
                    // $this->session->set_flashdata(array('login_status' => 'Incorrect Email or Password'));

                    // --using alert function from app/helpers/common_helper.php
                    set_flash_alert('danger', 'Incorrect Email or Password');

                    // set_flash_alert('danger', config_item('SQLError'));


                    // set_flash_alert('danger', $this->form_validation->errors());
                }
            }
        }

        $this->call->view('auth/adminAuth/login');
    }


    public function logout()
    {
        $this->session->unset_userdata([
            'logged_in',
            'admin_id',
            'username',
            'admin_email',
            // 'verification_code',
            // 'phone',
            // 'image',
            'join_date',
            'admin_password',
            // 'status'


        ]);

        $this->session->sess_destroy();
        redirect('logout-a-account');
    }


    public function admin_logout()
    {
        // $this->User_model->set_logged_out();


        // redirect('user-authentication');


        // exit();

        // $data = [
        //     'count_all_users' => $this->User_model->count_all_users(),
        //     'count_all_offline_users' => $this->User_model->count_all_offline_users()

        // ];
        $this->call->view('auth/adminAuth/logout');
    }
}