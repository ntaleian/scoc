<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://bx-code-admin.websitedesignmarketingagency.com/images/favicon.ico">

    <title>PCA SCOC System</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-extend.css">	
	
	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/master_style.css">
	
	<!-- Bx-code admin skins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/_all-skins.css">
	
	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor_components/datatable/datatables.min.css"/>
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
     
  </head>

<body class="hold-transition skin-blue sidebar-mini">
    
    
            <div class="col-12">	

							<div class="row">
								<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
									<thead>
										<tr>
											<th>Empno</th>
											<th>Vote Code</th>
											<th>Vote Name</th>
											<th>Amount</th>
											<th>Payroll date</th>
										</tr>
									</thead>
									<tbody>
									    <?php
									        if(!empty($results))
									        {
									           // print_r($results); exit;
									            foreach($results as $row)
									            {
									    ?>
										<tr>
										    <td><?php echo str_pad($row['empno'], 15, '0', STR_PAD_LEFT); ?></td>
											<td><?php echo str_pad($row['vote'], 3, '0', STR_PAD_LEFT); ?></td>
											<td><?php echo $row['description']; ?></td>
											<td><?php echo number_format(str_replace(',','',$row['amount'])); ?></td>
											<td><?php echo $row['payrolldate'] ?></td>
										</tr>
                                            
										<?php
									            }
										    }
										?>
									</tbody>
								</table>
								</div> 
							
				</div>
    
  
  <!-- jQuery 3 -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- fullscreen -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/screenfull/screenfull.js"></script>

	<!-- jQuery ui -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	
	<!-- popper -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- Slimscroll -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/fastclick/lib/fastclick.js"></script>

  <!-- Select2 -->
  <script src="<?php echo base_url(); ?>assets/vendor_components/select2/dist/js/select2.full.js"></script>
	
	<!-- Sparkline -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- apexcharts -->
	<script src="<?php echo base_url(); ?>assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

	<!-- This is data table -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/datatable/datatables.min.js"></script>

	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url(); ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
		
	<!-- Bx-code admin App -->
	<script src="<?php echo base_url(); ?>assets/js/template.js"></script>
	
	<!-- Bx-code admin dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url(); ?>assets/js/pages/dashboard-2.js"></script>

  <!-- Bx-code admin for advanced form element -->
  <script src="<?php echo base_url(); ?>assets/js/pages/advanced-form-element.js"></script>
  
  <script type="text/javascript">
            $(document).ready(function(){
               $('#example').DataTable( {
            		dom: 'Bfrtip',
            		buttons: [
            			'copy', 'csv', 'excel'
            		]
            	} ); 
            });
        </script>
  
  </body>

</html>