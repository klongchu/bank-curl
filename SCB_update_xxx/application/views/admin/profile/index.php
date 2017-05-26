        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-body">
                <div class="class_br_10px" ></div>						
<div class="class_br_10px" ></div>				
<form role="form" action="<?php echo  base_url('admin/postdata_profile'); ?>" method="post" enctype="multipart/form-data">					
					<div class="box-body">
<?
if(!empty($results)){
foreach($results as $data){
?>					
<div class="col-lg-6">
						<div class="box box-info ">
							<div class="box-body">
								<!-- Username -->
								<div class="form-group">
									<label>Username :</label>
										<input type="text" class="form-control" name="username" id="username" value="<?=$data->username;?>" readonly="readonly" >
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Password -->
								<div class="form-group">
									<label>Password :</label>
										<input type="password" class="form-control" name="password" id="password" value="<?=$data->password;?>">
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- Name -->
								<div class="form-group">
									<label>Name :</label>
										<input type="text" class="form-control" name="full_name" id="full_name" value="<?=$data->full_name;?>">
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
							</div>
							<!-- /.box-body -->
						</div>					
</div>					
<? } } ?>
					</div>
					 <div class="box-footer col-md-12">
                    <button class="btn btn-primary btn-fill" type="submit"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                </div>
</form> 					
            </div><!-- /.box-body -->
        </div>
 