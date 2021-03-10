<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  
    <!-- Main content -->
    <section class="content">	
		<div class="container">	
			<div class="row">

				<div class="col-12">
	            <h4 class="page-header">PDMS Executive Report for <?php echo date('l jS F Y')." at ".date('g:ia');; ?></h4>
	          </div>

		                <div class="col-xl-3 col-md-6 col-12 ">
				          	<div class="box bg-info">
				              <div class="box-body">
				                <div class="flexbox">
				                  <h5>Active Deductions</h5>
				                </div>

				                <div class="text-center my-2">
				                  <div class="font-size-60 text-red"><?php echo number_format($stats['dedsNo']); ?></div>
				                  <span class="text-white">Deductions</span>
				                </div>
				              </div>

				              <div class="box-body bg-gray-light py-12">
				                <span class="text-muted mr-1">Value:</span>
				                <span class="text-dark"><?php echo "UGX ".number_format($stats['dedsTtl']); ?></span>
				              </div>

				            </div>
				        </div>	

				        <div class="col-xl-3 col-md-6 col-12 ">
				          	<div class="box bg-success">
				              <div class="box-body">
				                <div class="flexbox">
				                  <h5>New Reservations</h5>
				                </div>

				                <div class="text-center my-2">
				                  <div class="font-size-60 text-red"><?php echo number_format($stats['resNo']); ?></div>
				                  <span class="text-white">Reservations</span>
				                </div>
				              </div>

				              <div class="box-body bg-gray-light py-12">
				                <span class="text-muted mr-1">Value:</span>
				                <span class="text-dark"><?php echo "UGX ".number_format($stats['resTtl']); ?></span>
				              </div>

				            </div>
				        </div>

				        <div class="col-xl-3 col-md-6 col-12 ">
				          	<div class="box bg-warning">
				              <div class="box-body">
				                <div class="flexbox">
				                  <h5>Topup Reservations</h5>
				                </div>

				                <div class="text-center my-2">
				                  <div class="font-size-60 text-red"><?php echo number_format($stats['topResNo']); ?></div>
				                  <span class="text-white">Topup Reservations</span>
				                </div>
				              </div>

				              <div class="box-body bg-gray-light py-12">
				                <span class="text-muted mr-1">Value:</span>
				                <span class="text-dark"><?php echo "UGX ".number_format($stats['topResTtl']); ?></span>
				              </div>

				            </div>
				        </div>

				        <div class="col-xl-3 col-md-6 col-12 ">
				          	<div class="box bg-purple">
				              <div class="box-body">
				                <div class="flexbox">
				                  <h5>User Logins</h5>
				                </div>

				                <div class="text-center my-2">
				                  <div class="font-size-60 text-red"><?php echo number_format($stats['uLogs']); ?></div>
				                  <span class="text-white">Logins</span>
				                </div>
				              </div>

				              <div class="box-body bg-gray-light py-12">
				                <span class="text-muted mr-1">Total Active Users:</span>
				                <span class="text-dark"><?php echo number_format($stats['users']); ?></span>
				              </div>

				            </div>
				        </div>								


		              
				  
		      </div>
		      <!-- /.row -->		
		</div>	  		      
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->