<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class CreateEventController extends Controller
{

    public function createEvent()
    {


        if ($this->form_validation->submitted()) {

            $this->form_validation->name('e_title')->required('Please provide the title of the event.')
                ->name('e_start_date')->required('Please specify the start date of the event.')

                ->name('e_venue')->required('Please specify the venue of the event.')
                ->name('e_location')->required('Location of the event is required.');



            if ($this->form_validation->run()) {

                if (!$this->CreateEvent_model->exist_check($this->io->post('e_title'))) {

                    if (
                        $this->CreateEvent_model->createEvent(
                            $this->io->post('admin_id'),
                            $this->io->post('e_title'),
                            $this->io->post('e_start_date'),
                            $this->io->post('e_end_date'),
                            $this->io->post('e_start_time'),
                            $this->io->post('e_end_time'),
                            $this->io->post('e_venue'),
                            $this->io->post('e_location'),
                            $this->io->post('e_description')
                        )
                    ) {

                        set_flash_alert('success', 'Event Creation Success');
                    } else {

                        set_flash_alert('danger', config_item('SQLError'));
                    }
                } else {
                    set_flash_alert('danger', 'Event Already exists');
                }
            } else {
                set_flash_alert('danger', $this->form_validation->errors());
            }
            redirect('create-an-event');
        }
    }

    #-----------------------------------------#
    #                                         #
    # TODO: DO IT LATER  EVENT NOTIFICATION   #
    #                                         #
    #-----------------------------------------#
    public function send_event_notification()
    {
        $this->email->subject('New Event Created');
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
    public function try()
    {
        $this->send_event_notification();
    }
}