<?php
Class My_model extends CI_Model
{
	function __construct(){
	   parent::__construct();
	}
	
	public function find_all($table='',$limit='',$order=''){
		$this->db->select('*')->from($table);
		if(!empty($limit)){
			$this->db->limit($limit);	
		}
		if(!empty($order)){
			$this->db->order_by($order);		
		}
		
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	
	public function login($table='',$where=''){  
		$this->db->select();
		$this->db->from($table);
		$this->db->where($where);
		$this->db->limit(1);
		        
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function find_by($table= '', $where=array()){          
		$this->db->select()->from($table)->where($where);
		$query = $this->db->get();
		return $query->first_row();
	}
	
	public function find_by_all($table= '', $where=array(), $order = array()){
		$this->db->select()->from($table)->where($where);
		
		if(!empty($order)){
			$this->db->order_by($order[0],$order[1]);	
		}
		
		$query = $this->db->get();
		return $query->result();
	}
	
	public function query($sql){
		return $this->db->query($sql);
	}
	
	
	public function find_by_sql($sql){          
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function find_by_sql1($sql){          
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	
	public function select_max($table,$val){
		$this->db->select_max($val)->from($table);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function insert($table='',$data=array()){
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
	
	public function insert_id($table='',$data=array()){
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
	
	public function update($table='',$data=array(),$where=''){
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}
	
	public function delete($table='',$where=array()){
		$this->db->delete($table, $where);
		if($this->db->affected_rows()){ 
			return TRUE;
		}
		else { 
			return FALSE; 
		}
	}
	
	
	
	
	public function find_by_where_in_1($table= '',$field='', $where1 , $where){
		$this->db->from($table);
		
		$this->db->where_in($field,$where1);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function find_by_where_in($table= '',$field='', $where){
		$this->db->from($table)->where_in($field,$where);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	// get sum of db field
	public function get_sum($field,$table,$where=''){
			$this->db->select_sum($field);
			$this->db->from($table);
			if(!empty($where)){
				$this->db->where($where);
			}
			$query = $this->db->get();
			return $query->row();
	}
	
	public function unlink_img($table='',$where=array(),$field,$multiple_img=FALSE,$path="_assets/back/upload/"){
		$result = $this->find_by($table,$where)->$field;
		
		if(!empty($result)){
			// multiple file
			if($multiple_img == TRUE){
				$explode = explode("~~",$result);
				array_pop($explode);
				foreach($explode AS $img){
					unlink($path.$img);	
				}
			}
			// single file
			else{
				unlink($path.$result);
			}
		}
	}
	
	
	
	public function unlink_img_when_delete_client($filename){
		$path = "_assets/back/upload/";
		if(!empty($filename)){
			unlink($path.$filename);
		}
	}
	
	
	
	public function empty_table($table=''){
		$this->db->empty_table($table); 
	}
	
	public function truncate($table=''){
		$this->db->truncate($table);
	}
	
	public function count_all_results($table='',$where=array()){
		if(!empty($where)){
			$this->db->where($where);	
		}
		return $this->db->count_all_results($table);
	}
	
	
	public function joining($table1,$table2,$field1,$field2,$where=array(),$orderBY=array()){
		
		//SELECT t1.*,t2.* from users  as t1  join orders as t2 on t1.id = t2.user_id
		//select * from users join orders where user.id = orders.user_id
		$this->db->select("*");
		$this->db->from($table1);
		$this->db->join($table2, "$table1.$field1 = $table2.$field2");
		if(!empty($orderBY)){
			$this->db->order_by($table2.".$orderBY[0]","$orderBY[1]");	
		}
		if(!empty($where)){
			$this->db->where($where);	
		}
		
		
		$query = $this->db->get();
		return $query->result();
		
	}
	
	
	
	
	
	
	public function joining_for_get_sum($table1,$table2,$sum_field,$field1,$field2,$where=array(),$orderBY=array()){
		//SELECT t1.*,t2.* from users  as t1  join orders as t2 on t1.id = t2.user_id
		//select * from users join orders where user.id = orders.user_id
		$this->db->select_sum($sum_field);
		$this->db->from($table1);
		$this->db->join($table2, "$table1.$field1 = $table2.$field2");
		if(!empty($orderBY)){
			$this->db->order_by($table2.".$orderBY[0]","$orderBY[1]");	
		}
		if(!empty($where)){
			$this->db->where($where);	
		}
		
		
		$query = $this->db->get();
		return $query->row();
		
	}
	
	
	
	
	public function joining_for_three_table($table1,$table2,$table3,$field1,$field2,$field3,$where=array(),$orderBY=array(),$group_by=""){
		//SELECT t1.*,t2.* from users  as t1  join orders as t2 on t1.id = t2.user_id
		//select * from users join orders where user.id = orders.user_id
		$this->db->select("*");
		$this->db->from($table1);
		$this->db->join($table2, "$table1.$field1 = $table2.$field2");
		$this->db->join($table3, "$table1.$field1 = $table3.$field3");
		
		if(!empty($orderBY)){
			$this->db->order_by($table2.".$orderBY[0]","$orderBY[1]");	
		}
		if(!empty($where)){
			$this->db->where($where);	
		}
		
		if(!empty($group_by)){
			$this->db->group_by($table1.".".$group_by);	
		}
		
		
		$query = $this->db->get();
		return $query->result();
		
	}
	
	
	public function joining_for_billing_csv($table1,$table2,$field1,$field2,$where='',$orderBY=array()){
		//SELECT t1.*,t2.* from users  as t1  join orders as t2 on t1.id = t2.user_id
		//select * from users join orders where user.id = orders.user_id
		$this->db->select("*");
		$this->db->from($table1);
		$this->db->join($table2, "$table1.$field1 = $table2.$field2");
		if(!empty($orderBY)){
			$this->db->order_by($table2.".$orderBY[0]","$orderBY[1]");	
		}
		if(!empty($where)){
			$this->db->where($where);	
		}
		
		
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	
	

	
	public function joining1($table1,$table2,$field1,$field2,$user_id){
		//SELECT t1.*,t2.* from users  as t1  join orders as t2 on t1.id = t2.user_id
		//select * from users join orders where user.id = orders.user_id
		/*$this->db->select("*");
		$this->db->from($table1);
		$this->db->join($table2, "$table1.$field1 = $table2.$field2");*/
		//user_id;
		$query = $this->db->query("select * from orders join photography on orders.ORDER_ID = photography.ORDER_ID where photography.photographer_assigned LIKE '%$user_id%'");
		
		//select * from orders join photography on orders.ORDER_ID = photography.ORDER_ID where photography.photographer_assigned in (2)
		//SELECT * FROM `orders` JOIN `photography` ON `orders`.`ORDER_ID` = `photography`.`ORDER_ID` WHERE `photography`.`photographer_assigneds` IN('2')
		
		//$this->db->from($table)->where_in($field,$where);
		//$where = array($user_id);
		//$this->db->where_in("$table2.photographer_assigned", $where);	
		
		
		//$query = $this->db->get();
		return $query->result();
		
	}
	
	
	
	/*public function get_agency_name($field='') 
	{          
		$query = $this->db->query("SELECT a_id FROM tbl_agents where Agency like '$field'");
		foreach($query->result() as $rsl)
		return $rsl->a_id;
	}
       public function get_total_records_on_theme($hotelType = NULL) 
	{          
		$cityID = $this->session->userdata('getCityID');
	    $where = "tbl_location.City = '$cityID' and tbl_overview.HotelThemes = '$hotelType'";
		$this->db->select("tbl_overview.hid");
		$this->db->from("tbl_overview");
		$this->db->join("tbl_location", "tbl_overview.hid = tbl_location.hid");
        $this->db->where($where);
		$query = $this->db->get();
		if($query->num_rows>0){
			return $query->num_rows;
		}
		else{
		return 0;
		}
		
	}	*/
	
	/*
	
	if(!empty($where)){	   
	$this->db->where($where);
	$this->db->select(TBL_HOTEL.'.hid');
	$this->db->from(TBL_HOTEL);
	$this->db->join(TBL_LOCATION, TBL_HOTEL.'.hid = '.TBL_LOCATION.'.hid');
	$this->db->join(TBL_OVERVIEW, TBL_HOTEL.'.hid = '.TBL_OVERVIEW.'.hid');
	$this->db->join(TBL_FEATURES, TBL_HOTEL.'.hid = '.TBL_FEATURES.'.hid');
		$this->db->order_by(TBL_HOTEL.".rank", "asc");
	 if(!empty($hname)){
		 $this->db->like("tbl_hotel.hotel","$hname");
	 }
	 */
				 
				 
		// 9543927979	
		
		
		public function mis_excel($table= '', $where=''){
		$this->db->select()->from($table)->where($where);
		$query = $this->db->get();
		return $query->result();
	}	
				 
	 
}