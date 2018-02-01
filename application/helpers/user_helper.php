<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// show pre tag 
function pr($string){
 echo "<pre style='font-size:13px;'>";
 print_r($string);
 echo "</pre>";
}


function pure_url($url) {
   $url = preg_replace('/https?:\/\/|www./', '', $url);
   if ( strpos($url, '/') !== false ) {
      $ex = explode('/', $url);
      $url = $ex['0'];
   }
   return $url;
}



// show messages
function message($msg=''){
	$CI =& get_instance();
	if(!empty($msg)){
		$CI->session->set_flashdata('message',$msg);
	}
	else{
		return $CI->session->flashdata('message');
	}
}

// multiple files upload
function multiple_file_upload(&$file_post) {
		$file_ary = array();
		$file_count = count($file_post['name']);
		$file_keys = array_keys($file_post);
	
		for ($i=0; $i<$file_count; $i++) {
			foreach ($file_keys as $key) {
				$file_ary[$i][$key] = $file_post[$key][$i];
			}
		}
		return $file_ary;
}


function selected($database,$form){
	if($database == $form){
		echo 'selected';
	}
	else{
		return NULL;
	}
	
}



// change date format
function dateFormat($date){
	if($date == '0000-00-00'){
		$showdate = '';
	}else{
		$showdate = date("d-m-Y",strtotime($date));
	}	
	return $showdate;
}

function dateFormatMonth($date){
	if($date == '0000-00-00'){
		$showdate = '';
	}else{
		$showdate = date("d-M-Y",strtotime($date));
	}	
	return $showdate;
}

function include_zero($x){
	if($x > 9){
		return $x;
	}
	switch($x){
		case 1 : $y = "01"; break;	
		case 2 : $y = "02"; break;	
		case 3 : $y = "03"; break;	
		case 4 : $y = "04"; break;	
		case 5 : $y = "05"; break;	
		case 6 : $y = "06"; break;	
		case 7 : $y = "07"; break;	
		case 8 : $y = "08"; break;	
		case 9 : $y = "09"; break;	
	}
	return $y;
}



// GLOBAL
// get sum of db field
function get_sum($field,$table,$where=''){
	$CI =& get_instance();
	$CI->db->select_sum($field);
	$CI->db->from($table);
	if(!empty($where)){
		$CI->db->where($where);
	}
	$query =$CI->db->get();
	return $query->row();
}
	




function find_cat(){
	$CI =& get_instance();
	return $CI->My_model->find_by_sql("SELECT `cat` FROM `product` GROUP BY `cat` ");
}




function find_by($table,$where){
	$CI =& get_instance();
	return $CI->My_model->find_by($table,$where);
}

function find_by_all($table,$where){
	$CI =& get_instance();
	return $CI->My_model->find_by_all($table,$where);
}


function find_all($table){
	$CI =& get_instance();
	return $CI->My_model->find_by_all($table);
}

function get_count($table,$field = array()){
	$CI =& get_instance();
	return $CI->My_model->count_all_results($table,$field);
}


function find_by_sql($sql){
	$CI =& get_instance();
	return $CI->My_model->find_by_sql($sql);
}




// TBL_ADMIN and TBL_USERS
function get_client_details_by_client_id($client_id){
	$CI =& get_instance();
	return $CI->My_model->find_by(TBL_USERS,array("client_id"=>$client_id));
}

function get_users_name_by_id($id){
	$explode = explode(',',$id);
	$CI =& get_instance();
	return $CI->My_model->find_by_where_in(TBL_ADMINS,'id',$explode);
}

function get_name_by_user_id($id){
	$CI =& get_instance();
	return $CI->My_model->find_by(TBL_ADMINS,array("id"=>$id));
}




function get_buttons($id)
{
    $ci= & get_instance();
	$name = get_details_by_client_id($id)->name;
	$mobile_i = get_details_by_client_id($id)->mobile;
	$mobile = check_mobile($mobile_i);
	$client_status = get_details_by_client_id($id)->lead_status;
	
    $html=' <a title="Edit Merchant" href="'.base_url().'clients/index/'. $ci->url_encode->encryptor('encrypt',$id).'" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i></a> ';
	
	if($client_status == "Client"){
    $html .='<a title="Add Order" href="'.base_url().'clients/orders/'. $ci->url_encode->encryptor('encrypt',$id).'/TRUE" class="btn btn-success btn-xs"> <i class="fa fa-plus"></i></a> ';
	}else{
		 $html .='<a title="Add Order" href="javascript:void" class="btn btn-success btn-xs"> <i class="fa fa-plus"></i></a> ';	
	}
	
	 $html .='<a title="View all Orders" href="'.base_url().'clients/view_orders/true/'. $ci->url_encode->encryptor('encrypt',$id).'" class="btn btn-warning btn-xs"> <i class="fa fa-eye"></i></a> ';
	 
	 $html .='<a  style="background:#5bc0de;color:#fff" title="Call Now" href="'.base_url().'sales/calling/'.$mobile.'/2" class="btn  btn-xs"> <i class="fa fa-phone"></i></a> ';
	 
	  $html .='<a  style="background:#000;color:#fff" title="Add Stock" href="'.base_url().'stocks/add_stock/'. $ci->url_encode->encryptor('encrypt',$id).'" class="btn  btn-xs"> <i class="fa fa-tags"></i></a> ';
	
    
	if($ci->session->user->id == 1){
	$html .='<a title="Delete Merchant" href="'.base_url().'clients/delete_clients/'.$ci->url_encode->encryptor('encrypt',$id).'" oncontextmenu="return false" onClick="return confirmDelete(this.href,\''.$name.'\')" class="btn btn-primary btn-xs"> <i class="fa fa-trash-o"></i></a>';
	}
	
	
    return $html;
}




function reindex_numeric($arr) 
{ 
    $i = 0; 
    foreach ($arr as $key => $val) { 
        if (ctype_digit((string) $key)) { 
            $new_arr[$i++] = $val; 
        } else { 
            $new_arr[$key] = $val; 
        } 
    } 
    return $new_arr; 
}  




					 
					   
					 

