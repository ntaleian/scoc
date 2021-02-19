<footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Logout</a>
		  </li>
		</ul>
    </div>
	  &copy; <?php echo date('Y'); ?> <a href="https://pcuganda.com">PCA Ltd</a>. All Rights Reserved.
  </footer>
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	  
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
   
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url(); ?>assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    <!--<script src="<?php //echo base_url(); ?>assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>-->

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

  <!-- toast -->
  <script src="<?php echo base_url(); ?>assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script src="<?php echo base_url(); ?>js/pages/toastr.js"></script>
	
	<!-- Bx-code admin dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url(); ?>assets/js/pages/dashboard-2.js"></script>

  <!-- Bx-code admin for advanced form element -->
  <script src="<?php echo base_url(); ?>assets/js/pages/advanced-form-element.js"></script>

<script>
 
 $(document).ready(function(){

  var clear_timer;

  $('#myform').on('submit', function(event){
   $('#message').html.innerHTML = '';
   event.preventDefault();
   loop();
   $.ajax({
    url:"<?php echo base_url(); ?>pages/saveupload_exp",
    method:"POST",
    data: new FormData(this),
    dataType:"json",
    contentType:false,
    cache:false,
    processData:false,
    beforeSend:function(){
    // $('#import').innerHTML ='Importing';
     $('#import').attr('disabled','disabled');
    },
    success:function(data)
    {
     if(data.success)
     {
      $('#total_data').text(data.total_line);

      $('#message').html('<div class="alert alert-success">CSV File Uploaded</div>');
          // $('#import').innerHTML ='Submit';
           $('#import').attr('disabled','false');


     }
     if(data.error)
     {
      $('#message').innerHTML ='<div class="alert alert-danger">'+data.error+'</div>';
      $('#import').attr('disabled',false);
      $('#import').val('Import');
     }
    }
   })
  });

 });
 
 
 function loop(){
var interval = setInterval(function() { 
    
    var file = "<?php echo base_url(); ?>myfile.txt"
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                      console.log(allText);
            $('#message').html('<div class="alert alert-success">'+allText+'</div>');


            }
        }
    }
    rawFile.send(null);
}, 5000);

//      clearInterval(interval);
}
</script>



<script>
 
 $(document).ready(function(){

  var clear_timer;

  $('#myform2').on('submit', function(event){
   $('#message').html.innerHTML = '';
   event.preventDefault();
   loop();
   $.ajax({
    url:"<?php echo base_url(); ?>pages/saveupload_breakdown",
    method:"POST",
    data: new FormData(this),
    dataType:"json",
    contentType:false,
    cache:false,
    processData:false,
    beforeSend:function(){
    // $('#import').innerHTML ='Importing';
     $('#import').attr('disabled','disabled');
    },
    success:function(data)
    {
     if(data.success)
     {
      $('#total_data').text(data.total_line);

      $('#message').html('<div class="alert alert-success">CSV File Uploaded</div>');
          // $('#import').innerHTML ='Submit';
           $('#import').attr('disabled','false');


     }
     if(data.error)
     {
      $('#message').innerHTML ='<div class="alert alert-danger">'+data.error+'</div>';
      $('#import').attr('disabled',false);
      $('#import').val('Import');
     }
    }
   })
  });

 });
 
 
 function loop(){
var interval = setInterval(function() { 
    
    var file = "<?php echo base_url(); ?>myfile2.txt"
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                      console.log(allText);
            $('#message').html('<div class="alert alert-success">'+allText+'</div>');


            }
        }
    }
    rawFile.send(null);
}, 1000);

//      clearInterval(interval);
}
</script>



<script>
 
 $(document).ready(function(){

  var clear_timer;

  $('#myform3').on('submit', function(event){
   $('#message').html.innerHTML = '';
   event.preventDefault();
   loop();
   $.ajax({
    url:"<?php echo base_url(); ?>pages/saveupload_schedules",
    method:"POST",
    data: new FormData(this),
    dataType:"json",
    contentType:false,
    cache:false,
    processData:false,
    beforeSend:function(){
    // $('#import').innerHTML ='Importing';
     $('#import').attr('disabled','disabled');
    },
    success:function(data)
    {
     if(data.success)
     {
      $('#total_data').text(data.total_line);

      $('#message').html('<div class="alert alert-success">CSV File Uploaded</div>');
          // $('#import').innerHTML ='Submit';
           $('#import').attr('disabled','false');


     }
     if(data.error)
     {
      $('#message').innerHTML ='<div class="alert alert-danger">'+data.error+'</div>';
      $('#import').attr('disabled',false);
      $('#import').val('Import');
     }
    }
   })
  });

 });
 
 
 function loop(){
var interval = setInterval(function() { 
    
    var file = "<?php echo base_url(); ?>myfile3.txt"
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                      console.log(allText);
            $('#message').html('<div class="alert alert-success">'+allText+'</div>');


            }
        }
    }
    rawFile.send(null);
}, 1000);

//      clearInterval(interval);
}
</script>

        <script type="text/javascript">
        	$(document).ready(function(){
        	   var table = $('#example1').DataTable();

        		$('#example1 tbody').on( 'click', 'tr', function () {
        			$(this).toggleClass('selected');
        		} );
        
        		$('#row-count').click( function () {
        			alert( table.rows('.selected').data().length +' row(s) selected' );
        		}); 
        	});
        </script>
        
        <script type="text/javascript">
            $(document).ready(function(){
               $('#example').DataTable( {
                    "scrollX": true,
            		dom: 'Bfrtip',
            		buttons: [
            			'copy', 'csv', 'excel'
            		]
            	} ); 
            });
        </script>
        
        <script type="text/javascript">
            $(document).ready(function(){
               $('#sa-params').click(function(){
                    swal({   
                        title: "Are you sure?",   
                        text: "The reconciled records won't be reversible!",   
                        type: "warning",   
                        showCancelButton: true,   
                        confirmButtonColor: "#4B8B3B",   
                        confirmButtonText: "Yes, reconcile it!",   
                        cancelButtonText: "No, cancel!",   
                        closeOnConfirm: false,   
                        closeOnCancel: false 
                    }, function(isConfirm){   
                        if (isConfirm) {     
                            
                            // swal("Confirmed!", "The files are being reconciled.", "success");  
                            
                            swal({
                               title: "Confirmed!",
                               text: "The files are being reconciled.",
                               type: "success",
                               showConfirmButton: false
                            });
                                
                            var exp = $('#exp').val();
                            var payrolldate = $('#payrolldate').val();
                            var vote = $('#vote').val();
                            
                            // console.log(payrolldate);
                            
                            $.ajax({
                                url: '<?php echo base_url(); ?>pages/reconcile',
                                method: 'post',
                                data: { exp: exp, paydate: payrolldate, vote: vote },
                                dataType: 'json',
                                success: function(response){
                                    window.location.reload(true);
                                    }
                                });
                            
                            
                        } else {     
                            swal("Cancelled", "The records have not been reconciled.", "error");   
                        } 
                    });
                }); 
            });
        </script>
        
        <script type="text/javascript">
            $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })
        </script>

        <script type="text/javascript">
          $(document).ready(function(){

            var success_msg = "<?php echo $this->session->flashdata('succ_msg'); ?>";

            var error_msg = "<?php echo $this->session->flashdata('err_msg'); ?>";

            if($success_msg.length > 0)
            {
              $.toast({
                  heading: 'Success!',
                  text: success_msg,
                  position: 'top-right',
                  loaderBg: '#ff6849',
                  icon: 'success',
                  hideAfter: 3500,
                  stack: 6
              });
            }
            else if(error_msg.length > 0)
            {
              $.toast({
                  heading: 'Error!',
                  text: error_msg,
                  position: 'top-right',
                  loaderBg: '#ff6849',
                  icon: 'error',
                  hideAfter: 3500,
                  stack: 6
              });
            }

              
          });
        </script>

        <script type="text/javascript">
          $(document).ready(function(){
            $("#loader").hide();
          });
        </script>

        

</body>

</html>
