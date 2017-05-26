        
            	</div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
                </div>
            </div>
        </div>        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2015-<?=date('Y');?> <a href="<? echo base_url('admin'); ?>"><?php echo " ".$this->session->userdata('wc_title'); ?></a>
                </p>
            </div>
        </footer>

    </div>
</div>

<div class="fixed-plugin" style="display: none;">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title">Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <div class="switch"
                        data-on-label="ON"
                        data-off-label="OFF">
                        <input type="checkbox" checked/>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="/light-bootstrap-dashboard-pro/assets/img/full-screen-image-1.jpg">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="/light-bootstrap-dashboard-pro/assets/img/full-screen-image-2.jpg">
                </a>
            </li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="/light-bootstrap-dashboard-pro/assets/img/full-screen-image-3.jpg">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="/light-bootstrap-dashboard-pro/assets/img/full-screen-image-4.jpg">
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
                </div>
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-info btn-block btn-fill">Buy Now!</a>
                </div>
            </li>

            <li class="header-title">Thank you for 452 shares!</li>

            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> &middot; 182</button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"> &middot; 270</i></button>
            </li>

        </ul>
    </div>
</div>


 




<!-- //// Modals -->
<!-- Modal Lng -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <p id="body_modal"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger close_modal" data-dismiss="modal"><i class="fa fa-fw fa-close"></i> Close</button>
        <button type="button" class="btn btn-primary btn_save_lng" data-dismiss="modal" ><i class="fa fa-fw fa-save"></i> Save changes</button>
      </div>
    </div>
  </div>
</div>	

	



 

</body>



<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->

    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!--  Forms Validations Plugin -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.js"></script>

    <!--  Select Picker Plugin -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-selectpicker.js"></script>

	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-checkbox-radio-switch-tags.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
	<script src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-jvectormap.js"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Wizard Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.bootstrap.wizard.min.js"></script>

    <!--  Datatable Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-table.js"></script>

    <!--  Full Calendar Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="<?php echo base_url(); ?>assets/js/light-bootstrap-dashboard.js"></script>

	<!--   Sharrre Library    -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.sharrre.js"></script>

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>

	<script type="text/javascript">
	//////////////////////// Start For modal            
    var checkeventcount = 1,prevTarget;
    $('.modal').on('show.bs.modal', function (e) {
        if(typeof prevTarget == 'undefined' || (checkeventcount==1 && e.target!=prevTarget))
        {  
          prevTarget = e.target;
          checkeventcount++;
          e.preventDefault();
          $(e.target).appendTo('body').modal('show');
        }
        else if(e.target==prevTarget && checkeventcount==2)
        {
          checkeventcount--;
        }
     });  
//////////////////////// End For modal  
	</script>
	<script type="text/javascript">
	/*
    	$(document).ready(function(){

        	demo.initDashboardPageCharts();
        	demo.initVectorMap();

        	$.notify({
            	icon: 'pe-7s-bell',
            	message: "<b>Light Bootstrap Dashboard PRO</b> - forget about boring dashboards."

            },{
                type: 'warning',
                timer: 4000
            });
            

    	});
    	//*/
	</script>
	<!-- Start update Status -->
<script>

$(document).ready(function(){

$(".btn_status").click(function(){

  var data_id = $(this).attr("data_id");
  var data_table = $(this).attr("data_table");
  var app_rej = '0';
   if($(this).hasClass('approve')){
      $(this).addClass('reject btn-warning');
      $(this).removeClass('approve btn-success');
      $(this).html('<i class="fa fa-times"></i>');
      app_rej = '0';

  }else if($(this).hasClass('reject')){
      $(this).removeClass('reject btn-warning');
      $(this).addClass('approve btn-success');
      $(this).html('<i class="fa fa-check"></i>');
      app_rej = '1';
  }
  
  var url_update = "<?php echo base_url('manage/update_status/"+data_id+"/"+data_table+"/"+app_rej+"'); ?>";
 $.post(url_update, {  }, function(theResponse){ 	});

  });
  });
	
</script>
<!-- Start Update Language -->
<script>

 
$(document).ready(function(){
$(".btn_transfer").click(function(){

  var data_id = $(this).attr("data_id");
  var data_table = $(this).attr("data_table");
  var app_rej = '0';
   if($(this).hasClass('approve')){
      $(this).addClass('reject btn-warning');
      $(this).removeClass('approve btn-success');
      $(this).html('<i class="fa fa-times"></i>');
      app_rej = '0';

  }else if($(this).hasClass('reject')){
      $(this).removeClass('reject btn-warning');
      $(this).addClass('approve btn-success');
      $(this).html('<i class="fa fa-check"></i>');
      app_rej = '1';
  }
  
  var url_update = "<?php echo base_url('product/update_transfer/"+data_id+"/"+data_table+"/"+app_rej+"'); ?>";
 $.post(url_update, {  }, function(theResponse){ 	});

  });
/////////////////////// lng
	$(".btn_lng_update").click(function(){
		var data_id = $(this).attr("data_id");
  		var data_table = $(this).attr("data_table");
  		var data_title = $(this).attr("data_title");
		
		$('#myModalLabel').html(data_title);

		var url_update = "<?php echo base_url('manage/lng/"+data_table+"/"+data_id+"'); ?>";
 		$.post(url_update, {  }, function(theResponse){
 			
 			//var data[] = theResponse;
 			
 			
 			$('#body_modal').html(theResponse);	
 		});
  	});
  	
  	$(".btn_save_lng").click(function(){
		var data_id = $('#topic_id').val();
		var table_name = $('#table_name').val();
		var url_count = "<?php echo base_url('manage/count_js_lang/"+table_name+"/"+data_id+"'); ?>";
		var url_update = "<?php echo base_url('manage/postdata_js_lang/"+table_name+"/"+data_id+"'); ?>";
 		var datastring = $("#form_js_lng").serialize();
		$.ajax({
		    type: "POST",
		    url: url_update,
		    data: datastring,
		    dataType: "json",
		    success: function() {
		        $.ajax({
				    type: "POST",
				    url: url_count,
				    data: datastring,
				    dataType: "json",
				    success: function(data) {
						$( "#count_lng_"+data_id).html( data );
				    },
				    error: function() {
				       // alert(url_update+datastring);
				    }
				});
		    },
		    error: function() {
		       // alert(url_update+datastring);
		    }
		});
		
		
		//$( "#count_lng_"+data_id).load( url_count );
		

		
 		
 		
  	});
  	
  	$(".close_modal").click(function(){
		$('#myModalLabel').html('');
		$('#body_modal').html('');
  	});
/////////////////////

});
	
</script>

	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46172202-1', 'auto');
      ga('send', 'pageview');

    </script>

</html>
