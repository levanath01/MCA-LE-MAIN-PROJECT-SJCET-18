<?php include('first.php'); ?>
<?php include('connection.php'); ?>

<?php include('mentor_sidebar.php'); ?>




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
				$scourse=$row["student_course"];
				$sdate=$row["student_adate"];
				$sphoto=$row["student_photo"];
				$sadmno=$row["student_admno"];
				$sdate=$row["student_adate"];
				$sroll=$row["student_roll"];
				$scont1=$row["student_mob"];
				$scont=substr($scont1,2);

	
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
	 document.getElementById('contact').value=null;
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
  <script>
  function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
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
              
			  <h3>Add New Mentee</h3>
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

                        <input type="hidden" value="<?php echo  $id;?>" name="sid">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mentee Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="" name="sname" value="<?php echo $sname;?>"required>
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Admission No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="" name="sadmno"  value="<?php echo $sadmno;?>"required>
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Roll No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="" name="srno"  value="<?php echo $sroll;?>"onkeypress="return isNumberKey(event)"required>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Admission date.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="" name="sdate"  value="<?php echo $sdate;?>"required>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="" name="smob"  value="<?php echo $scont;?>"id="contact"onchange="return validate()"required>
                        </div>
                      </div>
					  
					  
					  
					  
					  
					 
		<?php

				
		}
}
}

?>		
					 
                       
                        
                         
                       
                     
					  
					   
					   
					   
					 
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary"onclick="javascript:window.location='mentor_home.php';">Cancel</button>
						   <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" name="submit" >Submit</button>
                        </div>
                      </div>

                    </form>
					
					
					
					
					
					
							
					 <?php


if(isset($_POST["submit"])) {

	
	

$sid=$_POST["sid"];
$sname=$_POST["sname"];



$sdate=$_POST["sdate"];
$sadmno=$_POST["sadmno"];
$srno=$_POST["srno"];


$mcont=$_POST["smob"];

$m1mob="91".$mcont;	

	
	
	$univ="UPDATE `tbl_studentreg` SET 
	`student_name`='$sname',`student_roll`='$srno'
	,`student_admno`='$sadmno',`student_adate`='$sdate',`student_mob`='$m1mob'  WHERE student_id='$sid'"; 
	$r=mysqli_query($con,$univ);
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
    <a id="anch1" href="mentor_user_profile_view.php?action=edit&id=<?php echo $sid; ?>"></a>
    <script>alert("Updated Successfully");
	
    document.getElementById("anch1").click();
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
	
	
	<!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	
		

  </body>
  		 </html>
  
	
