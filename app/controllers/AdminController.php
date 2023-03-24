<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class AdminController extends Controller
{
    public function index()
    {
        $this->call->view('inc/admin/header');
        $this->call->view('admin/index');
        $this->call->view('inc/admin/footer');
    }


    public function event()
    {

        $data = [
            'getAllEvent' => $this->CreateEvent_model->getAllEvent()
        ];
        $this->call->view('inc/admin/header', $data);
        $this->call->view('admin/app/events/event-list', $data);
        $this->call->view('inc/admin/footer', $data);
    }


    public function create_an_event()
    {
        $this->call->view('inc/admin/header');
        $this->call->view('admin/app/events/create-an-event');
        $this->call->view('inc/admin/footer');
    }
    public function event_detail($event_id)
    {
        $data = [
            'event_detail' => $this->CreateEvent_model->event_details($event_id),
            'getAllEvent' => $this->CreateEvent_model->getAllEvent()
        ];
        $this->call->view('inc/admin/header', $data);
        $this->call->view('admin/app/events/event-detail', $data);
        $this->call->view('inc/admin/footer', $data);
    }
    public function user_list()
    {
        $this->call->view('inc/admin/header');
        $this->call->view('admin/pages/user/user-list');
        $this->call->view('inc/admin/footer');
    }
}
