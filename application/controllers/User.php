<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function register($type = 1)
	{
	    $data['type'] = $type;

        $this->load->view('include/header');

        $this->form_validation->set_rules('fname', 'first name', 'trim|required');
        $this->form_validation->set_rules('lname', 'last name', 'trim|required');
        $this->form_validation->set_rules('email', 'email address', 'trim|required|valid_email|is_unique[tbl_user.email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('cpassword', 'password', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('frontend/register', $data);
        } else {
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'user_type' => $type
            );
            $this->User_model->addUser($data);

            redirect('user/thanks');
        }

        $this->load->view('include/mini-footer');
	}

    public function login()
    {
        $this->load->view('include/header');

        $this->form_validation->set_rules('email', 'email address', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('frontend/login');
        } else {
            $condition = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );

            $user = $this->User_model->doLogin($condition);

           // print_r($user);
           // echo count($user); die();

            if(count($user) > 0) {
                $userdata = array(
                    'name'  => $user[0]->fname,
                    'id'  => $user[0]->id,
                    'email'     => $user[0]->email,
                    'user_type' =>$user[0]->user_type,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($userdata);


                if($user[0]->user_type==1)
                {


                    redirect('TutorController');
                      //  echo "admin";

                }
                elseif($user[0]->user_type==2) {
                    # code...
                 redirect('category/listing');

                }

            }

            else{

                $this->load->view('frontend/login');
                $this->session->set_flashdata('error_message', 'Username/Password is not matched with our record.');
            }



        }

        $this->load->view('include/footer');
    }

    public function forgot_password()
    {
        $this->load->view('include/header');
        $this->load->view('frontend/forgot');
        $this->load->view('include/mini-footer');
    }

    public function thanks()
    {
        $this->load->view('include/header');
        $this->load->view('frontend/thanks');
        $this->load->view('include/mini-footer');
    }

    public function profile()
    {
        $this->load->view('include/header');
        $this->load->view('frontend/profile');
        $this->load->view('include/footer');
    }

    public function logout()
    {
        $userdata = array(
            'name'  => '',
            'email'     => '',
            'logged_in' => 0
        );
        $this->session->set_userdata($userdata);
        $this->session->sess_destroy();



        redirect('user/login');
    }
}