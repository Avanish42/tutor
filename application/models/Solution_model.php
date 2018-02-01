<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solution_model extends CI_Model
{

    public function getSolutions($condition = '')
    {
        $this->db->select('*, q.id as qid, concat_ws(" ",u.fname, u.lname) as fullname, date_format(q.add_date, "%b %d, %Y") as date_added');
        $this->db->from('tbl_question q');
        $this->db->join('tbl_user u', 'q.user_id = u.id', 'left');
        if($condition <> '') $this->db->where($condition);
        return $this->db->get()->result();
    }

    public function getSolution($condition)
    {
        return $this->db->get_where('tbl_question', $condition)->row();
    }

    public function deleteSolution($field, $value)
    {
        $this->db->where($field, $value)->delete('tbl_question');
    }

}
