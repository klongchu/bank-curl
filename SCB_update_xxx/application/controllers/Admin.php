<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('Admin_model');

	}

/*
* 
*	Function Main use multi pages
* 
* @return
*/

	
	public function index()	{

		$this->load->view('template/backheader');
		$this->load->view('admin/index');
		$this->load->view('template/backfooter');
	}
	public function login()	{

		$this->load->view('template/backheader');
		$this->load->view('admin/index');
		$this->load->view('template/backfooter');
	}
	public function logout()	{

		$this->load->view('template/backheader');
		$this->load->view('admin/index');
		$this->load->view('template/backfooter');
	}
/* ====================================		
***************** *********************
***************** Admin Bank *********************
***************** *********************
=======================================*/
	public function bank(){
		$config = array();
		$config['base_url'] = base_url('admin/bank');
		$config['total_rows'] = $this->db->get("tbl_bank")->num_rows();
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->Admin_model->fetch_data_history($config['per_page'], $page,'tbl_bank');
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		
		$this->load->view('template/backheader');
		$this->load->view('admin/bank/index',$data);
		$this->load->view('template/backfooter');
	}
	public function bank_add($id)	{
		//$this->load->view('template/backheader');
		$data['id'] = $id;
		$this->load->view('admin/bank/add',$data);
		//$this->load->view('template/backfooter');
	}
	public function bank_load()	{
$method = $_SERVER['REQUEST_METHOD'];
    if($method != 'POST') {
      $data['id'] = 222;
	  $this->load->view('admin/bank/load',$data);
    }
    else {

		$this->balance = $this->input->post('total');
		$this->bank_id = $this->input->post('bank_id');
		$this->post_date = date('Y-m-d H:i:s');
		$this->ip = $_SERVER['REMOTE_ADDR'];
		$this->db->insert('tbl_history', $this);
		
		$data_up['balance'] = $this->input->post('total');
		$data_up['update_date'] = date('Y-m-d H:i:s');
		$this->db->update('tbl_bank', $data_up, array('id'=> $this->input->post('bank_id')));
		$data['id'] = 111;
		$this->load->view('admin/bank/load',$data);
		//$this->load->view('template/backfooter');
	}
	}
	public function bank_check_username($username){
			$aaa = $this->Admin_model->record_count_bank($username);
			$data['result'] = $aaa;
			$this->load->view('admin/bank/count_lng',$data);
	}
	public function postdata_js_bank(){
		if($this->input->server('REQUEST_METHOD') == TRUE){
			$this->Admin_model->entry_data_bank($this->input->post('id'));
			$data['result'] = 1;
			$this->load->view('admin/bank/count_lng',$data);
		}
	}	
	
/* ====================================		
***************** *********************
***************** Admin history *********************
***************** *********************
=======================================*/
public function history(){
		$config = array();
		$config['base_url'] = base_url('admin/history');
		$config['total_rows'] = $this->db->get("tbl_history")->num_rows();
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->Admin_model->fetch_data_history($config['per_page'], $page,'tbl_history');
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		
		$this->load->view('template/backheader');
		$this->load->view('admin/history/index',$data);
		$this->load->view('template/backfooter');
	}
public function history_find($keyword,$keyword_2){
		if($keyword == NULL){
			$keyword = $this->input->post('keyword');
		}else{
			$keyword = $keyword;
		}
		if($keyword_2 == NULL){
			$keyword_2 = $this->input->post('keyword_2');
		}else{
			$keyword_2 = $keyword_2;
		}
		$config = array();
		$config['base_url'] = base_url('admin/history_find/'.$keyword.'/'.$keyword_2);
		$config['total_rows'] = $this->db->where("post_date BETWEEN '".$keyword." 00:00:01' AND '".$keyword_2." 23:59:59' ")->get("tbl_history")->num_rows();
		$config['per_page'] = 20;
		$config['uri_segment'] = 4;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['results'] = $this->Admin_model->fetch_data_history($config['per_page'], $page,'tbl_history',$keyword,$keyword_2);
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$data['keyword'] = $keyword;
		$this->load->view('template/backheader');
		$this->load->view('admin/history/index',$data);
		$this->load->view('template/backfooter');
	}
/* ====================================		
***************** *********************
***************** Admin Topup *********************
***************** *********************
=======================================*/
public function postdata_topup(){
	
$this->db->where('id',$this->input->post('amount_id'));
$query = $this->db->get('tbl_member');
$data_mem = $query->row();

$total_coin = $data_mem->amount + $this->input->post('amount_topup');
$data_me['amount'] = 	$total_coin;
$this->db->update('tbl_member', $data_me, array('id'=> $this->input->post('amount_id')));
	
	$data['member'] = $this->input->post('amount_id');
	$data['topup_type'] = 'Admin';
	$data['amount'] = 0;
	$data['coin'] = $this->input->post('amount_topup');
	$data['post_date'] = date('Y-m-d H:i:s');
	$data['ip'] = $_SERVER['REMOTE_ADDR'];

	$this->db->insert('tbl_his_topup', $data);	

	return $id;	
}
/* ====================================
***************** *********************
***************** History Topup *********************
***************** *********************
=======================================*/	
 	public function his_topup(){
		$config = array();
		$config['base_url'] = base_url('admin/his_topup');
		$config['total_rows'] = $this->db->get("tbl_his_topup")->num_rows();
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->Admin_model->fetch_data_his_topup($config['per_page'], $page,'tbl_his_topup');
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		
		$this->load->view('template/backheader');
		$this->load->view('admin/his_topup/index',$data);
		$this->load->view('template/backfooter');
	}
	public function his_topup_find($keyword,$keyword_2){
		if($keyword == NULL){
			$keyword = $this->input->post('keyword');
		}else{
			$keyword = $keyword;
		}
		if($keyword_2 == NULL){
			$keyword_2 = $this->input->post('keyword_2');
		}else{
			$keyword_2 = $keyword_2;
		}
		$config = array();
		$config['base_url'] = base_url('admin/his_topup_find/'.$keyword.'/'.$keyword_2);
		$config['total_rows'] = $this->db->where("post_date BETWEEN '".$keyword." 00:00:01' AND '".$keyword_2." 23:59:59' ")->get("tbl_his_topup")->num_rows();
		$config['per_page'] = 20;
		$config['uri_segment'] = 5;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		$data['results'] = $this->Admin_model->fetch_data_his_topup($config['per_page'], $page,'tbl_his_topup',$keyword,$keyword_2);
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$data['keyword'] = $keyword;
		$data['keyword_2'] = $keyword_2;
		$this->load->view('template/backheader');
		$this->load->view('admin/his_topup/index',$data);
		$this->load->view('template/backfooter');
	}	
/* ====================================
***************** *********************
***************** History VIP *********************
***************** *********************
=======================================*/	
 	public function his_vip(){
		$config = array();
		$config['base_url'] = base_url('admin/his_vip');
		$config['total_rows'] = $this->db->get("tbl_his_vip")->num_rows();
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->Admin_model->fetch_data_his_topup($config['per_page'], $page,'tbl_his_vip');
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		
		$this->load->view('template/backheader');
		$this->load->view('admin/his_vip/index',$data);
		$this->load->view('template/backfooter');
	}
	public function his_vip_find($keyword){
		if($keyword == NULL){
			$keyword = $this->input->post('keyword');
		}else{
			$keyword = $keyword;
		}
		$config = array();
		$config['base_url'] = base_url('admin/his_vip_find/'.$keyword);
		$config['total_rows'] = $this->db->like('post_date ',$keyword)->get("tbl_his_vip")->num_rows();
		$config['per_page'] = 20;
		$config['uri_segment'] = 4;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['results'] = $this->Admin_model->fetch_data_his_topup($config['per_page'], $page,'tbl_his_vip',$keyword);
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$data['keyword'] = $keyword;
		$this->load->view('template/backheader');
		$this->load->view('admin/his_vip/index',$data);
		$this->load->view('template/backfooter');
	}
/* ====================================
***************** *********************
***************** History Edit *********************
***************** *********************
=======================================*/	
 	public function his_edit(){
		$config = array();
		$config['base_url'] = base_url('admin/his_edit');
		$config['total_rows'] = $this->db->get("tbl_his_post")->num_rows();
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->Admin_model->fetch_data_his_post($config['per_page'], $page,'tbl_his_post');
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		
		$this->load->view('template/backheader');
		$this->load->view('admin/his_edit/index',$data);
		$this->load->view('template/backfooter');
	}
	public function his_edit_find($keyword){
		if($keyword == NULL){
			$keyword = $this->input->post('keyword');
		}else{
			$keyword = $keyword;
		}
		$config = array();
		$config['base_url'] = base_url('admin/his_edit_find/'.$keyword);
		$config['total_rows'] = $this->db->like('post_date ',$keyword)->get("tbl_his_post")->num_rows();
		$config['per_page'] = 20;
		$config['uri_segment'] = 4;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['results'] = $this->Admin_model->fetch_data_his_post($config['per_page'], $page,'tbl_his_post',$keyword);
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$data['keyword'] = $keyword;
		$this->load->view('template/backheader');
		$this->load->view('admin/his_edit/index',$data);
		$this->load->view('template/backfooter');
	}
/* ====================================
***************** *********************
***************** Member *********************
***************** *********************
=======================================*/	
	public function member()	{
		$config = array();
		$config['base_url'] = base_url('admin/member');
		$config['total_rows'] = $this->Admin_model->record_count('tbl_member');
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->Admin_model->fetch_data_member($config['per_page'], $page,'tbl_member');
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$this->load->view('template/backheader');
		$this->load->view('admin/member/index',$data);
		$this->load->view('template/backfooter');
	}
	public function member_find($keyword)	{
		if($keyword == NULL){
			$keyword = $this->input->post('keyword');
		}else{
			$keyword = $keyword;
		}
		$config = array();
		$config['base_url'] = base_url('admin/member_find');
		$config['total_rows'] = $this->Admin_model->record_count('tbl_member');
		$config['per_page'] = 20;
		$config['uri_segment'] = 4;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = 6;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['results'] = $this->Admin_model->fetch_data_member($config['per_page'], $page,'tbl_member',$keyword);
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$this->load->view('template/backheader');
		$this->load->view('admin/member/index',$data);
		$this->load->view('template/backfooter');
	}
	public function member_his($keyword){

		$data['results'] = $this->Admin_model->fetch_data_member_his('tbl_his_topup',$keyword);

		$this->load->view('admin/member/his',$data);
	}
/* ====================================
***************** *********************
***************** Update *********************
***************** *********************
=======================================*/
public function update_status($id,$table,$status){
		$this->status = $status;
		$this->db->update($table, $this, array('id'=> $id));
}
public function update_lock($id,$table,$status){
		$this->lock = $status;
		$this->db->update($table, $this, array('id'=> $id));
}
/* ====================================
***************** *********************
***************** confrm *********************
***************** *********************
=======================================*/
public function confrm($table,$id){
		$data = array
		(
			'backlink'  => 'admin/'.$table.'',
			'deletelink'=> 'admin/remove/'.$table.'/' . $id
		);
		$this->load->view('template/backheader');
		$this->load->view('confrm',$data);
		$this->load->view('template/backfooter');
	}
	public function remove($table,$id){
		$this->Admin_model->remove_data($table,$id);
		redirect('admin/'.$table.'','refresh');
	}
/* ====================================
***************** *********************
***************** Config *********************
***************** *********************
=======================================*/
public function webconfig()	{
	$data['results'] = $this->Admin_model->fetch_data_web();
	$this->load->view('template/backheader');
	$this->load->view('admin/webconfig/index',$data);
	$this->load->view('template/backfooter');
}
public function postdata_webconfig(){
	if($this->input->server('REQUEST_METHOD') == TRUE){			
		$this->Admin_model->entry_data_webconfig();
		redirect('admin/webconfig', 'refresh');

		}
	}		
/* ====================================
***************** *********************
***************** Profile *********************
***************** *********************
=======================================*/
public function profile()	{
	$data['results'] = $this->Admin_model->fetch_data_profile();
	$this->load->view('template/backheader');
	$this->load->view('admin/profile/index',$data);
	$this->load->view('template/backfooter');
}
public function postdata_profile(){
	if($this->input->server('REQUEST_METHOD') == TRUE){			
		$this->Admin_model->entry_data_profile();
		redirect('admin/profile', 'refresh');

		}
	}		
/*
* 
*	Function End
* 
* @return
*/		
}	
