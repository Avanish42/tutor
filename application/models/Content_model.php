<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_model extends CI_Model
{

    public function getContents($condition = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_content');
        if($condition <> '') $this->db->where($condition);
        return $this->db->get()->result();
    }

    public function getContent($condition)
    {
        return $this->db->get_where('tbl_content', $condition)->row();
    }

    public function addContent($data)
    {
        return $this->db->insert('tbl_content', $data);
    }

    public function updateContent($field, $value, $data)
    {
        $this->db->where($field, $value);
        $this->db->update('tbl_content', $data);
    }

    public function deleteCourse($field, $value)
    {
        $this->db->where($field, $value)->delete('tbl_content');
    }

}