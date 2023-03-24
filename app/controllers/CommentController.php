<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class CommentController extends Controller
{

    #-----------------------------------------#
    #                                         #
    #              Add Comment                #
    #                                         #
    #-----------------------------------------#

    public function addComment()
    {

        if ($this->form_validation->submitted()) {
            // $this->form_validaton->name('comment')->required();
            if ($this->form_validation->run()) {

                if ($this->Comment_model->addComment(
                    $this->io->post('pid'),
                    $this->io->post('uid'),
                    $this->io->post('comment')


                )) {
                    set_flash_alert('success', 'Comment Added');
                } else {

                    // set_flash_alert('danger', 'Comment failed');
                    set_flash_alert('danger', config_item('SQLError'));
                }
            } else {
                set_flash_alert('danger', $this->form_validation->errors());
            }
        }
    }

    #-----------------------------------------#
    #                                         #
    #        Send Comment Notification        #
    #                                         #
    #-----------------------------------------#

    public function send_verification($email, $code)
    {
        $this->email->subject('Comment Notification');
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

    function countComment()
    {
        $data = [

            'countComment' => $this->Comment_model->countComment()
        ];

        var_dump($data);
    }
}