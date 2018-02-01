<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function listing()
    {
        if(!$this->session->userdata('logged_in'))
            redirect('user/login');

        $this->load->view('include/header');
        $this->load->view('frontend/list_category');
        $this->load->view('include/footer');
    }

    public function Subscribe()
    {
        if(!$this->session->userdata('logged_in'))
        redirect('user/login');
        $this->load->view('include/header');
        $this->load->view('frontend/subscribe');
        $this->load->view('include/footer');
    }
}
