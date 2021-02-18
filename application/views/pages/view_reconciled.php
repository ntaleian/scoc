Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?php $this->load->view('incl/breadcrumb'); ?>

    <!-- Main content -->
    <section class="content">	
		<div class="container">
		<div class="row">

			<div class="col-12">
				<div class="box">
					<div class="box-header with-border bg-light">
					  <h4 class="box-title">View Reconciled Records</h4>
					  <ul class="box-controls pull-right">
						<li><a class="box-btn-fullscreen" href="#"></a></li>
					  </ul>
					</div>
					<div class="box-body">	

							<div class="row">
							    <div class="col-12">
								<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
									<thead>
										<tr>
											<th>#</th>
											<th>Vote</th>
											<th width="15px">Vote Name</th>
											<th>Count</th>
											<th>Amount</th>
											<th>Payroll date</th>
											<th>Expected</th>
											<th>Match Status</th>
											<th>Recon Status</th>
										</tr>
									</thead>
									<tbody>
									    <?php
									        if(!empty($schedules))
									        {
									            foreach($schedules as $row)
									            {
									                
									                $getexp = $this->Pages_model->get_exp_vote($row['vote'], $row['payrolldate']);
									                
									                if(!$getexp)
									                {
									                    $exp = 0;
									                }
									                else
									                {
									                    $exp = $getexp['totalSum'];
									                }
									    ?>
										<tr>
										    <td>
												<a href="#" onClick="popitup('<?php echo base_url(); ?>pages/popup_schedules?vote=<?php echo $row['vote']; ?>&period=<?php echo $row['payrolldate']; ?>')" class="btn btn-icon-circle btn-xs btn-info" data-toggle="tooltip" data-placement="top" title="View Schedules"><i class="ti-new-window" aria-hidden="true"></i></a>
												
											    <a href="#" onClick="popitup('<?php echo base_url(); ?>pages/popup_recon?vote=<?php echo $row['vote']; ?>&period=<?php echo $row['payrolldate']; ?>')" class="btn btn-icon-circle btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="View Recon"><i class="ti-agenda" aria-hidden="true"></i></a>
											</td>
											<td><?php echo $row['vote']; ?></td>
											<td><?php echo $row['description']; ?></td>
											<td><?php echo number_format($row['NoOfEmps']); ?></td>
											<td><?php echo number_format($row['TotalSum']); ?></td>
											<td><?php echo $row['payrolldate'] ?></td>
											<td><?php echo number_format($exp); ?></td>
											<td><?php if($exp == $row['TotalSum']){ echo "<span class='badge bg-success'>Match</span>"; } else { echo "<span class='badge bg-danger'>No Match</span>"; } ?></td>
											<td><?php if($row['status'] == '1'){ echo "<span class='text-danger'>Not reconciled</span>"; } else if($row['status'] == '2'){ echo "<span class='text-success'>Reconciled</span>"; } ?></td>
										</tr>
										
										    <script type="text/javascript">
                                                  function popitup(url)
                                                  {
                                                    newwindow = window.open(url, '', 'modal=yes, dialog=1,height=700,width=1200, status=0, location=no, menubar=0, title=no, scrollbars=0, toolbar=0, titlebar=0');
                                                    if(window.focus){newwindow.focus()}
                                                      return false;
                                                  }
                                            </script>
                                            
										<?php
									            }
										    }
										?>
									</tbody>
								</table>
								</div>
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