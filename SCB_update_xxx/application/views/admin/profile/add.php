<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Management
			<small>
				News
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
				Management News
			</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Main row -->
		<div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-warning" href="<?php echo  base_url('admin/news'); ?>" role="button"><i class="fa fa-hand-o-left"></i> Back</a>
                           
                        </div>
                    </div>
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">
							All News
						</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
<!-- form start -->					
<form role="form" action="<?php echo  base_url('admin/postdata_news'); ?>" method="post" enctype="multipart/form-data">
	

<div class="container col-lg-11" >
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#main">Main Body</a></li>
    <li style="display: none"><a data-toggle="tab" href="#lang">Language</a></li>
  </ul>

  <div class="tab-content">
    <div id="main" class="tab-pane fade in active">
       <div class="box-body">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Type</label> 
                        <select class="form-control" name="type" id="type">
                        <?
            $query = $this->db->get("tbl_news_type");
            if($query->num_rows() > 0)
			{
				foreach($query->result() as $row)
				{
				?>
				<option value="<?=$row->id;?>"><?=$row->title;?></option>
				<?
				}
			}

		 ?>
                        
 
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label> <?php echo $this->session->flashdata('error_title'); ?>
                        <input type="text" id="title" class="form-control" name="title" value="">
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label> 
                    <textarea id="description" name="description" rows="10" cols="80"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Content</label> 
                    <textarea id="content" name="content" rows="10" cols="80"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label> 
                        <input type="file" id="image" class="form-control" name="image"   >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Credit</label> 
                        <input type="text" id="credit" class="form-control" name="credit"   >
                    </div>
       </div>
    </div>
    <div id="lang" class="tab-pane fade">
      <h3>Language</h3>
<div class="form-group">
 
 
</div>
    </div>
  </div>
</div>
               <!-- /.box-body -->

                <div class="box-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                    <a class="btn btn-danger" href="<?php echo  base_url('admin/news'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
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
 <!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('description');
    CKEDITOR.replace('content');

  });
</script>

 