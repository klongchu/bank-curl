<script>
$("#bank_username").keyup(function(){
  		var bank_username = $("#bank_username").val();
  		var url_update = "<?php echo base_url('admin/bank_check_username/"+bank_username+"'); ?>";
 		$.post(url_update, {  }, function(theResponse){
 			//alert(theResponse);
 			if(theResponse > 0){
 				$("#bank_username").removeClass('success');
 				$("#bank_username").addClass('error');
				$('.btn_save_page').hide();
			}else{
				$("#bank_username").removeClass('error');
 				$("#bank_username").addClass('success');
				$('.btn_save_page').show();
			}	
 		});
  	});
</script>
<?php
if($id != 0){
$this->db->where('id',$id);
$query = $this->db->get('tbl_bank')->row();
}
?>
<div class="container col-lg-11" >
  <div class="tab-content">
    <div id="main" class="tab-pane fade in active">
       <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Bank Username</label> 
                <input type="text" id="bank_username" name="bank_username" class="form-control"  required="required" value="<?=$query->bank_username;?>" <?php if($id != 0){ echo "readonly='readonly'";} ?> >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Bank Password</label> 
                <input type="password" id="bank_password" name="bank_password" class="form-control"  required="required"  value="<?=$query->bank_password;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Bank account name</label> 
                <input type="text" id="bank_name" name="bank_name" class="form-control"  required="required" value="<?=$query->bank_name;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Bank account number <font style="color: #ff0000;">* ตัวเลข 10 หลักเท่านั้น</font></label> 
                <input type="number" id="bank_number" name="bank_number" class="form-control"  required="required" value="<?=$query->bank_number;?>"  >
            </div> 
       </div>
    </div>
  </div>
</div>
<input type="hidden" name="id" id="id" value="<?=$id;?>"/>
<input type="hidden" name="balance" id="balance" value="<?=$query->balance;?>"/>
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

 