<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class PostController extends Controller
{

    public function insert_post()
    {

        if ($this->form_validation->submitted()) {

            // $this->form_validation->name('caption')->min_length(5, 'caption must be 5 characters.')->required();

            if ($this->form_validation->run()) {

                if (!$this->Post_model->exist_check($this->io->post('caption'))) {
                    $this->Post_model->insert_post(
                        $this->io->post('user_id'),
                        $this->io->post('caption'),
                        $this->io->post('address')

                    );
                } else {

                    set_flash_alert('danger', 'Your Caption was already taken.');
                }
            }

            // redirect('ormeco');
        }
    }

    public function sendmail()
    {
        $this->send_verification();
    }


    #-----------------------------------------#
    #                                         #
    # TODO: DO IT LATER  POST NOTIFICATION    #
    #                                         #
    #-----------------------------------------#
    public function send_verification()
    {
        $this->email->subject('Account Verification');
        $template = file_get_contents(ROOT_DIR . PUBLIC_DIR . '/templates/index.html');
        $search = array('{url_forgot}', '{app_name}', '{app_link}');
        $replace = array(BASE_URL . "forgot-password", "O R M E C O", BASE_URL);
        $template = str_replace($search, $replace, $template);
        $this->email->sender('ormeco@gmail.com');
        // $content = "<center><h2>Verify your Account</h2><br><p><b>\"" . $code . "\"</b> is your account Verification code. Please don't share this code to anyone</p><hr><p>&copy;2023 O R M E C O All Rights Reserved</p></center>";
        $this->email->email_content($template, 'html');
        $this->email->recipient('a@gmail.com');
        //$this->email->send();
        if ($this->email->send()) {
            return true;
        }
    }
}
