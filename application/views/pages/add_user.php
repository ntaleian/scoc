<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?php $this->load->view('incl/breadcrumb'); ?>

    <!-- Main content -->
    <section class="content">	
		<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
		  <div class="box">
			<div class="box-header with-border bg-light">
			  <h4 class="box-title">Add User</h4>			
				<ul class="box-controls pull-right">
				  <li><a class="box-btn-fullscreen" href="#"></a></li>
				</ul>
			</div>
			<!-- /.box-header -->
			<form action="<?php echo base_url(); ?>pages/add_user" method="post">
				<div class="box-body">
					<div class="form-group">
						<label>Full Name:</label>
						<input type="text" name="name" class="form-control" placeholder="Enter full name">
					</div>
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" class="form-control" placeholder="Enter username">
					</div>

					<?php 
						$scoc_user = $this->session->userdata('scoc_user');
						if($scoc_user['type'] == 'admin'){
					 ?>
					<div class="form-group">
						<label>Select Usertype</label>
						<select name="type" class="form-control select2" style="width: 100%;">
									  <option selected="selected" disabled="">--Select Usertype--</option>
									  <option value="normal">Normal</option>
                                      <option value="admin">Admin</option>
						</select>
					</div>
					<?php 
						}
						else
						{
					?>
					<input type="hidden" name="type" value="normal">
					<?php } ?>
					<div class="form-group">
						<label>Password:</label>							
						<input type="password" name="password" class="form-control" placeholder="">
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" name="adduser" value="adduser" class="btn btn-success pull-right">Submit</button><br/><br/>
				</div>
			</form>
		  </div>
		  <!-- /.box -->			
		</div>
		</div>
    </div>	  		      
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->