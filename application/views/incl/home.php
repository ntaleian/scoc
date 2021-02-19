<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  
    <!-- Main content -->
    <section class="content">	
		<div class="container">	
			<div class="row">
				<div class="col-xl-4 col-md-6 col-12">
					<div class="small-box pull-up bg-info">
						<div class="inner">
						  <h3><?php if(!empty($dash['ExpDate'])){ echo date('M-Y', strtotime($dash['ExpDate'])); } else { echo "#N/A"; } ?></h3>
						  <p>Latest Expectation</p>
						</div>
						<div class="icon">
						  <i class="mdi mdi-folder-download"></i>
						</div>
						<a href="<?php echo base_url() ?>pages/view_exp" class="small-box-footer">View Expectation <i class="fa fa-arrow-right"></i></a>
				    </div>
				</div>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="small-box pull-up bg-warning">
						<div class="inner">
						  <h3><?php echo number_format($dash['UnRecon']); ?></h3>
						  <p>Total Unreconciled</p>
						</div>
						<div class="icon">
						  <i class="mdi mdi-close-outline"></i>
						</div>
						<a href="#" class="small-box-footer">View Uploaded Schedules <i class="fa fa-arrow-right"></i></a>
				    </div>
				</div>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="small-box pull-up bg-success">
						<div class="inner">
						  <h3><?php echo number_format($dash['Recon']); ?></h3>
						  <p>Total Reconciled</p>
						</div>
						<div class="icon">
						  <i class="mdi mdi-thumb-up-outline"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
				    </div>
				</div>	
				
				<!-- <div class="col-xl-12 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title"><?php echo date('Y')." Overview"; ?></h4>
						</div>
						<div class="box-body p-0">
							<div id="ticketoverview"></div>
						</div>
					</div>
				</div> -->
				
												
			</div>			
		</div>	  		      
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->