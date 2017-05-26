

        <div class="row"   style="padding-top: 10px; padding-bottom: 10px;" >
	        <div class="col-sm-12">
	        	<!-- Search Key-->
<form action="<?php echo  base_url('admin/history_find'); ?>" method="post" role="form">
      <div class="form-group col-xs-12 col-lg-4">
<div class="input-group">      
<span class="input-group-addon"><span class="addnew-label">วันที่ </span></span>
<input type="text" name="keyword" id="keyword" class="form-control" value="<? if($keyword != NULL){ echo $keyword ;}else{ echo date('Y-m-d');}?>" readonly="readonly" style="border: 1px solid #c0bec0;" />
      </div>
      </div>
      <div class="form-group col-xs-12 col-lg-4">
<div class="input-group">      
<span class="input-group-addon"><span class="addnew-label">ถึงวันที่ </span></span>
<input type="text" name="keyword_2" id="keyword_2" class="form-control" value="<? if($keyword_2 != NULL){ echo $keyword_2 ;}else{ echo date('Y-m-d');}?>" readonly="readonly" style="border: 1px solid #c0bec0;" />
      </div>
      </div>
      <div class="form-group col-xs-12 col-lg-2 text-center">
         <button type="submit" class="btn btn-warning btn-fill">
         <span class="glyphicon glyphicon-search"></span> ค้นหา
         </button>
      </div>
   </form>           
	       		             
	        </div>
        </div>        
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<table id="examplea" class="table table-bordered table-striped">
							<thead>
								<tr>

									<th width="200">
										Bank Number
									</th>
									<th >
										Bank Account
									</th>
									<th width="100">
										Balance
									</th>
									<th width="200">
										วันที่
									</th>
									<th width="200" >
										IP
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(!empty($results)){
									foreach($results as $data){
$this->db->where('id',$data->bank_id);
$bank = $this->db->get('tbl_bank')->row();										
										?>
										<tr>

											
											<td>

<?php echo $bank->bank_number; ?>
										
											</td>
											<td>

<?php echo $bank->bank_name; ?>
								
											</td>
											<td><?php echo $bank->balance; ?></td>											
											<td>
<?php echo $data->post_date; ?>
											</td>
											<td>
<?php echo $data->ip; ?>
											</td>
										</tr>
										<?php
									}
								} ?>
							</tbody>
						</table>	
					
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


var checkout = $('#keyword_2').datepicker({
  minDate: '-1Y',
    maxDate: '-1Y', 
    yearRange: '-1',
  format: 'yyyy-mm-dd'
}).on('changeDate', function(ev) {
 //alert('<? echo date('Y-m-d'); ?>');
  checkout.hide();
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