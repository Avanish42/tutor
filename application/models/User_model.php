<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function getUsers($condition = '')
    {
        $this->db->select('*, concat_ws(" ",fname, lname) as fullname, date_format(add_date, "%b %d, %Y") as date_added');
        $this->db->from('tbl_user');
        if($condition <> '') $this->db->where($condition);
        return $this->db->get()->result();
    }

    public function getUser($condition)
    {
        return $this->db->get_where('tbl_user', $condition)->row();
    }

    public function addUser($data)
    {
        return $this->db->insert('tbl_user', $data);
    }

    public function updateUser($field, $value, $data)
    {
        $this->db->where($field, $value);
        $this->db->update('tbl_user', $data);
    }

    public function deleteUser($field, $value)
    {
        $this->db->where($field, $value)->delete('tbl_user');
    }

    public function addReview($data)
    {
        return $this->db->insert('tbl_tutor_review', $data);
    }

    public function doLogin($condition)
    {
        $this->db->from('tbl_user');
        $this->db->where('email', $condition['email']);
        $this->db->where('password', $condition['password']);
        $query = $this->db->get('');
        return $query->result();

        //return $this->db->select('*, concat_ws(" ",fname, lname) as fullname')->get_where('tbl_user', $condition)->row()->result();
    }

}
