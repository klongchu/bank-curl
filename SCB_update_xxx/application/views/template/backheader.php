<!DOCTYPE html>
<html lang="en">
<head>
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
    $check_webconfig = 0;

 

    if($this->uri->segment(2) == 'view'){
    	$results = $this->db->where('id',$this->uri->segment(3))->get('tbl_postline')->row();
    	if($results->id){
$type = $this->db->where('id',$results->type)->get('tbl_type')->row();
$province = $this->db->where('id',$results->province)->get('tbl_province')->row();
			$title_view = $results->lineid." : ";
			$des_view = $province->topic_th." ".$type->title." : ";
			
 
if($results->img){
 
$link_img_top = base_url('')."uploads/".$results->img;
}else{
	$link_img_top = base_url('')."uploads/admin/no_img.jpg";
}
  
		}
		
	}
    ?>
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
	
	<?php echo link_tag('bootstrap/css/AdminLTE.min.css'); ?>

     <!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <style>
 
    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="bootstrap/img/full-screen-image-3.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="<?php echo base_url('admin'); ?>" class="logo-text">
                Admin
            </a>
        </div>

    	<div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="<? echo base_url(); ?>uploads/admin/<?=$data->logo;?>" />  
                </div>
                <div class="info" style="display: none;" >
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        Tania Andrew
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Edit Profile</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav">
                <li class="<?php echo activate_menu_sub('index'); ?>"><a href="<?php echo base_url('admin'); ?>"><i class="pe-7s-home"></i><span>Home</span> </a> </li>
        		<li class="<?php echo activate_menu_sub('bank'); ?>"><a href="<?php echo base_url('admin/bank'); ?>"><i class="pe-7s-culture"></i><span>All Bank</span> </a> </li>
        		<li class="<?php echo activate_menu_sub('history'); ?>"><a href="<?php echo base_url('admin/history'); ?>"><i class="pe-7s-alarm"></i><span>History</span> </a> </li>
        		<li class="<?php echo activate_menu_sub('webconfig'); ?>"><a href="<?php echo base_url('admin/webconfig'); ?>"><i class="pe-7s-config"></i><span>Webconfig</span> </a> </li>
        		<li class="<?php echo activate_menu_sub('profile'); ?>"><a href="<?php echo base_url('admin/profile'); ?>"><i class="pe-7s-user"></i><span>Profile</span> </a> </li>

        
        

        
        
        <li><a href="<?php echo base_url('user/logout'); ?>"><i class="fa fa-lock"></i><span>Logout</span> </a> </li>
                



            </ul>
    	</div>
    </div>
<?php
// Getting CI class instance.
    $CI = get_instance();
    // Getting router class to active.
    $class_chk = $CI->router->fetch_method();
    
    if($class_chk == 'setform'){
		$class = '<i class="pe-7s-keypad"></i> Set Form';
	}
	elseif($class_chk == 'sendsms'){
		$class = '<i class="pe-7s-calculator"></i> Send SMS';
	}
	elseif($class_chk == 'bank'){
		$class = '<i class="pe-7s-culture"></i> All Bank Account';
	}
	elseif($class_chk == 'history'){
		$class = '<i class="pe-7s-alarm"></i> History';
	}
	elseif($class_chk == 'webconfig'){
		$class = '<i class="pe-7s-config"></i> Webconfig';
	}
	elseif($class_chk == 'profile'){
		$class = '<i class="pe-7s-user"></i> Profile';
	}
	else{
		$class = '<i class="pe-7s-home"></i> Home';
	}
?>
    <div class="main-panel">
        <nav class="navbar navbar-default">
    		<div class="container-fluid">
    			<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse">
    					<span class="sr-only">Toggle navigation</span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<a class="navbar-brand" href="#"><?=$class;?></a>
    			</div>
    			<div class="collapse navbar-collapse">

 
    			</div>
    		</div>
    	</nav>

<div class="content">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
 

