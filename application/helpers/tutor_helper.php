<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('side_bar_data'))
{
    function side_bar_data()
    {
      //  echo "sidebar";

         $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Tutor_model');
    // $CI->Tutor_model->do_something();

             $Categoriesdata= $CI->Tutor_model->getAllTutorCategories();



        $final_data=array();
         foreach($Categoriesdata as $key => $value)
         {
            //  print_r($value);
            // echo $value->id;
            
            $final_data[$key]=$value->name;
            
            $data = $CI->Tutor_model->getTutorCourseByCategoriesId($value->id);

            if(count($data))
            {       
                    foreach($data as $k=>$v)
                    {
                      //  print_r($v);
                   // $final_data[$key][$k]=array();
                     //    $final_data[$key]['ab']=$v;
                    }
                // print_r($data[0]);
            }
            
        }
         return $final_data;
        
        $Categoriesdata['course']=array();
        
    }   



}