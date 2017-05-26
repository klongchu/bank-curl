<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Management
			<small>
				<?=$title[$table];?>
			</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard">
					</i>Home
				</a>
			</li>
			<li class="active">
				Management <?=$title[$table];?>
			</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Main row -->
		<div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-warning" href="<?php echo  base_url('manage/index/'.$table); ?>" role="button"><i class="fa fa-hand-o-left"></i> Back</a>
                           
                        </div>
                    </div>
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">
							All <?=$title[$table];?>
						</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
<!-- form start -->					
<form role="form" action="<?php echo  base_url('manage/postdata/'.$table); ?>" method="post">
<input type="hidden" name="id" value="<?php echo $result->id?>">			

<div class="container col-lg-11">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#main">Main Body</a></li>
    <li><a data-toggle="tab" href="#lang">Language</a></li>
  </ul>

  <div class="tab-content">
    <div id="main" class="tab-pane fade in active">
      <h3>Main Body</h3>
       <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Topic English</label> <?php echo $this->session->flashdata('error_name_en'); ?>
                        <input type="text" id="topic_en" class="form-control" name="topic_en" value="<?=$result->topic_en;?>">
                    </div> 
       </div>
    </div>
    <div id="lang" class="tab-pane fade">
      <h3>Language</h3>
<div class="form-group">
 
<?
$query = $this->db->where('status',1)->order_by('topic_en asc')->get("tbl_lng");
	if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$query_lng = $this->db->where($table,$result->id)->where($table.'_lng',$row->id)->get("tbl_lng_".$table."");
				if($query_lng->num_rows() > 0)
				{
					foreach($query_lng->result() as $row_lng)
					{
?>	
<label for="exampleInputEmail1">Topic <? echo $row->topic_en;?> </label>  
<input type="text" id="topic_<? echo $row->id;?>" class="form-control" name="topic_<? echo $row->id;?>" value="<?php echo  $row_lng->topic; ?>">          
<?
					}
				}else{
if($row->id == '3'){

		$toppic_en = $result->topic_en;

}else{
	$toppic_en = '';
}						
?>
<label for="exampleInputEmail1">Topic <? echo $row->topic_en;?></label>  
<input type="text" id="topic_<? echo $row->id;?>" class="form-control" name="topic_<? echo $row->id;?>" value="<?=$toppic_en;?>"> 
<?		
				}
			}
		}
?>
</div>
    </div>
  </div>
</div>
               <!-- /.box-body -->

                <div class="box-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                    <a class="btn btn-danger" href="<?php echo  base_url('manage/index/'.$table); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                </div>
</form>  
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.nav-tabs-custom -->
			</section>
			<!-- /.Left col -->
		</div>
		<!-- /.row (main row) -->
	</section>
	<!-- /.content -->
</div>

 