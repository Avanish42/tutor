<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{

    public function getCategoryDetailList($parent_id, $sub_categories = false)
    {
        $category_list = array();
        $categories = $this->db->select('*')->from('tbl_category')->where('parent_id', $parent_id)->get()->result();
        foreach ($categories as $category) {
            $category_list[] = (object) array(
                'id' => $category->id,
                'category_name' => $category->category_name,
                'image' => $category->image
            );

            if($sub_categories) {
                $subcategories = $this->db->select('*')->from('tbl_category')->where('parent_id', $category->id)->get()->result();
                foreach ($subcategories as $scategory) {
                    $category_list[] = (object)array(
                        'id' => $scategory->id,
                        'category_name' => "--" . $scategory->category_name,
                        'image' => $scategory->image
                    );
                }
            }
        }

        return $category_list;
    }

    public function getCategoryList()
    {
        $category_list = array();
        $categories = $this->db->select('*')->from('tbl_category')->where('parent_id', 0)->get()->result();
        foreach ($categories as $category) {
            $category_list[] = (object) array('id' => $category->id, 'category_name' => $category->category_name);
            $subcategories = $this->db->select('*')->from('tbl_category')->where('parent_id', $category->id)->get()->result();
            foreach ($subcategories as $scategory) {
                $category_list[] = (object) array('id' => $scategory->id, 'category_name' => "--" . $scategory->category_name);
            }
        }

        return $category_list;
    }

    public function getCategory($condition)
    {
        return $this->db->get_where('tbl_category', $condition)->result();
    }

    public function getSingleCategory($condition)
    {
        return $this->db->get_where('tbl_category', $condition)->row();
    }

    public function addCategory($data)
    {
        return $this->db->insert('tbl_category', $data);
    }

    public function updateCategory($field, $value, $data)
    {
        $this->db->where($field, $value);
        $this->db->update('tbl_category', $data);
    }

    public function deleteCategory($field, $value)
    {
        $this->db->where($field, $value)->delete('tbl_category');
    }
    public function getAllCategories()
    {

    }

}
