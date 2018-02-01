<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model
{

    public function getCourses($condition = '')
    {
        $this->db->select('c.*, ct.category_name');
        $this->db->from('tbl_course c');
        $this->db->join('tbl_category ct', 'c.category_id=ct.id');
        if($condition <> '') $this->db->where($condition);
        return $this->db->get()->result();
    }

    public function getCourse($condition)
    {
        return $this->db->get_where('tbl_course', $condition)->row();
    }

    public function addCourse($data)
    {
        return $this->db->insert('tbl_course', $data);
    }

    public function updateCourse($field, $value, $data)
    {
        $this->db->where($field, $value);
        $this->db->update('tbl_course', $data);
    }

    public function deleteCourse($field, $value)
    {
        $this->db->where($field, $value)->delete('tbl_course');
    }

     public function getCourseByCategorieId($id)
    {
            echo $id;
        $this->db->where('category_id',$id)->get('tbl_course')->result();
                return $this->db->get_where('tbl_course', $condition)->row();

    }

}
