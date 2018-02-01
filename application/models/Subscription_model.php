<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription_model extends CI_Model
{

    public function getSubscriptions($condition = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_subscription');
        if($condition <> '') $this->db->where($condition);
        return $this->db->get()->result();
    }

    public function getSubscription($condition)
    {
        return $this->db->get_where('tbl_subscription', $condition)->row();
    }

    public function addSubscription($data)
    {
        return $this->db->insert('tbl_subscription', $data);
    }

    public function updateSubscription($field, $value, $data)
    {
        $this->db->where($field, $value);
        $this->db->update('tbl_subscription', $data);
    }

    public function deleteSubscription($field, $value)
    {
        $this->db->where($field, $value)->delete('tbl_subscription');
    }

}