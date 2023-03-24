<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class UserAuth extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->call->model('User_model');
        $this->call->helper(array('form'));
        $this->call->library(array('email'));
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'arevalojayson15@gmail.com',
            'smtp_pass' => 'jca-/123',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->call->library('email', $config);
    }
    /**
     * User Login Authentication
     * @return void
     */
    public function user_login()
    {


        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('user_email')->required("Email is required")->valid_email("Email is Invalid")
                ->name('user_password')->required("Password is required");
            if ($this->form_validation->run()) {
                if ($this->User_model->login($this->io->post('user_email'), $this->io->post('user_password'))) {
                    $data = $this->User_model->login($this->io->post('user_email'), $this->io->post('user_password'));
                    if ($this->User_model->check_verified($this->io->post('user_email')) == 'no') {
                        $user_code = $this->code_generator();
                        if ($this->send_verification($this->io->post('user_email'), $user_code)) {
                            // $this->session->set_flashdata(array('confirmation_status' => 'Your Account is not yet verified'));

                            // --using alert function from app/helpers/common_helper.php
                            set_flash_alert_login('success', 'Your Account is not yet verified');
                            $this->session->set_userdata(
                                array(
                                    'useremail' => $this->io->post('user_email'),
                                    'verification_code' => $user_code,
                                    'user_id'   => $data['user_id'],
                                    'username'  => $data['username'],
                                    'image'     => $data['image'],
                                    'join_date'     => $data['join_date'],

                                )
                            );



                            redirect('account-verification');
                            exit();
                        }
                    } else {
                        $this->User_model->set_logged_in($data);
                        $this->session->set_userdata([
                            'logged_in' => 1,
                            'useremail' => $this->io->post('user_email'),
                            'user_id'   => $data['user_id'],
                            'username'  => $data['username'],
                            'image'     => $data['image'],
                            'phone'     => $data['phone'],
                            'join_date' => $data['join_date'],

                        ]);

                        set_flash_alert_login('success', 'You have been Logged in');

                        redirect('ormeco');
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

        $this->call->view('auth/userAuth/login');
    }

    /**
     * User Registration Method
     * @return void
     */
    public function user_signup()
    {
        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('username')->required("Username is required")->min_length(5, "Input username more than 5 characters")->max_length(10, 'username must be 10 characters')
                ->name('user_email')->required("Email is required")->valid_email('Email contains a valid email')
                ->name('user_password')->required("Password is required")->min_length(8, "Password is too short")
                ->name('phone')->required("Phone number is required")->max_length(11, "Phone number must be 11 digits")->min_length(11, "Phone number must be 11 digits")->numeric("Phone number must be a number");


            if ($this->form_validation->run()) {
                $user_code = $this->code_generator();

                if (!$this->User_model->exist_check($this->io->post('user_email'))) {
                    if ($this->User_model->register($this->io->post('username'), $this->io->post('user_email'), $this->io->post('user_password'), $this->io->post('phone'))) {
                        if ($this->send_verification($this->io->post('user_email'), $user_code)) {
                            $this->session->set_userdata(array(
                                'useremail' => $this->io->post('user_email'),
                                'verification_code' => $user_code,
                                'username' => $this->User_model->getusername($this->io->post('user_email'))
                            ));
                            redirect('account-verification');
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
        $this->call->view('auth/userAuth/register');
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

                    if ($this->User_model->update_verification($this->session->userdata('useremail'))) {

                        $this->User_model->set_logged_in($this->session->userdata('username'));


                        // $this->session->set_flashdata(array('status_home' => 'Thank you for Registering to my website'));

                        set_flash_alert('success', 'Your account has been verified. You can login now.');

                        redirect('user-authentication');
                    }
                } else {
                    // $this->session->set_flashdata(array('confirmation_status' => 'Code not matched'));
                    set_flash_alert('danger', 'Verification Code not matched.');
                }
            }
        }
        $this->call->view('auth/userAuth/user-verification');
    }

    #-----------------------------------------#
    #                                         #
    #               User Logout               #
    #                                         #
    #-----------------------------------------#

    // public function logout()
    // {
    //     $this->User_model->set_logged_out();


    //     redirect('logout');


    //     exit();
    // }


    public function logout()
    {
        $this->session->unset_userdata([
            // 'loggedin',
            'user_id',
            'username',
            'user_email',








        ]);

        $this->session->sess_destroy();



        redirect('logout');
    }


    public function user_logout()
    {
        // $this->User_model->set_logged_out();


        // redirect('user-authentication');


        // exit();

        $data = [
            'count_all_users' => $this->User_model->count_all_users(),
            'count_all_offline_users' => $this->User_model->count_all_offline_users()

        ];
        $this->call->view('auth/userAuth/logout', $data);
    }
    #-----------------------------------------#
    #                                         #
    #           Forgot Password               #
    #                                         #
    #-----------------------------------------#
    public function forgot_password()
    {
        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('user_email')->required("Email is required")->valid_email("Email is not Valid");
            if ($this->form_validation->run()) {
                if ($this->User_model->exist_check($this->io->post('user_email'))) {
                    if ($this->User_model->check_verified($this->io->post('user_email')) == 'yes') {
                        $reset_code = $this->code_generator();
                        if ($this->send_reset($this->io->post('user_email'), $reset_code)) {
                            $this->session->set_userdata(array('useremail' => $this->io->post('user_email'), 'reset_code' => $reset_code));
                            redirect('reset-password-code');
                            exit();
                        }
                    } else {
                        // $this->session->set_flashdata(array('forg_status' => 'The account with that email addres is not yet validated. '));

                        set_flash_alert('danger', 'The account with that email addres is not yet validated.');
                    }
                } else {
                    // $this->session->set_flashdata(array('forg_status' => 'No account found with that email address.'));
                    set_flash_alert('danger', 'No account found with that email address.');
                }
            }
        }

        $this->call->view('auth/userAuth/forgot-password');
    }

    public function send_reset($email, $code)
    {
        $this->email->subject('Account Password Reset');
        $template = file_get_contents(ROOT_DIR . PUBLIC_DIR . '/templates/reset-password.html');
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

    // public function send_reset($email, $code)
    // {
    //     $this->email->subject('Account Password Reset');
    //     $this->email->sender('ormeco@gmail.com');
    //     $content = "<center><h2>Reset your password</h2><br><p><b>\"" . $code . "\"</b> is your Password Reset Code. Please don't share this code to anyone</p><hr><p>&copy; 2023 O R M E C O All Rights Reserved</p></center>";
    //     $this->email->email_content($content, 'html');
    //     $this->email->recipient($email);
    //     //$this->email->send();
    //     if ($this->email->send()) {
    //         return true;
    //     }
    // }

    public function reset_confirm()
    {
        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('confirmation_reset')->required("Code is required")->numeric("Invalid Code");
            if ($this->form_validation->run()) {
                if ($this->session->userdata('reset_code') == $this->io->post('confirmation_reset')) {
                    redirect('change-password');
                    exit();
                } else {
                    // $this->session->set_flashdata(array('status_forgotconfirmation' => 'Incorrect Code.'));

                    set_flash_alert('danger', 'Incorrect Code.');
                }
            }
        }
        $this->call->view('auth/userAuth/reset-password-code');
    }


    public function reset_password()
    {
        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('user_password')->required("Password is required")->min_length(8, "Password is too short");
            if ($this->form_validation->run()) {
                if ($this->User_model->update_password($this->session->userdata('useremail'), $this->io->post('user_password'))) {
                    $this->User_model->set_logged_in($this->User_model->getusername($this->session->userdata('useremail')));
                    // $this->session->set_flashdata(array('status_home' => 'Successfully changed Password'));

                    set_flash_alert('success', 'Successfully changed Password.');

                    redirect('ormeco');
                } else {
                    set_flash_alert('danger', config_item('SQLError'));
                }
            }
        } else {
            set_flash_alert('danger', $this->form_validation->errors());
        }
        $this->call->view('auth/userAuth/change-password');
    }

    public function try()
    {
        $this->email->subject('Account Password Reset');
        $template = file_get_contents(ROOT_DIR . PUBLIC_DIR . '/templates/index.html');
        $search = array('{app_name}', '{app_link}');
        $replace = array("O R M E C O", BASE_URL);
        $template = str_replace($search, $replace, $template);
        $this->email->sender('ormeco@gmail.com');
        // $content = "<center><h2>Verify your Account</h2><br><p><b>\"" . $code . "\"</b> is your account Verification code. Please don't share this code to anyone</p><hr><p>&copy;2023 O R M E C O All Rights Reserved</p></center>";
        $this->email->email_content($template, 'html');
        $this->email->recipient('arevalojayson@gmail.com');
        //$this->email->send();
        if ($this->email->send()) {
            return true;
        }
    }

    function send()
    {


        $this->try();
    }

    public function count_users()
    {

        $count = $this->User_model->count_all_users();
        echo $count;
    }
}