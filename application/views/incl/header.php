<?php
    $loginStatus = $this->session->userdata('scocUserLoggedIn');
    if($loginStatus != 'Y'){
        redirect(base_url()."pages/login");
    }    

    $scoc_user = $this->session->userdata('scoc_user');
    // echo "<pre>"; print_r($muser); echo "</pre>"; exit;
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <title>PCA SCOC System</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-extend.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/select2/dist/css/select2.min.css">	
	
	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/master_style.css">
	
    <!--alerts CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <!-- toast CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet">	
	
	<!-- Bx-code admin skins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/_all-skins.css">
	
	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor_components/datatable/datatables.min.css"/>
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
     
  </head>

<body class="hold-transition skin-blue sidebar-mini">

<!-- Image loader -->
<div id='loader' style='position: fixed; left: 0; top: 0; z-index: 1000;background: #f0ffff05;width: 100%;height: 100%;'>
  <img src='<?php echo base_url(); ?>assets/images/spinner.gif' width='200px' height='200px' style="top: 300px;left: 700px;position: fixed;">
</div>
<!-- Image loader -->

<div class="wrapper">

  <header class="main-header">	
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo -->
	  <b class="logo-mini">
		  <!-- <span class="light-logo"><img src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="logo"></span> -->
		  <!-- <span class="dark-logo"><img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="logo"></span> -->
	  </b>
      <!-- logo-->
      <span class="logo-lg">
		  <img src="<?php echo base_url(); ?>assets/images/logo-light-text.png" alt="logo" class="light-logo">
	  </span>
    </a>  	
  	<!-- Sidebar toggle button-->
	  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		<span class="sr-only">Toggle navigation</span>
	  </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">	  
	  <div class="ml-10 app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="nav-link rounded" data-provide="fullscreen" title="Full Screen">
					<i class="mdi mdi-crop-free"></i>
				</a>
			</li>

			<li class="btn-group nav-item">
				<a href="#" class="nav-link rounded" data-toggle="dropdown" aria-expanded="false">
					<i class="nav-link-icon mdi mdi-view-dashboard text-white mx-5"> </i>
					<small><?php echo $scoc_user['name']; ?></small>
				</a>
			</li>
				
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/images/avatar/avatar.png" class="user-image rounded-circle b-2" alt="User Image">
              <i class="mdi mdi-chevron-down ml-2"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- Menu Body -->
              <li class="user-body bt-0">
                <div class="row no-gutters">
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="<?php echo base_url(); ?>pages/profile"><i class="ti-settings"></i> Account</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="<?php echo base_url(); ?>pages/logout"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>		  
          
        </ul>
      </div>
    </nav>
  </header>