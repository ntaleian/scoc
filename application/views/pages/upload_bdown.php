<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?php $this->load->view('incl/breadcrumb'); ?>

    <!-- Main content -->
    <section class="content">	
		<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="box">
					<div class="box-header with-border bg-light">
					  <h4 class="box-title">Upload Breakdown File</h4>
					  <ul class="box-controls pull-right">
						<li><a class="box-btn-fullscreen" href="#"></a></li>
					  </ul>
					</div>
					
										       <span id="message"></span>

									<form class="form" method="post" action="" enctype="multipart/form-data" id="bd_form">

					<div class="box-body">
					  
						
							  <div class="row">

								<div class="col-md-3 col-12">
								  <div class="form-group">
									<label>Select Month</label>
									<select class="form-control select2" style="width: 100%;" name="month" id="month">
									  <option selected="selected" disabled="">--Select Month--</option>
									  <option value="01">January</option>
                                      <option value="02">Febuary</option>
                                      <option value="03">March</option>
                                      <option value="04">April</option>
                                      <option value="05">May</option>
                                      <option value="06">Jun</option>
                                      <option value="07">July</option>
                                      <option value="08">August</option>
                                      <option value="09">September</option>
                                      <option value="10">October</option>
                                      <option value="11">November</option>
                                      <option value="12">December</option>
									</select>
								  </div>
								  <!-- /.form-group -->
								</div>

								<div class="col-md-3 col-12">
								  <div class="form-group">
									<label>Select Year</label>
									<select class="form-control select2" style="width: 100%;" name="year" id="year">
									  <option selected="selected" disabled="">--Select Year--</option>
									  <?php for($i=date('Y',time());$i>=2021;$i--){?>
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                      <?php } ?>
									</select>
								  </div>
								  <!-- /.form-group -->
								</div>

							</div>

							<div class="row">

								<div class="col-md-6 col-12">
									<div class="form-group">
										<h5>Select Breakdown File to Upload <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="file" name="uplfile2" id="uplfile2" class="form-control" required> </div>
											<div class="form-control-feedback text-danger" id="chk-error"><small></small></div>
									</div>
								</div>

							  </div>
							  <!-- /.row -->
							

					</div>
					<!-- /.box-body -->
					<div class="box-footer">
					  <button type="submit" class="btn btn-success">Submit</button>
					</div>
					<!-- /.box-footer-->
					
							       <!-- <span id="message"></span>

					<div class="form-group" id="process" style="display:none;">
        <div class="progress">
         <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
          <span id="process_data">0</span> - <span id="total_data">0</span>
         </div>
        </div>
       </div> -->

       				<div class="form-group" id="process" style="/*display:none;*/">
				        <!-- <div class="progress">
				         <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
				          <span id="process_data">0</span> - <span id="total_data">0</span>
				         </div>
				        </div> -->
				      <div class="row" style="padding: 1em;">
				      	<div class="col-lg-12 col-12">
					        <div class="progress">												
								<div id="file-progress-bar" class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated" role="progressbar">
									<!-- <span class="sr-only">60% Complete</span> -->
								</div>
							</div>
						</div>
					   </div>
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