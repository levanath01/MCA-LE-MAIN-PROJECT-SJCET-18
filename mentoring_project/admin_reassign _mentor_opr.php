<?php include('first.php'); ?>
<?php include('connection.php'); ?>

<?php include('admin_sidebar.php'); ?>




<?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
		$sql="SELECT * FROM `tbl_studentreg` WHERE `student_id`='$id'";
		$r= mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($r))
		{  $sid=$row["student_id"];
				$sname=$row["student_name"];
				$sbranch=$row["student_branch"];
				$smn=$row["student_mnname"];
				
				
		}
}
}
	
    ?>














<script>

function validate()
  {
	  
	  
	  
	  
	  
		   var phoneno = /^\d{10}$/;  
  if(document.getElementById('contact').value.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
     alert("Not a valid Phone Number");  
     return false;  
  }  
	  
	//password validate
	  
	  var passw=  /^\w{5,14}$/;  
if(document.getElementById('pwd').value.match(passw))     
{   
 
return true;  
}  
else  
{   
alert('Password must be 5 to 15 characters long!')  
return false;  
}  
	 

if(document.getElementById('user').value=="")
{
alert("Enter user name");
document.getElementById('user').focus();
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
              
			  <h3>Assign New Mentor</h3>
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

                      <input type="hidden" value="<?php echo $sid;?>" name="stid">
					    <input type="hidden" value="<?php echo $sbranch;?>" name="stdept">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mentee Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="" name="mntname" value="<?php echo $sname;?>"readonly="readonly">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Current Mentor</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="" name="curmnt"readonly="readonly"value="<?php echo $smn;?>">
                        </div>
                      </div>
					  
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select New Mentor</label>
						<div class="col-md-9 col-sm-9 col-xs-12" >
                        <select type="text" name="newmnt" class="form-control" required>
						  <option selected="selected" value=" ">select mentor</option>";
						  <?php
	$sql="SELECT * FROM `tbl_mentor` where mentor_branch='$sbranch' AND mentor_name!='$smn'";
	$sq=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($sq))
	 {
	 
					// $id1=$row['uni_id'];
					 
//echo"<tr><td>".$row['uni_id']."</td>";



			echo"<option>".$row['mentor_name']."</option>";
	       
			
			
	 }
		?>
                           
                          </select>
						   </br>
                      </div>
					 
					   
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary"onclick="javascript:window.location='admin_home.php';">Cancel</button>
						   <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                      </div>

                    </form>
					
					
					
					
					<?php		   
if(isset($_POST["submit"])) {
	
	$stid=$_POST["stid"];
	$mntname=$_POST["mntname"];
	

$stdept=$_POST["stdept"];
	$curmnt=$_POST["curmnt"];
	$newmnt=$_POST["newmnt"];
	
	
	 $date = date('Y/m/d H:i:s');         
				
		
	$sqpast="INSERT INTO `tbl_past_mentor`(`past_stud`, `past_ment`, `past_newment`, `past_dept`, 
	`past_cdate`) VALUES ('	$mntname','$curmnt','$newmnt','$stdept',' $date')";								
	mysqli_query($con,$sqpast);
	
	
									 $sqlstd="SELECT * FROM `tbl_mentor` WHERE  mentor_name='$newmnt'"; 
	$result=mysqli_query($con,$sqlstd);
	
				
	$value = mysqli_fetch_assoc($result);
	
	
	$value1=$value["mentor_id"];
	
	
	
	
	
	
	
	
		
	$sqbio1="UPDATE `tbl_studentreg` SET `student_mentorid`='$value1',`student_mnname`='$newmnt' WHERE student_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	
	?>
	
	
    <script>alert("Mentor Changed Successfully");
	
    document.location.href='admin_home.php';
    </script>
    <?php

	
	
	
	
}
?>

					
					
					
					
					
					
					
					
					
					
					
                  </div>
                </div></div></div></div>
				</body>
			  
            </div>


          </div>
          <br />

         

          
    </div>
	
	
	
	
	
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
	
	
	
	
		

  </body>
  		 </html>
  
	
