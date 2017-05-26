<!doctype html >
<?php 
$query = $this->db->get('tbl_webconfig');
    $data = $query->row();
    $newdata = array(
        'wc_webconfig'  => 'webconfig',
        'wc_title'  => ''.$data->title.'',
        'wc_keyword'  => ''.$data->keyword.'',
        'wc_description'  => ''.$data->description.'',
        'wc_title_member'  => ''.$data->title_member.'',
        'wc_title_search'  => ''.$data->title_search.'',
        'wc_title_search_des'  => ''.$data->title_search_des.'',
        'wc_amount_per_day'  => ''.$data->amount_per_day.'',
        'wc_title_bar'  => ''.$data->title_bar.'',
        'wc_title_add'  => ''.$data->title_add.'',
        'wc_title_post'  => ''.$data->title_post.'',
        'wc_title_type'  => ''.$data->title_type.'',
        'wc_title_descript'  => ''.$data->title_descript.'',
        'wc_title_vip'  => ''.$data->title_vip.'',
        'wc_title_top'  => ''.$data->title_top.'',
        'wc_logo'  => ''.$data->logo.'',
        'wc_webstats'  => ''.$data->webstats.'',
        'wc_fav'  => ''.$data->fav.'',
        'wc_vip_rule'  => ''.$data->vip_rule.'',
    );
    $this->session->set_userdata($newdata);


$title = $this->session->userdata('wc_title'); 

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $des_view." ".$data->description; ?>">
    <meta name="author" content="<?php echo $data->dev_by; ?>">
    <link href="<? echo base_url(); ?>uploads/admin/<?php echo $this->session->userdata('wc_fav'); ?>" rel="shortcut icon" type="image/x-icon" />
    <title><?php echo $title_view." ".$this->session->userdata('wc_title'); ?> </title>
    
    
    			<meta itemprop="name" content="<?php echo $title_view." ".$this->session->userdata('wc_title'); ?>">
				<meta itemprop="description" content="<?php echo $des_view." ".$data->description; ?>">
				<meta itemprop="image" content="<?=$link_img_top;?>">
				<meta property="og:title" content="<?php echo $title_view." ".$this->session->userdata('wc_title'); ?>">
				<meta property="og:description" content="<?php echo $des_view." ".$data->description; ?>">
				<meta property="og:image" content="<?=$link_img_top;?>"> 

    <!-- Bootstrap core CSS     -->
    <?php echo link_tag('assets/css/bootstrap.min.css'); ?>

    <!--  Light Bootstrap Dashboard core CSS    -->
    <?php echo link_tag('assets/css/light-bootstrap-dashboard.css'); ?>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <?php echo link_tag('assets/css/demo.css'); ?>

    <!--     Fonts and icons     -->
    <?php echo link_tag('assets/css/font-awesome.min.css'); ?>
    <?php echo link_tag('assets/css/css'); ?>
    <?php echo link_tag('assets/css/pe-icon-7-stroke.css'); ?>

</head>
<body> 

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $this->session->userdata('wc_title'); ?></a>
        </div>
        <div class="collapse navbar-collapse">       
            
            <ul class="nav navbar-nav navbar-right" style="display: none;">
                <li>
                   <a href="#">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="purple" data-image="<?php echo base_url(); ?>assets/img/full-screen-image-1.jpg">   
        
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                       <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

          <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="<?php echo base_url(); ?>">return to dashboard</a> or try using the search form.
          </p>
          <a  class="btn btn-default btn-lg" data-toggle="offcanvas" id="btn_search_show" href="<?php echo base_url(); ?>" >
			<span class="glyphicon glyphicon-hand-left" id="icon_btn_search_show"></span>
			<span class="label label-success" id="txt_btn_search_show">Go Back</span> Here
			
		</a> 
                                
                    </div>                    
                </div>
            </div>
        </div>
    	
    	<footer class="footer footer-transparent">
            <div class="container">
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




</body>
    
    <!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
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
        $().ready(function(){
            lbd.checkFullPageBackgroundImage();
            
            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
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
    