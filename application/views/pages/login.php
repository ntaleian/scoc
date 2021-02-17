<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bx-code-admin.websitedesignmarketingagency.com/main/pages/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 15:19:20 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://bx-code-admin.websitedesignmarketingagency.com/images/favicon.ico">

    <title>PCA SCOC - Log in </title>
  
	<!-- Bootstrap 4.1-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-extend.css">	
	
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/master_style.css">

	<!-- Bx-code admin skins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<!-- <body class="hold-transition bg-navy bg-img" style="background-image: url(<?php echo base_url(); ?>assets/images/auth-bg/bg-2.jpg)" data-overlay="2"> -->
<body class="hold-transition bg-navy bg-img" data-overlay="2">

	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="b-1">
							<div class="content-top-agile p-10 pb-0">
								<h2 class="text-white mb-0">PCA SCOC System</h2>						

								<h2 class="text-white mb-0">User Login</h2>						
							</div>
							<div class="p-30">
								<form action="<?php echo base_url(); ?>pages/login" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
											</div>
											<input type="text" name="scocusername" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
											</div>
											<input type="password" name="scocpassword" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" name="login" value="login" class="btn btn-danger btn-rounded mt-10">LOG IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>		
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery 3 -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- fullscreen -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/screenfull/screenfull.js"></script>
	
	<!-- popper -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>


</html>
