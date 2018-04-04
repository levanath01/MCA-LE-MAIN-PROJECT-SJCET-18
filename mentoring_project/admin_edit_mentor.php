<?php include('first.php'); ?>
<?php include('connection.php'); ?>

<?php include('admin_sidebar.php'); ?>



<?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
		$sql="SELECT * FROM `tbl_mentor` WHERE `mentor_id`='$id'";
		$r= mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($r))
		{  $mnid=$row["mentor_id"];
				$mnname=$row["mentor_name"];
				$mnbranch=$row["mentor_branch"];
				$mncourse=$row["mentor_course"];
				$mndate=$row["mentor_date"];
				$mncontact=$row["mentor_contact"];
				//$abst=$row["uni_abst"];
				$mnpass=$row["mentor_password"];
				$mnemail=$row["mentor_uname"];
				$mnaddrs=$row["mentor_address"];
				$mnstate=$row["mentor_state"];
				$mncou=$row["mentor_country"];
				$mncont1=$row["mentor_contact"];
				$mnpin=$row["mentor_pincode"];
				
				$mncont=substr($mncont1,2);
				

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
	  
	//password validate

	 

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
              
			  <h3>Add New Branch</h3>
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

                      <input type="hidden" value="<?php echo  $mnid;?>" name="mnid">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mentor Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="" name="mnname" value="<?php echo $mnname;?>">
                        </div>
                      </div>
					  
					  
					  
					  
					  
					  
					  
					 
					  
					  
					  
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Joining Date</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" class="form-control" placeholder="" name="mndate"value="<?php echo $mndate;?>">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
						 <textarea class="form-control" rows="3" placeholder="" name="mnaddrs"><?php echo $mnaddrs;?></textarea>
                         
                        </div>
                      </div>
					  
					 
                       
                        
                         
                       
                     
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
                         <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="mnstate" id="autocomplete-custom-append" value="<?php echo $mnstate;?>"class="form-control col-md-10"/>
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Country</label>
                         <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="mncontry" id="autocomplete-custom-append"value="<?php echo $mncou;?>" class="form-control col-md-10"/>
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pincode</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder=""value="<?php echo $mnpin;?>" name="mnpin"onkeypress="return isNumberKey(event)">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="" name="mncont"value="<?php echo $mncont;?>"id="contact"onchange="return validate()">
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
                          <button type="button" class="btn btn-primary"onclick="javascript:window.location='admin_home.php';">Cancel</button>
						   <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
					
					
					
					
					
					
					
					 <?php


if(isset($_POST["submit"])) {

	
	

$mnid=$_POST["mnid"];
$mname=$_POST["mnname"];



$mdate=$_POST["mndate"];
$maddrs=$_POST["mnaddrs"];
$mstate=$_POST["mnstate"];
$mcntry=$_POST["mncontry"];
$mpin=$_POST["mnpin"];
$mcont=$_POST["mncont"];

$m1mob="91".$mcont;	

	
	
	$univ="UPDATE `tbl_mentor` SET `mentor_name`='$mname',
	`mentor_date`='$mdate'
	,`mentor_address`='$maddrs',`mentor_state`='$mstate',`mentor_country`='$mcntry',`mentor_pincode`='$mpin'
	,`mentor_contact`='$m1mob' WHERE mentor_id='$mnid'"; 
	$r=mysqli_query($con,$univ);
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
    <a id="anch1" href="admin_mentor_profile_view.php?action=view&id=<?php echo $id; ?>"></a>
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
  
	
