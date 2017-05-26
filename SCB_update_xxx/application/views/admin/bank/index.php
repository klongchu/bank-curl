     
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body">
					<button class="btn btn-success btn-fill btn_edit_update" data-toggle="modal" data-target="#myModal_page" data_id="0" data_title="Add New Bank">Add New Bank</button>
					<button class="btn btn-warning btn-fill btn_bank_load" >Update Balance</button>
					<br />
					<br />
						<form id="form_data_load_all" method="post">
						<table id="examplea" class="table table-bordered table-striped">
							<thead>
								<tr>

									<th width="150">
										Bank Number
									</th>
									<th >
										Bank Account
									</th>
									<th width="150">
										Bank Username
									</th>
									<th width="100">
										Balance
									</th>
									<th width="160">
										Update
									</th>
									<th width="150">
										Action
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(!empty($results)){
									foreach($results as $data){
										?>
										
										<tr>
											<td>
											<?php echo $data->bank_number; ?>
											<input type="hidden" name="bank_u[]" value="<?php echo $data->bank_username; ?>"/>	
											<input type="hidden" name="bank_p[]" value="<?php echo $data->bank_password; ?>"/>	
											<input type="hidden" name="bank_id[]" value="<?php echo $data->id; ?>"/>	
											
											</td>
											<td><?php echo $data->bank_name; ?></td>
											<td><?php echo $data->bank_username; ?></td>
											<td align="right"><?php echo number_format($data->balance,2); ?></td>									
											<td><?php echo $data->update_date; ?></td>
											<td>
												<button type="button" class="btn btn-info btn-fill btn_edit_update btn-sm" data-toggle="modal" data-target="#myModal_page" data_id="<?=$data->id;?>" data_title="Edit Bank : <?=$data->bank_name;?>">Edit</button>
												<button type="button" class="btn btn-danger btn-fill btn_delete btn-sm"  data_id="<?=$data->id;?>" >Del</button>
											</td>
										</tr>
										<?
									$total_amount += $data->balance;
									}
								} ?>
							</tbody>
							<tr>
								<td></td>
								<td></td>
								<td align="right"><strong>Total</strong> </td>
								<td  align="right"><?=number_format($total_amount,2)?></td>
								<td></td>
								<td></td>
								
							</tr>
						</table>
						<input type="hidden" name="bank_url" value="<?php echo base_url('admin/bank_load'); ?>"/>		
						</form>
					<div class="row">
                        <div class="col-sm-4">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Total <?php echo  $total_rows; ?> entries</div>
                        </div>
                        <div class="col-sm-8">
                            <div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
                                <?php echo $link; ?>
                            </div>

                        </div>
                    </div>
					</div>
					
					<!-- /.box-body -->
				</div>
				<!-- /.nav-tabs-custom -->
			</section>
			<!-- /.Left col -->
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


<link href="<?php echo base_url('');?>plugins/datepicker/datepicker3.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="<?php echo base_url('');?>date/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url('');?>plugins/datepicker/bootstrap-datepicker.js" charset="UTF-8"></script>

<script type="text/javascript">
//*
 
var checkin = $('#keyword').datepicker({
  minDate: '-1Y',
    maxDate: '-1Y', 
    yearRange: '-1',
  format: 'yyyy-mm-dd'
}).on('changeDate', function(ev) {
 //alert('<? echo date('Y-m-d'); ?>');
  checkin.hide();
 // $('#dpd2')[0].focus();
}).data('datepicker');


var checkin = $('#keyword_2').datepicker({
  minDate: '-1Y',
    maxDate: '-1Y', 
    yearRange: '-1',
  format: 'yyyy-mm-dd'
}).on('changeDate', function(ev) {
 //alert('<? echo date('Y-m-d'); ?>');
  checkin.hide();
 // $('#dpd2')[0].focus();
}).data('datepicker');

//*/
/*
    $('#create_line').datetimepicker({
//format: 'yyyy-mm-dd'
.on(picker_event, function(e) {
	alert('aa');
    });
 //*/   

    
</script>
<!-- Start Update Manage -->
<!-- Modal Manage -->
<div class="modal fade" id="myModal_page" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_page">
  <div class="modal-dialog" role="document">
<form role="form" action="" id="form_manage" method="POST" class="form-horizontal">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel_page">Modal title</h4>
      </div>
      <div class="modal-body">
        <p id="body_modal_page"></p>
      </div>
      <div class="modal-footer">
       <button class="btn btn-primary btn_save_page  btn-fill" type="button"   data-dismiss="modal"><i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
        <button type="button" class="btn btn-danger  btn-fill close_modal_time" data-dismiss="modal"><i class="fa fa-fw fa-close"></i> Close</button>

      </div>
    </div>
    </form> 
  </div>
</div>	
<script>
/////////////////////// Load balance
	$(".btn_bank_load").click(function(){
		swal("กรุณารอสักครู่ข้อมูลกำลังอัพเดต");
		//*
		var url_load = "<?php echo base_url('bankload/login.php'); ?>";
 		var datastring = $("#form_data_load_all").serialize();
 		//alert(datastring);
 		//*
 		$.post(url_load,  datastring , function(theResponse){
			swal("อัตเดตข้อมูลสำเร็จ");
			location.reload();
 		});
 		//*/
  	});
/////////////////////// Del
$(".btn_delete").click(function(){
	var data_id = $(this).attr("data_id");
demo.showSwal('warning-message-and-confirmation',data_id);

});
function del_test(data_id){
	
	var url_update = "<?php echo base_url('admin/remove/bank/"+data_id+"'); ?>";
 	$.post(url_update, {  }, function(theResponse){
 		swal("ลบข้อมูลสำเร็จ");
 		location.reload();
 	});
}
/////////////////////// Manage
	$(".btn_edit_update").click(function(){
		var data_id = $(this).attr("data_id");
		var data_title = $(this).attr("data_title");
		//var data_title = "sssss";
		$('#myModalLabel_page').html(data_title);
		//*
		var url_update = "<?php echo base_url('admin/bank_add/"+data_id+"'); ?>";
 		$.post(url_update, {  }, function(theResponse){
 			$('#body_modal_page').html(theResponse);	
 		});
 		//*/
  	});
  	
  	$(".btn_save_page").click(function(){
  		if($('#bank_username').val() == ''){
			swal("กรุณากรอก Username ด้วยค่ะ");
			$('#bank_username').focus();
			return false;
		}
		if($('#bank_password').val() == ''){
			swal("กรุณากรอก Password ด้วยค่ะ");
			$('#bank_password').focus();
			return false;
		}
		if($('#bank_name').val() == ''){
			swal("กรุณากรอก ชื่อบัญชี ด้วยค่ะ");
			$('#bank_name').focus();
			return false;
		}
		if($('#bank_number').val() == ''){
			swal("กรุณากรอก เลขบัญชี ด้วยค่ะ");
			$('#bank_number').focus();
			return false;
		}
		var url_update = "<?php echo base_url('admin/postdata_js_bank'); ?>";
 		var datastring = $("#form_manage").serialize();
		$.ajax({
		    type: "POST",
		    url: url_update,
		    data: datastring,
		    dataType: "json",
		    success: function(data) {
				swal("บันทึกข้อมูลสำเร็จค่ะ");
				$('#myModalLabel_page').html('');
				$('#body_modal_page').html('');
				location.reload();
		    },
		    error: function() {
		       alert('No');
		    }
		});
  	});
  	$(".close_modal_time").click(function(){
		//$('#myModalLabel_page').html('');
		//$('#body_modal_page').html('');
  	});
/////////////////////
</script>
<link href="<?php echo base_url('');?>plugins/sweetalert2/sweetalert2.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url('');?>plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" media="screen">
<script src="<?php echo base_url(); ?>plugins/sweetalert2/sweetalert2.js"></script>
<script src="<?php echo base_url(); ?>plugins/sweetalert2/sweetalert2.min.js"></script>