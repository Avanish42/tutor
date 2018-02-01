<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getAdminDetail($condition)
    {
        return $this->db->get_where('tbl_admin', $condition)->row();
    }
}