
  <div class="content-wrapper">
    
    <?php $this->load->view('incl/breadcrumb'); ?>

    <!-- Main content -->
    <section class="content">	
		<div class="container">
		<div class="row">

			<div class="col-12">
				<div class="box">
					<div class="box-header with-border bg-light">
					  <h4 class="box-title">Users List</h4>
					  <ul class="box-controls pull-right">
						<li><a class="box-btn-fullscreen" href="#"></a></li>
					  </ul>
					</div>
					<div class="box-body">	

							<div class="row">
								<table id="example1" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Username</th>
											<th>Usertype</th>
											<th>Date created</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
											if(!empty($users))
											{
												$counter = 1;

												foreach($users as $user)
												{
										?>
										<tr>
											<td><?php echo $counter; ?></td>
											<td><?php echo $user['name']; ?></td>
											<td><?php echo $user['username']; ?></td>
											<td><?php echo ucfirst($user['type']); ?></td>
											<td><?php echo $user['datecreated']; ?></td>
											<td><?php if($user['isactive'] == 'Y'){ echo "Active"; } else if($user['isactive'] == 'N'){ echo "Inactive"; } ?></td>
										</tr>
										<?php
													$counter++;
												}
											}
										?>
									</tbody>		
								</table>
								</div> 
							</div>				

					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
    </div>	  		      
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper