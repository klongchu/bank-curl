<div class="row">
			<ol class="breadcrumb">
				<li><a href="<? echo base_url('admin'); ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Management Type</li> <small>Add</small>
			</ol>
</div><!--/.row-->
<br />
<div class="alert bg-primary" >
	<!-- Content Header (Page header) -->
<br />

	<!-- Main content -->
	<section class="content">
		<!-- Main row -->
		<div class="row">
                        <div class="col-sm-6">
                            <a class="btn btn-warning" href="<?php echo  base_url('admin/news_type'); ?>" role="button"><i class="fa fa-hand-o-left"></i> Back</a>
                           
                        </div>
                    </div>
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body">
<!-- form start -->					
<form role="form" action="<?php echo  base_url('admin/postdata_type'); ?>" method="post" enctype="multipart/form-data">
	

<div class="container col-lg-11" >

  <div class="tab-content">
    <div id="main" class="tab-pane fade in active">
       <div class="box-body">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label> <?php echo $this->session->flashdata('error_title'); ?>
                        <input type="text" id="title" class="form-control" name="title" value="">
                    </div> 

       </div>
    </div>
 
  </div>
</div>
               <!-- /.box-body -->

                <div class="box-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                    <a class="btn btn-danger" href="<?php echo  base_url('admin/type'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
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

 