                <div class="class_br_10px" ></div>						
<div class="inner-box category-content" style="background-color: #e2dce2; border-radius:5px; padding:5px 5px 5px 5px; ">
<div class="class_br_10px" ></div>				
<form role="form" action="<?php echo  base_url('admin/postdata_webconfig'); ?>" method="post" enctype="multipart/form-data">					
					<div class="box-body">
<div class="row">					
<?
if(!empty($results)){
foreach($results as $data){
?>
	<div class="col-lg-12 page-content">
	<ul class="nav nav-pills" id="myTab" style="margin-bottom:10px">
		<li class="active"><a href="#top-visit-web" data-toggle="tab">Webconfig</a></li>
		<!--
		<li><a href="#top-visit-topup" data-toggle="tab">Topup</a></li>
		<li><a href="#top-visit-title" data-toggle="tab">Title</a></li>
		-->
	</ul>
	<div class="tab-content">
		<!-- Visit Panel Web -->
		<div class="tab-pane fade in  active" id="top-visit-web">
		<button class="btn btn-success btn-fill" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
			<div class="row">
			
<div class="col-lg-6" >

						<div class="box box-info " style="display: none;">
							<div class="box-body">
								<!-- Username thaibulksms -->
								<div class="form-group">
									<label>Username thaibulksms :</label>
										<input type="text" class="form-control" name="sms_username" id="sms_username" value="<?=$data->sms_username;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Password thaibulksms -->
								<div class="form-group">
									<label>Password thaibulksms :</label>
										<input type="text" class="form-control" name="sms_password" id="sms_password" value="<?=$data->sms_password;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- type thaibulksms -->
								<div class="form-group">
									<label>Type thaibulksms :</label>
									<select class="form-control" name="sms_type">
										<option value="standard" <?php if($data->sms_type == 'standard'){ echo "selected='selected'";} ?>>Standard</option>
										<option value="premium" <?php if($data->sms_type == 'premium'){ echo "selected='selected'";} ?>>Premium</option>
									</select>
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Send Name -->
								<div class="form-group">
									<label>Send Name :</label>
										<input type="text" class="form-control" name="sms_title" id="sms_title" value="<?=$data->sms_title;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
							</div>
							<!-- /.box-body -->
						</div>					

						<div class="box box-info ">
							<div class="box-body">
								<!-- Date Web Title -->
								<div class="form-group">
									<label>Web Title :</label>
										<input type="text" class="form-control" name="title" id="title" value="<?=$data->title;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Date Keyword for Google -->
								<div class="form-group">
									<label>Keyword for Google:</label>
										<input type="text" class="form-control" name="keyword" id="keyword" value="<?=$data->keyword;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Date Description  for Google -->
								<div class="form-group">
									<label>Description  for Google :</label>
										<input type="text" class="form-control" name="description" id="description" value="<?=$data->description;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Date Developed By -->
								<div class="form-group">
									<label>Developed By :</label>
										<input type="text" class="form-control" name="dev_by" id="dev_by" value="<?=$data->dev_by;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Web Phone -->
								<div class="form-group">
									<label>Phone :</label>
										<input type="text" class="form-control" name="phone" id="phone" value="<?=$data->phone;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Web E-mail -->
								<div class="form-group">
									<label>E-mail :</label>
										<input type="text" class="form-control" name="email" id="email" value="<?=$data->email;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Web Facebook -->
								<div class="form-group">
									<label>Facebook :</label>
										<input type="text" class="form-control" name="facebook" id="facebook" value="<?=$data->facebook;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Web Google -->
								<div class="form-group">
									<label>Google :</label>
										<input type="text" class="form-control" name="google" id="google" value="<?=$data->google;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Web Twitter -->
								<div class="form-group">
									<label>Twitter :</label>
										<input type="text" class="form-control" name="twitter" id="twitter" value="<?=$data->twitter;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Stats -->
								<div class="form-group" >
									<label>Stats :</label>
										<textarea class="form-control" name="webstats" id="webstats" style="height: 130px;" ><?=$data->webstats;?></textarea>
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
							</div>
							<!-- /.box-body -->
						</div>					
</div>			
<div class="col-lg-6">
						<div class="box box-info ">
							<div class="box-body">
								<!-- Web logo -->
								<div class="form-group">
									<img src="<? echo base_url(); ?>uploads/admin/<?=$data->fav;?>" width="25"/>
									<label>Web Favicon เป็นไฟล์นามสกุล ico เท่านั้น :</label>
									<input type="file" class="form-control" name="fav" id="fav"  >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Web logo -->
								<div class="form-group">
									<img src="<? echo base_url(); ?>uploads/admin/<?=$data->logo;?>" width="70"/><label>Web logo Size 120 x 30 :</label>
										<input type="file" class="form-control" name="logo" id="logo"  >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- About Us -->
								<div class="form-group">
									<label>About Us :</label>
										<textarea class="form-control" name="about" id="about" ><?=$data->about;?></textarea>
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Contact Us -->
								<div class="form-group">
									<label>Contact Us :</label>
									<textarea class="form-control" name="contact" id="contact" ><?=$data->contact;?></textarea>
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
							</div>
							<!-- /.box-body -->
						</div>					
</div>	
			</div>
		</div>
		<!-- Visit Panel Topup -->
		<div class="tab-pane fade in  " id="top-visit-topup">
			<div class="row">
<div class="col-lg-6">
						<div class="box box-info ">
							<div class="box-body">
								<!-- Topup 50 -->
								<div class="form-group">
									<label>Topup 50</label>
										<input type="number" class="form-control" name="topup_50" id="topup_50" value="<?=$data->topup_50;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Topup 90 -->
								<div class="form-group">
									<label>Topup 90</label>
										<input type="number" class="form-control" name="topup_90" id="topup_90" value="<?=$data->topup_90;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Topup 50 -->
								<div class="form-group">
									<label>Topup 150</label>
										<input type="number" class="form-control" name="topup_150" id="topup_150" value="<?=$data->topup_150;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- amount_per_day -->
								<div class="form-group">
									<label>เติม VIP ต่อวัน</label>
										<input type="number" class="form-control" name="amount_per_day" id="amount_per_day" value="<?=$data->amount_per_day;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
							</div>
							<!-- /.box-body -->
						</div>							
</div>
<div class="col-lg-6">
						<div class="box box-info ">
							<div class="box-body">
								<!-- Topup 300 -->
								<div class="form-group">
									<label>Topup 300</label>
										<input type="number" class="form-control" name="topup_300" id="topup_300" value="<?=$data->topup_300;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Topup 500 -->
								<div class="form-group">
									<label>Topup 500</label>
										<input type="number" class="form-control" name="topup_500" id="topup_500" value="<?=$data->topup_500;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Topup 1000 -->
								<div class="form-group">
									<label>Topup 1000</label>
										<input type="number" class="form-control" name="topup_1000" id="topup_1000" value="<?=$data->topup_1000;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
							</div>
							<!-- /.box-body -->
						</div>	
</div>
			</div>
		</div>
		<!-- Visit Panel title -->
		<div class="tab-pane fade in  " id="top-visit-title">
			<div class="row">
<div class="col-lg-6">
						<div class="box box-info ">
							<div class="box-body">
								<!-- Title Bar -->
								<div class="form-group">
									<label>Title Bar :</label>
										<input type="text" class="form-control" name="title_bar" id="title_bar" value="<?=$data->title_bar;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Title Post -->
								<div class="form-group">
									<label>Title Type :</label>
										<input type="text" class="form-control" name="title_type" id="title_type" value="<?=$data->title_type;?>" >
									<!-- /.input group -->
								</div>
								<!-- Title Post -->
								<div class="form-group">
									<label>Title VIP :</label>
										<input type="text" class="form-control" name="title_vip" id="title_vip" value="<?=$data->title_vip;?>" >
									<!-- /.input group -->
								</div>
								<!-- Title Post -->
								<div class="form-group">
									<label>Title Top :</label>
										<input type="text" class="form-control" name="title_top" id="title_top" value="<?=$data->title_top;?>" >
									<!-- /.input group -->
								</div>
								<!-- Title Member -->
								<div class="form-group">
									<label>Title Member :</label>
										<input type="text" class="form-control" name="title_member" id="title_member" value="<?=$data->title_member;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Title Add Line -->
								<div class="form-group">
									<label>Title Add Line :</label>
										<input type="text" class="form-control" name="title_add" id="title_add" value="<?=$data->title_add;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
							</div>
							<!-- /.box-body -->
						</div>					
</div>
<div class="col-lg-6">
						<div class="box box-info ">
							<div class="box-body">
								<!-- Title Post -->
								<div class="form-group">
									<label>Title Post :</label>
										<textarea class="form-control" name="title_post" id="title_post" ><?=$data->title_post;?></textarea>
									<!-- /.input group -->
								</div>
								<!-- Title Post -->
								<div class="form-group">
									<label>Title Search :</label>
										<input type="text" class="form-control" name="title_search" id="title_search" value="<?=$data->title_search;?>" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Title Post -->
								<div class="form-group">
									<label>Title Description :</label>
									<textarea class="form-control" name="title_descript" id="title_descript" ><?=$data->title_descript;?></textarea>
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- VIP Rule -->
								<div class="form-group">
									<label>VIP Rule :</label>
										<textarea class="form-control" name="vip_rule" id="vip_rule" ><?=$data->vip_rule;?></textarea>
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
							</div>
							<!-- /.box-body -->
						</div>					
</div>
			</div>
		</div>
	</div>	
	</div>
<? } } ?>
</div>
<button class="btn btn-success btn-fill" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>	
</form> 					
</div>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js">
</script>
<script src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap.min.js">
</script>
<script>
	$(function ()
		{
			$("#example").DataTable({
					"paging": false,
					"lengthChange": false,
					"searching": true,
					"ordering": true,
					"info": false,
					"autoWidth": false
				});
		});	
</script>
 <!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('about');
    CKEDITOR.replace('contact');
  });
</script>