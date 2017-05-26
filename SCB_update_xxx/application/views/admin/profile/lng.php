<form role="form" action="<?php echo  base_url('manage/postdata_js_lang/'.$topic_id.'/'.$table); ?>" method="post" id="form_js_lng">
<input type="hidden" name="table_name" id="table_name" value="<?=$table;?>"/>	
<input type="hidden" name="topic_id" id="topic_id" value="<?=$topic_id;?>"/>	
<?
if(!empty($results)){
	$check_id = 1;
}else{
	$check_id = 0;
}
$query = $this->db->where('status',1)->order_by('topic_en asc')->get("tbl_lng"); 

	if($query->num_rows() > 0){
		foreach($query->result() as $row){
			if($check_id == 1){
				$query_lng = $this->db->where($table,$topic_id)->where($table.'_lng',$row->id)->get("tbl_lng_".$table);
			}else{
				$query_lng = $this->db->where($table,0)->where($table.'_lng',$row->id)->get("tbl_lng_".$table);
			}
			if($query_lng->num_rows() > 0){
foreach($query_lng->result() as $row_lng)
{			
?>
<label for="exampleInputEmail1">Topic <? echo $row->topic_en;?></label>  
<input type="text" id="topic_<? echo $row->id;?>" class="form-control" name="topic_<? echo $row->id;?>" value="<? echo $row_lng->topic;?>" />
<?	
}
			}else{
if($row->id == '3'){
	$query_tp = $this->db->where('id',$topic_id)->get("tbl_".$table);
	if($query_tp->num_rows() > 0){
		foreach($query_tp->result() as $row_tp){
		}
		$toppic_en = $row_tp->topic_en;
	}else{
		$toppic_en = '';
	}
}else{
	$toppic_en = '';
}				
?>
<label for="exampleInputEmail1">Topic <? echo $row->topic_en;?></label>  
<input type="text" id="topic_<? echo $row->id;?>" class="form-control" name="topic_<? echo $row->id;?>" value="<?=$toppic_en;?>" />
<?	
			}			
		}
	}
?>
</form>
