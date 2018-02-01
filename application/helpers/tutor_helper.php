<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('side_bar_data'))
{
    function side_bar_data()
    {
    

    $CI = get_instance();

    $CI->load->model('Tutor_model');
   
    $Categoriesdata=$CI->Tutor_model->getAllTutorCategories();
      
      $array = [];
       foreach($Categoriesdata as $var=>$val){
        foreach($val as $k=>$p){
             $array[$var][$k] = $p;
             $array[$var]['course'] = $CI->Tutor_model->getTutorCourseByCategoriesId($val->id);
         }

       }
      return $array;

    }   



}