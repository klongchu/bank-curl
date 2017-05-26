<?php

class Admin_model extends CI_Model
{

	//public $name;
	//public $description;

	public function __construct()
	{
		parent::__construct();
	}

/*
* 
*	Function Main use multi pages
* 
* @return
*/
	public function record_count_data($table,$id,$cl){
		$query = $this->db->where($cl,$id)->where('topic<>','')->get('tbl_lng_'.$table);
		return $query->num_rows();
	}
	public function record_count($table){
		//$this->db->like('title',$keyword);
		$this->db->from($table);
		return $this->db->count_all_results();
	}
	public function fetch_data($limit, $start,$table){
 if($table == 'tbl_news'){
 	$this->db->order_by("views", "desc"); 
 	$this->db->order_by("id", "desc"); 
 }
		
		$this->db->limit($limit, $start);
		//$this->db->select('id,title,img,credit,views,comment,type,date_post');
		$this->db->select('*');
		$query = $this->db->get($table);
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
/* ====================================
***************** *********************
***************** Bank *********************
***************** *********************
=======================================*/	
	public function entry_data_bank($id){
		$this->bank_username = $this->input->post('bank_username');
		$this->bank_password = $this->input->post('bank_password');
		$this->bank_name = $this->input->post('bank_name');
		$this->bank_number = $this->input->post('bank_number');
		$this->balance = $this->input->post('balance');
		$this->post_date = date('Y-m-d H:i:s');
		$this->update_date = date('Y-m-d H:i:s');
		$this->ip = $_SERVER['REMOTE_ADDR'];
		$table = "bank";
		if($id == 0){
			$this->db->insert('tbl_'.$table, $this);
			$id = $this->db->insert_id();
			$this->bank_id = $id;
			$this->type = "Add";
			$this->db->insert('tbl_history_bank', $this);
		}
		else{
			$this->db->update('tbl_'.$table, $this, array('id'=> $id));
			$this->bank_id = $id;
			$this->type = "Edit";
			$this->db->insert('tbl_history_bank', $this);
		}		
	}
	public function record_count_bank($username){
		$query = $this->db->where('bank_username',$username)->get('tbl_bank');
		return $query->num_rows();
		//return 10;
	}	
/* ====================================
***************** *********************
***************** Member *********************
***************** *********************
=======================================*/	
	public function fetch_data_member($limit, $start,$table,$keyword){

		if($keyword != NULL){
			$this->db->like('name',$keyword);
		}
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
	public function fetch_data_member_his($table,$keyword){

		$this->db->where('member',$keyword);
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
/* ====================================
***************** *********************
***************** Report *********************
***************** *********************
=======================================*/	
	public function fetch_data_report($limit, $start,$table,$keyword){
		if($this->input->get('status')){
			$status_re =  $this->input->get('status');
		}else{
			$status_re =  0;
		}
		$this->db->where('status',$status_re);
		if($this->input->get('keyword')){
			$this->db->like('lineid',$this->input->get('keyword'));
		}
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
	public function entry_data_manage_report(){
		
		$id = $this->input->post('id_booking');
		$data['status'] = $this->input->post('status');
		$data['lock'] = $this->input->post('lock');
		$this->db->update('tbl_report', $data, array('id'=> $id));	
		
		$post_id = $this->input->post('post_id');
		if($this->input->post('lock') == 1){
			$data_report['lock'] = 0;
			$this->db->update('tbl_postline', $data_report, array('id'=> $post_id));	
		}else{
			$data_report['lock'] = 1;
			$this->db->update('tbl_postline', $data_report, array('id'=> $post_id));
		}
		
		return $id;
	}
/* ====================================
***************** *********************
***************** VIP *********************
***************** *********************
=======================================*/	
	public function fetch_data_vip($limit, $start,$table,$keyword){
		$this->db->where('vip_end >',date('Y-m-d H:i:s'));
		if($keyword != NULL){
			$this->db->like('lineid',$keyword);
		}
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
/* ====================================
***************** *********************
***************** General *********************
***************** *********************
=======================================*/	
	public function fetch_data_general($limit, $start,$table,$keyword,$type,$province){
		$this->db->where('vip_end <= ',date('Y-m-d H:i:s'));
		if($keyword != NULL){
			$this->db->like('lineid',$keyword);
		}
		if($type != NULL){
			$this->db->like('type',$type);
		}
		if($province != NULL){
			$this->db->like('province',$province);
		}
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$query = $this->db->get($table);
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
/* ====================================
***************** *********************
***************** History Topup *********************
***************** *********************
=======================================*/	
	public function fetch_data_history($limit, $start,$table,$keyword,$keyword_2){
		//$this->db->where('vip_end <= ',date('Y-m-d'));
		//if($keyword != NULL){
			if($keyword){
				$this->db->where("post_date BETWEEN '".$keyword." 00:00:01' AND '".$keyword_2." 23:59:59' ");
			}
			
		//}
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$query = $this->db->get($table);
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
/* ====================================
***************** *********************
***************** History Topup *********************
***************** *********************
=======================================*/	
	public function fetch_data_his_post($limit, $start,$table,$keyword){
		//$this->db->where('vip_end <= ',date('Y-m-d'));
		//if($keyword != NULL){
			$this->db->like('lineid',$keyword);
		//}
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$query = $this->db->get($table);
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
/* ====================================
***************** *********************
***************** History Topup *********************
***************** *********************
=======================================*/	
	public function fetch_data_topup($limit, $start,$table){
		$this->db->where('vip_end <= ',date('Y-m-d'));
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$query = $this->db->get($table);
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}	
	public function fetch_data_type($limit, $start,$table){
		//$this->db->like('title',$keryword);
 
		$this->db->order_by("id", "asc"); 
		$this->db->limit($limit, $start);
		//$this->db->select('id,title,img,credit,views,comment,type,date_post');
		$this->db->select('*');
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}	
/////////////// Main Data
	public function entry_data($id){
		$table = 'news';
		$topic_chk = $this->input->post('topic');
		if(isset($topic_chk)){
			$this->topic = $this->input->post('topic');
		}
		
		
		$topic_en_chk = $this->input->post('topic_en');
		if($topic_en_chk){
			$this->topic_en = $this->input->post('topic_en');
		}
		$this->title = $this->input->post('title');
		$this->description = $this->input->post('description');
		$this->content = $this->input->post('content');
		$this->credit = $this->input->post('credit');
		$this->type = $this->input->post('type');
		$this->post_by = $this->session->userdata('username');
		
		
		
 
		
 
		
		
		
		if($id == NULL){
			
			$type = explode('.', $_FILES["image"]["name"]);
			$type = strtolower($type[count($type)-1]);
			$url = "./uploads/".$this->input->post('type')."/";
			$name = "".uniqid(rand()).'.'.$type;
			if(in_array($type, array("jpg", "jpeg", "gif", "png")))
				if(is_uploaded_file($_FILES["image"]["tmp_name"]))
					if(move_uploaded_file($_FILES["image"]["tmp_name"],$url.$name))
			
			$this->img = $name; 
			$this->date_post = date('Y-m-d H:i:s'); 
			
			$this->db->insert('tbl_'.$table, $this);
			$id = $this->db->insert_id();
		}
		else{
			$this->db->update('tbl_'.$table, $this, array('id'=> $id));	
		}
		
		if($table != 'lng'){
			//$this->entry_data_lng($id,$table);
		}
		
	}
	private function do_upload(){
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./images/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
		return "";
	}
	/////
	public function entry_data_lng($id,$table){
			$query = $this->db->where('status',1)->get("tbl_lng");
			if($query->num_rows() > 0)
			{
				foreach($query->result() as $row)
				{
					$query_lng = $this->db->where($table,$id)->where($table.'_lng',$row->id)->get("tbl_lng_".$table."");
					if($query_lng->num_rows() > 0)
					{
						foreach($query_lng->result() as $row_lng)
						{
							$data['topic'] = $this->input->post('topic_'.$row->id);
							$this->db->update('tbl_lng_'.$table.'', $data, array('id'=> $row_lng->id));
						}
					}else{
						$data[$table] = $id;
						$data[$table.'_lng'] = $row->id;
						$data['topic'] = $this->input->post('topic_'.$row->id);
						$this->db->insert('tbl_lng_'.$table.'', $data);
					}
				}
			}
	}
/* ====================================
***************** *********************
***************** Game *********************
***************** *********************
=======================================*/	
	public function entry_data_game($id){
		$this->title = $this->input->post('title');
		$table = "game";
		if($id == NULL){
			$this->db->insert('tbl_'.$table, $this);
			$id = $this->db->insert_id();
		}
		else{
			$this->db->update('tbl_'.$table, $this, array('id'=> $id));	
		}		
	}
/* ====================================
***************** *********************
***************** Type *********************
***************** *********************
=======================================*/	
	public function entry_data_type($id){
		$this->title = $this->input->post('title');
		$table = "type";
		if($id == NULL){
			$this->db->insert('tbl_'.$table, $this);
			$id = $this->db->insert_id();
			
			if($_FILES["no_img"]["name"]){
				
			$type = explode('.', $_FILES["no_img"]["name"]);
			$type = strtolower($type[count($type)-1]);
			$url = "./uploads/admin/type_img/";
			$name = "".$id.'.'.$type;
			if(in_array($type, array("jpg", "jpeg", "gif", "png")))
				if(is_uploaded_file($_FILES["no_img"]["tmp_name"]))
					if(move_uploaded_file($_FILES["no_img"]["tmp_name"],$url.$name))
					
					copy('./uploads/admin/type_img'.$name);
			$this->no_img = $name; 
			$this->db->update('tbl_'.$table, $this, array('id'=> $id));
			
			}
			
		}
		else{
			$this->db->update('tbl_'.$table, $this, array('id'=> $id));
			if($_FILES["no_img"]["name"]){
				
			$type = explode('.', $_FILES["no_img"]["name"]);
			$type = strtolower($type[count($type)-1]);
			$url = "./uploads/admin/type_img/";
			$name = "".$id.'.'.$type;
			if(in_array($type, array("jpg", "jpeg", "gif", "png")))
				if(is_uploaded_file($_FILES["no_img"]["tmp_name"]))
					if(move_uploaded_file($_FILES["no_img"]["tmp_name"],$url.$name))
					
					copy('./uploads/admin/type_img'.$name);
			$this->no_img = $name; 
			$this->db->update('tbl_'.$table, $this, array('id'=> $id));
			
			}
		}		
	}
/* ====================================
***************** *********************
***************** Read And Remove *********************
***************** *********************
=======================================*/	
	public function read_data($table,$id){
		$this->db->where('id',$id);
		$query = $this->db->get('tbl_'.$table);
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function remove_data($table,$id){
		$this->db->delete('tbl_'.$table,array('id'=>$id));
	}
/* ====================================
***************** *********************
***************** Web *********************
***************** *********************
=======================================*/
public function fetch_data_web(){
		$this->db->select('*');
		$query = $this->db->get('tbl_webconfig');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
public function entry_data_webconfig(){
		
		
		$this->title = $this->input->post('title');
		$this->keyword = $this->input->post('keyword');
		$this->description = $this->input->post('description');
		$this->about = $this->input->post('about');
		$this->contact = $this->input->post('contact');
		$this->phone = $this->input->post('phone');
		$this->email = $this->input->post('email');
		$this->facebook = $this->input->post('facebook');
		$this->google = $this->input->post('google');
		$this->twitter = $this->input->post('twitter');
		$this->dev_by = $this->input->post('dev_by');
		$this->title_bar = $this->input->post('title_bar');
		$this->title_member = $this->input->post('title_member');
		$this->title_add = $this->input->post('title_add');
		$this->title_post = $this->input->post('title_post');
		$this->title_search = $this->input->post('title_search');
		$this->title_type = $this->input->post('title_type');
		$this->title_descript = $this->input->post('title_descript');
		$this->title_vip = $this->input->post('title_vip');
		$this->title_top = $this->input->post('title_top');
		$this->webstats = $this->input->post('webstats');
		$this->vip_rule = $this->input->post('vip_rule');
		$this->topup_50 = $this->input->post('topup_50');
		$this->topup_90 = $this->input->post('topup_90');
		$this->topup_150 = $this->input->post('topup_150');
		$this->topup_300 = $this->input->post('topup_300');
		$this->topup_500 = $this->input->post('topup_500');
		$this->topup_1000 = $this->input->post('topup_1000');
		$this->amount_per_day = $this->input->post('amount_per_day');
		$this->sms_username = $this->input->post('sms_username');
		$this->sms_password = $this->input->post('sms_password');
		$this->sms_type = $this->input->post('sms_type');
		$this->sms_title = $this->input->post('sms_title');
		
		
		
		
		if($_FILES["logo"]["name"]){
			$type = explode('.', $_FILES["logo"]["name"]);
			$type = strtolower($type[count($type)-1]);
			$url = "./uploads/admin/";
			$name = '1.'.$type;
			if(in_array($type, array("jpg", "jpeg", "gif", "png")))
				if(is_uploaded_file($_FILES["logo"]["tmp_name"]))
					if(move_uploaded_file($_FILES["logo"]["tmp_name"],$url.$name))
			
			$this->logo = $name; 
		}
		if($_FILES["fav"]["name"]){
			$type = explode('.', $_FILES["fav"]["name"]);
			$type = strtolower($type[count($type)-1]);
			$url = "./uploads/admin/";
			$name = '1.ico';
			if(in_array($type, array("ico", "ico", "ico", "png")))
				if(is_uploaded_file($_FILES["fav"]["tmp_name"]))
					if(move_uploaded_file($_FILES["fav"]["tmp_name"],$url.$name))
			
			$this->fav = $name; 
		}
		
		
		$this->db->update('tbl_webconfig', $this, array('id'=> 1));		
	}

/* ====================================
***************** *********************
***************** Web Profile *********************
***************** *********************
=======================================*/
public function fetch_data_profile(){
		$this->db->where('id',1);
		$this->db->select('*');
		$query = $this->db->get('tbl_admin');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}
public function entry_data_profile(){
		
		
		//$this->username = $this->input->post('username');
		$this->password = $this->input->post('password');
		$this->full_name = $this->input->post('full_name');

		
		$this->db->update('tbl_admin', $this, array('id'=> 1));		
	}	
	
/*
* 
*	Function Language
* 
* @return
*/



}
