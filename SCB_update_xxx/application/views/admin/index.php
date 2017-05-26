<?php
$bank_rows = $this->db->get('tbl_bank')->num_rows();
if($bank_rows < 1){
?>
<div class="alert alert-danger">
<button type="button" aria-hidden="true" class="close">×</button>
<span><b> ยังไม่มีข้อมูลบัญชีธนาคาร - </b> กรุณาเพิ่มข้อมูลบัญชีธนาคารด้วยค่ะ <a href="<?=base_url('admin/bank');?>" class="small-box-footer">คลิกเพื่อเพิ่มธนาคาร</a></span>
</div>
<?php	
}else{

$bank = $this->db->get('tbl_bank')->result();
foreach($bank as $data){
?>		
			<div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?=number_format($data->balance,2);?></h3>
              <p>Bank No. <?=$data->bank_number;?></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?=base_url('admin/bank');?>" class="small-box-footer"><?=$data->bank_name;?> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<?php 
	} 
}
?>
	
 
	