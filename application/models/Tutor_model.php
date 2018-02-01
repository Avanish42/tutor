<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_model extends CI_Model
{
    public function getApplicationDataById($id)
    {
         $this->db->select('*');
         $this->db->from('tbl_tutor_application');
         $this->db->where('user_id',$id);
         return $this->db->get()->result();

    }
 public function getProfileDataById($id)
    {
         $this->db->select('*');
         $this->db->from('tbl_tutor_profile1');
         $this->db->where('user_id',$id);
         return $this->db->get()->result();

    }

    public function saveTutorCategoriesModel($data)
    {
        $this ->db->insert('tbl_tutor_categories',$data);

    }

    public function getAllTutorCategories()
    {
         $this->db->select('*');
         $this->db->from('tbl_tutor_categories');
        // $this->db->where('user_id',$id);
         return $this->db->get()->result();
    }

    public function saveTutorCourseSave($data)
    {
        $this ->db->insert('tbl_tutor_course',$data);
    }

    public function showAllTutorCourseWithCourse()
    {
        $this->db->select('tbl_tutor_categories.name as categoriesname,tbl_tutor_course.name as name ,tbl_tutor_course.id as id,tbl_tutor_course.created_at as created_At ');
        $this->db->from('tbl_tutor_categories');
        $this->db->join('tbl_tutor_course', 'tbl_tutor_categories.id = tbl_tutor_course.categories_id');
        return $this->db->get()->result();
        
        //$this->db->join('table3', 'table3.ID = table1.ID');
    }

    public function getTutorCourseByCategoriesId($id)
    {
        $this->db->select('*');
         $this->db->from('tbl_tutor_course');
         $this->db->where('categories_id',$id);
         return $this->db->get()->result_array();

    }

    public function saveProfileData($data)
    {
          $this ->db->insert('tbl_tutor_application',$data);
    }





}
