<?php include('first.php'); ?>
<?php include('connection.php'); ?>

<?php include('mentor_sidebar.php'); ?>







 <?php
								 
						$username=$_SESSION['username'];		 
								 $crse="SELECT * FROM `tbl_mentor` WHERE  mentor_uname='$username'"; 
	$r=mysqli_query($con,$crse);
	
	
	
	 while($row=mysqli_fetch_assoc($r))
		{
		   
		
				$s_mnid=$row["mentor_id"];
				


		}
								 
		?>



<script>

function TDate() {
    var UserDate = document.getElementById("userdate").value;
    var ToDate = new Date();

    if (new Date(UserDate).getTime() <= ToDate.getTime()) {
          alert("The Date must be Bigger or Equal to today date");
		  document.getElementById("userdate").value=null;
          return false;
     }
    return true;
}
  </script>

  
  
  
  
  
  <html>
  <body>
   
  
  


<!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              
			  <h3>New Schedule</h3>
			  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
			   <div class="right_col" role="main">
			  
			  
			  <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" action="" method="post">

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Mentee</label>
						<div class="col-md-9 col-sm-9 col-xs-12" >
                        <select type="text" name="mentee" class="form-control">
						  
						  <?php
						  
						  //$mentorcourse=$_POST["mntrcourse"];
						  
						  
	$sql="SELECT * FROM `tbl_studentreg` where student_mentorid='$s_mnid' ";
	$sq=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($sq))
	 {
	 
					$sid1=$row['student_id'];
					 
//echo"<tr><td>".$row['uni_id']."</td>";
			echo"<option>".$row['student_name']."</option>";
	       
			
			
	 }
		?>
                           
                          </select>
						   </br>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Session date.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="" name="stddate"id="userdate" onchange="TDate()" required>
                        </div>
                      </div>
					 
					  
					  
					  
					  
					  
					 
					  
					 
                       
                        
                         
                       
                     
					  
					   
					   
					   
					 
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary"onclick="javascript:window.location='admin_home.php';">Cancel</button>
						   <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" name="submit" >Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div></div></div></div>
				</body>
			  
            </div>


          </div>
          <br />

         

          
    </div>
	
	   <?php


if(isset($_POST["submit"])) {

	$sdate = $_POST['stddate'];	
	$menteename = $_POST['mentee'];	
	
	$username=$_SESSION['username'];		 
								 $crse="SELECT * FROM `tbl_mentor` WHERE  mentor_uname='$username'"; 
	$r=mysqli_query($con,$crse);
	
	
	
	 while($row=mysqli_fetch_assoc($r))
		{
		   
		
				$st_mnid=$row["mentor_id"];
				$st_mname=$row["mentor_name"];


		}
		
		
									 $sqlstd="SELECT * FROM `tbl_studentreg` WHERE  student_name='$menteename'"; 
	$result=mysqli_query($con,$sqlstd);
	
				
	$value = mysqli_fetch_assoc($result);
	
	
	$value1=$value["student_mob"];
	//echo $value1;
	
	
	
//send sms code
	
	// Authorisation details.
	$username = "levanathr1@gmail.com";
	$hash = "5cf436fc1752c0a5febbec461c752b85a56e9996992151c8a2f29e9714e41705";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $value1; // A single number or a comma-seperated list of numbers
	$message = "Dear,".$menteename.",Your mentoring has been scheduled with".$st_mname.",on,".$sdate;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	if($result==true){
		
		echo $numbers;
		
		
		
		
		
		
	}
	curl_close($ch);

	
	
	$univ="INSERT INTO `tbl_mentor_schdle`(`schdle_mntr_id`, `schdle_stud_name`, `schdle_date`) VALUES ('$st_mnid','$menteename','$sdate')"; 
	$r=mysqli_query($con,$univ);
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
    <script>alert("New task successfully added");
   // document.location.href='mentor_home.php';
    </script>
    <?php
	
	
}
	
	

		
	

    


?>
	
	
	
  <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
	
	<!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	
		

  </body>
  		 </html>
  
  
	
