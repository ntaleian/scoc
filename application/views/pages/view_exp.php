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
						<h4 class="box-title">Select Period of Expectation File</h4>
					</div>
					<div class="box-body">					  
							      
							<form action="<?php echo base_url(); ?>pages/view_exp" method="get">
						
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
									<button type="submit" name="viewexp" value="viewexp" class="btn btn-default"><i class="fa fa-cog"></i>&nbsp; Generate </button>
									<button type="submit" name="downloadexp" value="downloadexp" class="btn btn-default"><i class="fa fa-download"></i>&nbsp; Download </button>
								</div>

								<br/><br/>

							</div>	
								
						</form>
						
					</div>
				</div>
			</div>

        <?php if($results){ ?>
			<div class="col-12">
				<div class="box">
					<div class="box-header with-border bg-light">
					  <h4 class="box-title">Expectation File for <?php echo date('F-Y', strtotime($period)); ?></h4>
					  <ul class="box-controls pull-right">
						<li><a class="box-btn-fullscreen" href="#"></a></li>
					  </ul>
					</div>
					<div class="box-body">	

							<div class="row">
								<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
									<thead>
										<tr>
											<th>Vote Code</th>
											<th>Vote Name</th>
											<th>No of Employees</th>
											<th>Total Amount</th>
											<th>View</th>
										</tr>
									</thead>
									<tbody>
									    <?php 
									        if(!empty($results)){
									            foreach($results as $row){   
									                
									                #get count and sum
									                // $res = $this->Pages_model->get_exp_vote($row['code'], $period);
									    ?>
										<tr>
											<td><?php echo $row['vote']; ?></td>
											<td><?php echo $row['description']; ?></td>
											<td><?php echo number_format($row['NoOfEmps']); ?></td>
											<td><?php echo number_format($row['totalSum']); ?></td>
											<td>
												<a href="#" onClick="popitup('<?php echo base_url(); ?>pages/popup_expectation?vote=<?php echo $row['vote']; ?>&period=<?php echo $period; ?>')" class="btn btn-icon-circle btn-info"><i class="ti-new-window" aria-hidden="true"></i></button>
											</td>
										</tr>
										
										    <script type="text/javascript">
                                                  function popitup(url)
                                                  {
                                                    newwindow = window.open(url, '', 'modal=yes, dialog=1,height=700,width=1200, status=0, location=no, menubar=0, title=no, scrollbars=0, toolbar=0, titlebar=0');
                                                    if(window.focus){newwindow.focus()}
                                                      return false;
                                                  }
                                            </script>
                                            
										<?php } } ?>
									</tbody>
								</table>
								</div> 
							</div>				

					</div>
					<!-- /.box-body -->
				</div>
				
				<?php } ?>
			</div>
		</div>
    </div>	  		      
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->