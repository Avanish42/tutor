<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Category_model');
        $this->load->model('Course_model');
        $this->load->model('Content_model');
        $this->load->model('Subscription_model');
        $this->load->model('User_model');
        $this->load->model('Solution_model');
        $this->load->model('Tutor_model');
        $this->load->helper('tutor_helper');
    }

    public function index()
    {
        $this->load->view('admin/common/head');

        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/login');
        } else {

            $condition = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->Admin_model->getAdminDetail($condition);

            if(count($result) > 0) {

                $userdata = array(
                    'username'  => $result->username,
                    'name'  => $result->name,
                    'email'     => $result->email,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($userdata);

                redirect('admin/dashboard');
            }else{
                $this->session->set_flashdata('error_message', 'Username/Password is not matched with our record.');
            }
        }

        $this->load->view('admin/common/footer');
    }

    public function forgotpassword()
    {
        $this->load->view('admin/common/head');
        $this->load->view('admin/forgotpassword');
        $this->load->view('admin/common/footer');
    }

    public function logout()
    {
        $userdata = array(
            'username'  => '',
            'name'  => '',
            'email'     => '',
            'logged_in' => ''
        );
        $this->session->set_userdata($userdata);

        redirect('admin');
    }

    public function dashboard($parent_id = 0)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $category_list = $this->Category_model->getCategoryDetailList($parent_id);
        $data['categories'] = $category_list;

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/common/footer');
    }

    public function newcategory()
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $data['categories'] = $this->Category_model->getCategoryList();

        $this->form_validation->set_rules('name', 'category name', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/newcategory', $data);
        } else {

            $condition = array(
                'category_name' => $this->input->post('name')
            );
            $result = $this->Category_model->getCategory($condition);

            if(count($result) <= 0) {

                $config['upload_path'] = './assets/uploads/';
                $config['allowed_types'] = '*';

                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    $data = array(
                        'category_name' => $this->input->post('name'),
                        'parent_id' => $this->input->post('parent_id'),
                        'image' => "uploads/" . $this->upload->data()['file_name']
                    );
                    $this->Category_model->addCategory($data);
                }else{
                    $data = array(
                        'category_name' => $this->input->post('name'),
                        'parent_id' => $this->input->post('parent_id')
                    );
                    $this->Category_model->addCategory($data);
                }

                redirect('admin/dashboard');

            }else{
                $this->session->set_flashdata('error_message', 'This category is already exists...');
            }
        }

        $this->load->view('admin/common/footer');
    }

    public function updatecategory($id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $data['categories'] = $this->Category_model->getCategoryList();
        $data['ucategory'] = $ucategory = $this->Category_model->getSingleCategory(array('id' => $id));

        $this->form_validation->set_rules('name', 'category name', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/updatecategory', $data);
        } else {
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = '*';

            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {

                unlink('assets/'.$ucategory->image);

                $data = array(
                    'category_name' => $this->input->post('name'),
                    'parent_id' => $this->input->post('parent_id'),
                    'image' => "uploads/" . $this->upload->data()['file_name']
                );
                $this->Category_model->updateCategory('id', $id, $data);
            }else{
                $data = array(
                    'category_name' => $this->input->post('name'),
                    'parent_id' => $this->input->post('parent_id')
                );
                $this->Category_model->updateCategory('id', $id, $data);
            }

            redirect('admin/dashboard');
        }

        $this->load->view('admin/common/footer');
    }

    function deletecategory($category_id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->Category_model->deleteCategory('id', $category_id);
        redirect('admin/dashboard');
    }




    function deletesubject($id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->My_model->delete('tbl_tutor_meterial',array('id' => $id));
        redirect($_SERVER['HTTP_REFERER']);
    }

     function deletecoursesss($id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->My_model->delete('tbl_tutor_course',array('id' => $id));
        redirect($_SERVER['HTTP_REFERER']);
    }

    

     function deletesub($id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->My_model->delete(' tbl_tutor_categories',array('id' => $id));
        redirect($_SERVER['HTTP_REFERER']);
    }



    

    public function courses($category_id = 0)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $condition = ($category_id <> 0)?array('category_id'=>$category_id):"";
        $data['courses'] = $this->Course_model->getCourses($condition);

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/courses', $data);
        $this->load->view('admin/common/footer');
    }

    public function newcourse()
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $category_list = $this->Category_model->getCategoryList();
        $data['categories'] = $category_list;


        $this->form_validation->set_rules('name', 'course name', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/newcourse', $data);
        } else {

            $condition = array(
                'name' => $this->input->post('name')
            );
            $result = $this->Course_model->getCourse($condition);

            if(count($result) <= 0) {

                $config['upload_path'] = './assets/uploads/';
                $config['allowed_types'] = '*';

                $this->upload->initialize($config);
                if ($this->upload->do_upload('image')) {
                    $data = array(
                        'name' => $this->input->post('name'),
                        'course_content' => $this->input->post('course_content'),
                        'category_id' => $this->input->post('category_id'),
                        'video' => $this->input->post('video'),
                        'image' => "uploads/" . $this->upload->data()['file_name']
                    );
                    $this->Course_model->addCourse($data);
                }else{
                    $data = array(
                        'name' => $this->input->post('name'),
                        'course_content' => $this->input->post('course_content'),
                        'video' => $this->input->post('video'),
                        'category_id' => $this->input->post('category_id')
                    );
                    $this->Course_model->addCourse($data);
                }

                redirect('admin/courses');

            }else{
                $this->session->set_flashdata('error_message', 'This course is already exists...');
            }
        }

        $this->load->view('admin/common/footer');
    }

    public function updatecourse($id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $data['categories'] = $this->Category_model->getCategoryList();
        $data['course'] = $course = $this->Course_model->getCourse(array('id' => $id));

        $this->form_validation->set_rules('name', 'course name', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/updatecourse', $data);
        } else {
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = '*';

            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {

                unlink('assets/'.$course->image);

                $data = array(
                    'name' => $this->input->post('name'),
                    'course_content' => $this->input->post('course_content'),
                    'category_id' => $this->input->post('category_id'),
                    'video' => $this->input->post('video'),
                    'image' => "uploads/" . $this->upload->data()['file_name']
                );
                $this->Course_model->updateCourse('id', $id, $data);
            }else{
                $data = array(
                    'name' => $this->input->post('name'),
                    'course_content' => $this->input->post('course_content'),
                    'video' => $this->input->post('video'),
                    'category_id' => $this->input->post('category_id')
                );
                $this->Course_model->updateCourse('id', $id, $data);
            }

            redirect('admin/courses');
        }

        $this->load->view('admin/common/footer');
    }

    function deletecourse($course_id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->Course_model->deleteCourse('id', $course_id);
        redirect('admin/courses');
    }

    public function pages()
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $data['pages'] = $this->Content_model->getContents();

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/pages', $data);
        $this->load->view('admin/common/footer');
    }

    public function newpage()
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $this->form_validation->set_rules('title', 'page title', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/newpage');
        } else {

            $condition = array(
                'title' => $this->input->post('title')
            );
            $result = $this->Content_model->getContent($condition);

            if(count($result) <= 0) {

                $data = array(
                    'title' => $this->input->post('title'),
                    'page_text' => $this->input->post('page_text'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_description	' => addslashes($this->input->post('meta_description')),
                    'meta_keyword' => $this->input->post('meta_keyword'),
                    'position' => $this->input->post('position'),
                    'sort_order' => $this->input->post('sort_order')
                );
                $this->Content_model->addContent($data);

                redirect('admin/pages');

            }else{
                $this->session->set_flashdata('error_message', 'This content page is already exists...');
            }
        }

        $this->load->view('admin/common/footer');
    }

    public function updatepage($id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $data['content'] = $course = $this->Content_model->getContent(array('id' => $id));

        $this->form_validation->set_rules('title', 'page title', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/updatepage', $data);
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'page_text' => $this->input->post('page_text'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_description	' => addslashes($this->input->post('meta_description')),
                'meta_keyword' => $this->input->post('meta_keyword'),
                'position' => $this->input->post('position'),
                'sort_order' => $this->input->post('sort_order')
            );
            $this->Content_model->updateContent('id', $id, $data);

            redirect('admin/pages');
        }

        $this->load->view('admin/common/footer');
    }

    function deletepage($page_id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->Content_model->deleteContent('id', $page_id);
        redirect('admin/pages');
    }

    public function subscriptions()
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $data['subscriptions'] = $this->Subscription_model->getSubscriptions();

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/subscriptions', $data);
        $this->load->view('admin/common/footer');
    }

    public function newsubscription()
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $this->form_validation->set_rules('name', 'plan name', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/newsubscription');
        } else {

            $condition = array(
                'plan_name' => $this->input->post('name')
            );
            $result = $this->Subscription_model->getSubscription($condition);

            if(count($result) <= 0) {

                $data = array(
                    'plan_name' => $this->input->post('name'),
                    'price' => $this->input->post('price'),
                    'period' => $this->input->post('period')
                );
                $this->Subscription_model->addSubscription($data);

                redirect('admin/subscriptions');

            }else{
                $this->session->set_flashdata('error_message', 'This subscription is already exists...');
            }
        }

        $this->load->view('admin/common/footer');
    }

    public function updatesubscription($id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $data['subscription'] = $subscription = $this->Subscription_model->getSubscription(array('id' => $id));

        $this->form_validation->set_rules('name', 'plan name', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/updatesubscription', $data);
        } else {
            $data = array(
                'plan_name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'period' => $this->input->post('period')
            );
            $this->Subscription_model->updateSubscription('id', $id, $data);

            redirect('admin/subscriptions');
        }

        $this->load->view('admin/common/footer');
    }

    function deletesubscription($subscription_id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->Subscription_model->deleteSubscription('id', $subscription_id);
        redirect('admin/subscriptions');
    }

    public function users($type)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $condition = array('user_type' => $type);
        $data['users'] = $this->User_model->getUsers($condition);
        $data['heading'] = ($type == 1)?"Tutors":"Students";

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/users', $data);
        $this->load->view('admin/common/footer');
    }

    public function newuser($type)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $data['heading'] = ($type == 1)?"Tutor":"Student";
        $data['type'] = $type;

        $this->form_validation->set_rules('fname', 'first name', 'trim|required');
        $this->form_validation->set_rules('lname', 'last name', 'trim|required');
        $this->form_validation->set_rules('email', 'email address', 'trim|required|valid_email|is_unique[tbl_user.email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/newuser', $data);
        } else {

            $condition = array(
                'email' => $this->input->post('email')
            );
            $result = $this->User_model->getUser($condition);

            if(count($result) <= 0) {

                $data = array(
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'user_type' => $type
                );
                $this->User_model->addUser($data);

                redirect('admin/users/'.$type);

            }else{
                $this->session->set_flashdata('error_message', 'This user is already exists...');
            }
        }

        $this->load->view('admin/common/footer');
    }

    public function updateuser($id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $data['user'] = $user = $this->User_model->getUser(array('id' => $id));

        $data['heading'] = ($user->user_type == 1)?"Tutor":"Student";
        $data['type'] = $user->user_type;

        $this->form_validation->set_rules('fname', 'first name', 'trim|required');
        $this->form_validation->set_rules('lname', 'last name', 'trim|required');
        $this->form_validation->set_rules('email', 'email address', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/updateuser', $data);
        } else {
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $this->User_model->updateUser('id', $id, $data);

            redirect('admin/users/'.$user->user_type);
        }

        $this->load->view('admin/common/footer');
    }

    function deleteuser($type, $id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->User_model->deleteUser('id', $id);
        redirect('admin/users/'.$type);
    }

    public function questions()
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $condition = '';
        $data['questions'] = $this->Solution_model->getSolutions($condition);







        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/solutions', $data);
        $this->load->view('admin/common/footer');
    }

    function deletequestion($id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->Solution_model->deleteSolution('id', $id);
        redirect('admin/questions');
    }

    function tutorreview($tutor_id)
    {
        $data['reviews'] = $this->db->select('*, date_format(date_of_review, "%b %d, %Y") as review_date')->get_where('tbl_tutor_review', array('tutor_id' => $tutor_id))->result();
        $data['tutor_id'] = $tutor_id;

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/review', $data);
        $this->load->view('admin/common/footer');
    }

    public function add_review($tutor_id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $data['tutor_id'] = $tutor_id;

        $this->load->view('admin/common/head');
        $this->load->view('admin/common/sidebar');

        $this->form_validation->set_rules('review_date', 'date of review', 'trim|required');
        $this->form_validation->set_rules('question', 'question line', 'trim|required');
        $this->form_validation->set_rules('review', 'review/comment', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/add_review', $data);
        } else {
            $data = array(
                'tutor_id' => $tutor_id,
                'date_of_review' => $this->input->post('review_date'),
                'question' => $this->input->post('question'),
                'review' => $this->input->post('review')
            );
            $this->User_model->addReview($data);

            redirect('admin/tutorreview/'.$tutor_id);
        }

        $this->load->view('admin/common/footer');
    }


    public function showApplication($type,$id)
    {
                $this->load->view('admin/common/head');
                $this->load->view('admin/common/sidebar');
                // $data['type']=$type;
                // $data['id']=$id;
                $data['tutor_data']=$this->Tutor_model->getTutorDetailsById($id);
                $data['applicaton_data']=$this->Tutor_model->getApplicationDataById($id);
                $data['profile_data']=$this->Tutor_model->getProfileDataById($id);
                print_r($data);
                die();
                $this->load->view('admin/showApplication',$data);
                $this->load->view('admin/common/footer');
                //echo "test";
    }

    public function showProfile($type,$id)
    {

                  $this->load->view('admin/common/head');
                $this->load->view('admin/common/sidebar');
                // $data['type']=$type;
                // $data['id']=$id;
                $data['tutor_data']=$this->Tutor_model->getTutorDetailsById($id);
                $data['applicaton_data']=$this->Tutor_model->getApplicationDataById($id);
                $data['profile_data']=$this->Tutor_model->getProfileDataById($id);
                print_r($data);
                die();
                $this->load->view('admin/showApplication',$data);
                $this->load->view('admin/common/footer');


    }

    public function getSideBarData()
    {

        //echo "side Bar data";

                // side_bar_data();
                // die();
       
       
        $Categoriesdata=$this->Tutor_model->getAllTutorCategories();
       // print_r($Categoriesdata);
        //die();

        $final_data=array();
         foreach($Categoriesdata as $key => $value)
         {
            //  print_r($value);
            // echo $value->id;

            $final_data[$key]=$value->name;
            
            $data =$this->Tutor_model->getTutorCourseByCategoriesId($value->id);

            if(count($data))
            {       
                    foreach($data as $k=>$v)
                    {
                            //$final_data[$key][$k]=array();
                            //  print_r($v);
                            //array_push();
                            // $final_data[$key]['ab']=$v;
                    }
                            // print_r($data[0]);
            }
            
        }
         print_r($final_data);

         foreach($final_data as $k=>$v)
         {
             echo $v;
         }
        
        $Categoriesdata['course']=array();
        //foreach ($variable as $key => $value) {
            # code...

        //}




    }

    public function addTutorCategories()
    {
                $this->load->view('admin/common/head');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/add_tutor_categories');
                $this->load->view('admin/common/footer');

    }
    public function saveTutorCategories()
    {
        $data['name']=$this->input->post('name');
        $data['description']=$this->input->post('description');

        print_r($data);

        $this->Tutor_model->saveTutorCategoriesModel($data);
          //  die();
        redirect('admin/showTutorCategories');
        
    }
    public function showTutorCategories()
    {
        
        
        $data['categories']= $this->Tutor_model->getAllTutorCategories();
           
                $this->load->view('admin/common/head');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/show_tutor_categories',$data);
                $this->load->view('admin/common/footer');

    }

    public function addTutorCourse()
    {
                $data['categories']= $this->Tutor_model->getAllTutorCategories();

                $this->load->view('admin/common/head');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/add_tutor_course',$data);
                $this->load->view('admin/common/footer');

    }
    public function saveTutorCourse()
    {
        $data['categories_id']=$this->input->post('categories_id');
        $data['name']=$this->input->post('name');
             $this->Tutor_model->saveTutorCourseSave($data);   
             redirect('admin/showTutorCourse');



    }




    public function showTutorCourse()
    {
       // echo "tutor course";
        $data['course']= $this->Tutor_model->showAllTutorCourseWithCourse();

    //    print_r($data);
    //     die();
                  
                $this->load->view('admin/common/head');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/show_tutor_course',$data);
                $this->load->view('admin/common/footer');

    }


        public function view_tutor(){
             // echo "tutor course";
                $data['result']  = $this->My_model->find_all("tbl_tutor_meterial");

                $this->load->view('admin/common/head');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/view_tutor',$data);
                $this->load->view('admin/common/footer');
        }



    public function addTutorMaterial()
    {


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
        
         $this->My_model->insert('tbl_tutor_meterial',$array);
         message("<div class='alert alert-success'>Material addedd successfully.</div>");
         redirect("admin/addTutorMaterial");
        
        }
                $data['categories']= $this->Tutor_model->getAllTutorCategories();
        
                $this->load->view('admin/common/head');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/add_tutor_material',$data);
                $this->load->view('admin/common/footer');
    }
    public function saveTutorMaterial()
    {
       // $this->load->view('admin/');

    }

    public function ajaxDropDown()
    {
        $id= $this->input->post('id');
        //echo "in controler";

        $data=$this->Tutor_model->getTutorCourseByCategoriesId($id);
      //  print_r($data);

               $course="<option>--Select Course-- </option>"; 
            foreach($data as $k =>$v)
            {
                // echo $v['name'];
                $course.= " <option value=" .$v['id']. ">" . $v['name'] ."</option> ";
            }

            echo $course;

    }



    public function add_tutor_question($id)
    {


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
        
         $this->My_model->insert('tbl_tutor_question',$array);
         message("<div class='alert alert-success'>Question addedd successfully.</div>");
         redirect("admin/view_tutor_question");
        
        }
               
        
                $this->load->view('admin/common/head');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/add_tutor_question',array('id'=>$id));
                $this->load->view('admin/common/footer');
    }


    

    public function view_tutor_question(){
             // echo "tutor course";
                $data['result']  = $this->My_model->find_by_sql("select tbl_tutor_question.*, course_id,categories_id,name from tbl_tutor_question join tbl_tutor_meterial ON  tbl_tutor_question.material_id = tbl_tutor_meterial.id");

                $this->load->view('admin/common/head');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/view_tutor_question',$data);
                $this->load->view('admin/common/footer');
        }


     function deletequestiontutor($id)
    {
        if(!$this->session->userdata('logged_in'))
            redirect('admin');

        $this->My_model->delete('tbl_tutor_question',array('id' => $id));
        redirect($_SERVER['HTTP_REFERER']);
    }




   



}


