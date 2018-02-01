<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TutorController extends CI_Controller {

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

    public function index()
    {

        $this->load->view('tutor/comman/head');
        $this->load->view('tutor/comman/header');
        $this->load->view('tutor/comman/sidebar');
        $this->load->view('tutor/index');
        $this->load->view('tutor/comman/script');
        $this->load->view('tutor/comman/footer');
        // echo "in tutor contrloer";

    }


    private function upload_files($path, $title, $files)
    {
        $config = array(
            'upload_path'   => $path,
            'overwrite'     => false,
            'allowed_types' => 'jpg|gif|png|pdf' ,
            'max_size' => 2048                      
        );

        $this->load->library('upload', $config);

        $images = array();
       
        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $fileName = $title .'_'. $image;
           
            $images[] = $fileName;

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
               $this->upload->data();
             } else {
                //return  array('error' => $this->upload->display_errors());;
                return null;
            }
        }

        return $images;
    }

    public function profile()
    {

        $user_id =  $this->session->id;
        $this->load->view('tutor/comman/head');
        $this->load->view('tutor/comman/header');
      
        $this->load->library('upload');
        
        
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



            if(!empty($_FILES['profile']['name'][0])){
            $array['profile'] = json_encode($this->upload_files("assets/uploads", "profile_".strtotime("now"), $_FILES['profile']));
            }
    
            if(!empty($_FILES['grade']['name'][0])){
            $array['grade'] = json_encode($this->upload_files("assets/uploads", strtotime("now"), $_FILES['grade']));
            }
            if(!empty($_FILES['gate']['name'][0])){
            $array['gate'] = json_encode($this->upload_files("assets/uploads", strtotime("now"), $_FILES['gate']));
            }

        
         unset($array['fname'],$array['lname']);

         $arrayFirst = ['fname'=>$this->input->post('fname'),'lname'=>$this->input->post('lname')];

         $this->My_model->update('tbl_tutor_profile',$array,array('tbl_user_id'=>$user_id));
         $this->My_model->update('tbl_user',$arrayFirst,array('id'=>$user_id));
         message("<div class='alert alert-success'>Profile updated Successfully.</div>");
         redirect("TutorController/profile");
                
        
        
        }// $this->input->post()
        
       
        
        $user_data =  (array) $this->My_model->find_by('tbl_tutor_profile',array('tbl_user_id'=>$user_id));

        $usertable = $this->My_model->find_by_sql1("select email,fname,lname from tbl_user where id = $user_data[tbl_user_id]");
        foreach($usertable as $usertable);
         $data  = array_merge($user_data,$usertable);
         
       
        $this->load->view('tutor/profile',$data);


    

        $this->load->view('tutor/comman/script');
        $this->load->view('tutor/comman/footer');


    }

    public function saveProfile()
    {

            $data['user_id']=$this->input->post('user_id');
            $data['first_name']=$this->input->post('first_name');
            $data['last_name']=$this->input->post('last_name');
            $data['gender']=$this->input->post('gender');
            $data['dob']=$this->input->post('dob');
            $data['address1']=$this->input->post('address1');
            $data['address2']=$this->input->post('address2');
            $data['mobile']=$this->input->post('mobile');
            $data['bachelor_degree']=$this->input->post('bachelor_degree');
            $data['bachelor_degree_year_join']=$this->input->post('bachelor_degree_year_join');
            $data['bachelor_degree_year_pass']=$this->input->post('bachelor_degree_year_pass');
            $data['master_degree']=$this->input->post('master_degree');
            $data['master_degree_year_join']=$this->input->post('master_degree_year_join');
            $data['master_degree_year_pass']=$this->input->post('master_degree_year_pass');
            $data['semister_grade_sheet']=$this->input->post('semister_grade_sheet');
            $data['other_scorecard']=$this->input->post('other_scorecard');
            $data['major_apartment']=$this->input->post('major_apartment');
            $data['about_you']=$this->input->post('about_you');

            print_r($data);

    }


    public function applicationForm()
    {

        $this->load->view('tutor/comman/head');
        $this->load->view('tutor/comman/header');
        $this->load->view('tutor/comman/sidebar');
        $this->load->view('tutor/comman/application');
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

    public function Assignment()

    {
         $this->load->view('tutor/comman/head');
        $this->load->view('tutor/comman/header');
        $this->load->view('tutor/comman/sidebar');
        $this->load->view('tutor/assignment');

        $this->load->view('tutor/comman/script');
        $this->load->view('tutor/comman/footer');

    }

}

