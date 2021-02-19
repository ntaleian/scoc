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
						<h4 class="box-title">Select Period of Breakdown File</h4>
					</div>
					<div class="box-body">					  
							      
							<form action="<?php echo base_url(); ?>pages/view_bdown" method="get">
						
							  <div class="row">

								<div class="col-md-4 col-12">
								  <div class="form-group">
									<select class="form-control select2" name="month" style="width: 100%;">
									  <option selected="selected" disabled="">--Select Month--</option>
									  <option value="1" <?php if(!empty($month) && $month == '1'){ echo "selected"; } ?> >January</option>
                                      <option value="2" <?php if(!empty($month) && $month == '2'){ echo "selected"; } ?> >Febuary</option>
                                      <option value="3" <?php if(!empty($month) && $month == '3'){ echo "selected"; } ?> >March</option>
                                      <option value="4" <?php if(!empty($month) && $month == '4'){ echo "selected"; } ?> >April</option>
                                      <option value="5" <?php if(!empty($month) && $month == '5'){ echo "selected"; } ?> >May</option>
                                      <option value="6" <?php if(!empty($month) && $month == '6'){ echo "selected"; } ?> >Jun</option>
                                      <option value="7" <?php if(!empty($month) && $month == '7'){ echo "selected"; } ?> >July</option>
                                      <option value="8" <?php if(!empty($month) && $month == '8'){ echo "selected"; } ?> >August</option>
                                      <option value="9" <?php if(!empty($month) && $month == '9'){ echo "selected"; } ?> >September</option>
                                      <option value="10" <?php if(!empty($month) && $month == '10'){ echo "selected"; } ?> >October</option>
                                      <option value="11" <?php if(!empty($month) && $month == '11'){ echo "selected"; } ?> >November</option>
                                      <option value="12" <?php if(!empty($month) && $month == '12'){ echo "selected"; } ?> >December</option>
									</select>
								  </div>
								  <!-- /.form-group -->
								</div>

								<div class="col-md-4 col-12">
								  <div class="form-group">
									<select class="form-control select2" name="year" style="width: 100%;">
									  <option selected="selected" disabled="">--Select Year--</option>
									  <?php for($i=date('Y',time());$i>=2021;$i--){?>
                                            <option value="<?php echo $i;?>" <?php if(!empty($year) && $year == $i){ echo "selected"; } ?> ><?php echo $i;?></option>
                                      <?php } ?>
									</select>
								  </div>
								  <!-- /.form-group -->
								</div>

								<div class="col-md-4 col-12">
									<button type="submit" name="downloadexp" value="downloadexp" class="btn btn-default" onclick="showLoader();"><i class="fa fa-download"></i>&nbsp; Download </button>
								</div>

								<br/><br/>

							</div>	
								
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