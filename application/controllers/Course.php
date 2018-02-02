<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Tutor_model');
        
        $this->load->library('upload');
        $this->load->helper('tutor_helper');

        if (!($this->session->userdata  && ($this->session->userdata('user_type')==1) ))
        {
            redirect('user/login');
        }


    }

    public function course_details($id='')
    {

        $rs= $this->My_model->find_by_all('tbl_tutor_meterial',array('course_id'=>$id));
        foreach($rs as $dta);
         $data['result'] =   @$dta;
        
      
       
        $this->load->view('tutor/comman/head');
        $this->load->view('tutor/comman/header');
        $this->load->view('tutor/comman/sidebar');
        $this->load->view('tutor/course',$data);
        $this->load->view('tutor/comman/script');
        $this->load->view('tutor/comman/footer');
        // echo "in tutor contrloer";

    }


    //submit_answer

    public function submit_answer(){
         // Remember to give your form's submit tag a name="submit" attribute!
        if($this->input->post()) { // Form has been submitted.
           $array = array();
           foreach($this->input->post() AS $var=>$val){
               if(is_array($val)){
                   $array[$var] = json_encode($val);
                   
               }else{
                 $array[$var] = trim($val);
               }
            }
        
         $this->My_model->insert('tbl_tutor_answer',$array);
        
         redirect(base_url()."course/test/".$array['material_id']);
    }
}


   

    public function test($id='')
    {

        $user_id = $this->session->id;
         $result  = $this->My_model->find_by_sql("select * from tbl_tutor_question where material_id = $id order by RAND() LIMIT 1");

        foreach($result as $result);
        $data['result'] = $result;

        $data['material_id']  = $id;
        $this->load->view('tutor/comman/head');
        $this->load->view('tutor/comman/header');
        $this->load->view('tutor/comman/sidebar');
        $this->load->view('tutor/taketest',$data);
        $this->load->view('tutor/comman/script');
        $this->load->view('tutor/comman/footer');
        // echo "in tutor contrloer";

    }

    public function profile()
    {



        $this->load->view('tutor/comman/head');
        $this->load->view('tutor/comman/header');
       // $this->load->view('tutor/comman/sidebar');
        $this->load->view('tutor/profile');

        $this->load->view('tutor/comman/script');
        $this->load->view('tutor/comman/footer');


    }

    

   

    public function saveapplicationForm()
    {

       

            $data['user_id']=$this->input->post('user_id');
            $data['first_name']=$this->input->post('first_name');
            $data['last_name']=$this->input->post('last_name');
            $data['email']=$this->input->post('email');
            $data['contact_no']=$this->input->post('contact_no');
            $data['whatapp_no']=$this->input->post('whatapp_no');
            $data['gender']=$this->input->post('gender');
            $data['dob']=$this->input->post('dob');
            $data['user_name']=$this->input->post('user_name');
            $data['job_timming']=$this->input->post('job_timming');
            $data['account_no']=$this->input->post('account_no');
            $data['IFSC_code']=$this->input->post('IFSC_code');

            //print_r($data);



                 $config['upload_path'] = './assets/uploads/tutor';
                 $config['allowed_types'] = '*';
                // $config['file_name']=$data['email']."_profile_".time();

                $this->upload->initialize($config);
                if ($this->upload->do_upload('profile_img')) {
                    // $data = array(
                        
                    //     'profile_img' => "uploads/" . $this->upload->post('email')
                    // );
                    $data['profile_pic']= 'uploads/tutor/'. $this->upload->data()['file_name'];                
                    //$this->Course_model->addCourse($data);
                }
               
                     $this->Tutor_model->saveProfileData($data);

                // if($this->tutor_model->saveProfileData($data));
                // {
                //     $this->session->set_flashdata('error_message', 'something wrong ');
                //     redirect('TutorController/');
                // }
                // else {

                //      $this->session->set_flashdata('error_message', 'something wrong ');
                // }


    }

   

}

