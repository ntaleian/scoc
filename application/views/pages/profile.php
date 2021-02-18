<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?php $this->load->view('incl/breadcrumb'); ?>

    <!-- Main content -->
    <section class="content">	
		<div class="container">
		<div class="row">

			<div class="col-12">
				<div class="box box-transparent box-bordered">
					<div class="box-header with-border bg-light">
						<h4 class="box-title">Profile</h4>
					</div>
					<div class="box-body">					  
							      
							<form action="<?php echo base_url(); ?>pages/profile" method="post">

								<input type="hidden" name="uid" value="<?php echo $uid; ?>">

								<div class="form-group">
									<label>Full Name</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Full Name" name="name" value="<?php if(!empty($user['name'])){ echo $user['name']; } ?>">
									</div>
								</div>
								<div class="form-group">
									<label>User Name</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control" placeholder="Username" name="username" value="<?php if(!empty($user['username'])){ echo $user['username']; } ?>" disabled>
									</div>
								</div>
								<div class="form-group">
									<label>Password</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-lock"></i></span>
										</div>
										<input type="password" class="form-control" placeholder="Password" name="scoc_password">
									</div>
								</div>
								<div class="form-group">
									<label>Confirm Password</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-lock"></i></span>
										</div>
										<input type="password" class="form-control" placeholder="Confirm Password" name="scoc_password_conf">
									</div>
								</div>

								<br/><br/>
								<button type="submit" value="updateuser" name="updateuser" class="btn btn-primary">
								  <i class="ti-save-alt"></i> &nbsp; &nbsp; Update User Profile
								</button>
								
						</form>
						
					</div>
				</div>
			</div>

        
			</div>
		</div>
    </div>	  		      
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->