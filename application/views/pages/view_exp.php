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
									  <option value="1">January</option>
                                      <option value="2">Febuary</option>
                                      <option value="3">March</option>
                                      <option value="4">April</option>
                                      <option value="5">May</option>
                                      <option value="6">Jun</option>
                                      <option value="7">July</option>
                                      <option value="8">August</option>
                                      <option value="9">September</option>
                                      <option value="10">October</option>
                                      <option value="11">November</option>
                                      <option value="12">December</option>
									</select>
								  </div>
								  <!-- /.form-group -->
								</div>

								<div class="col-md-4 col-12">
								  <div class="form-group">
									<select class="form-control select2" name="year" style="width: 100%;">
									  <option selected="selected" disabled="">--Select Year--</option>
									  <?php for($i=date('Y',time());$i>=2021;$i--){?>
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                      <?php } ?>
									</select>
								  </div>
								  <!-- /.form-group -->
								</div>

								<div class="col-md-4 col-12"><button type="submit" name="viewexp" value="viewexp" class="btn btn-dark">Generate Expectation File</button></div>
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
									        if(!empty($votes)){
									            foreach($votes as $row){   
									                
									                #get count and sum
									                $res = $this->Pages_model->get_exp_vote($row['code'], $period);
									    ?>
										<tr>
											<td><?php echo $row['code']; ?></td>
											<td><?php echo $row['description']; ?></td>
											<td><?php echo number_format($res['NoOfEmps']); ?></td>
											<td><?php echo number_format($res['totalSum']); ?></td>
											<td>
												<a href="#" onClick="popitup('<?php echo base_url(); ?>pages/popup_expectation?vote=<?php echo $row['code']; ?>&period=<?php echo $period; ?>')" class="btn btn-icon-circle btn-info"><i class="ti-new-window" aria-hidden="true"></i></button>
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