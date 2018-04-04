<?php include('connection.php'); ?>
<?php include('first.php'); ?>
<?php include('mentor_sidebar.php');



 ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mentee List</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <ul class="pagination pagination-split">
                          
                        </ul>
                      </div>

                      <div class="clearfix"></div>
					  
					  
					  
					  
					  
					  
					   <?php
								 
						$username=$_SESSION['username'];		 
								 $crse="SELECT * FROM `tbl_mentor` WHERE  mentor_uname='$username'"; 
	$r=mysqli_query($con,$crse);
	
	
	
	 while($row=mysqli_fetch_assoc($r))
		{
		   
		
				$s_mnid=$row["mentor_id"];
				


		}
								 
		?>
<?php		
								 
								 
	$sql2="SELECT * FROM `tbl_studentreg` WHERE `student_mentorid`='$s_mnid' ";
	$sq2=mysqli_query($con,$sql2);
     while($row=mysqli_fetch_assoc($sq2))
	 {
	 
					 $id2=$row['student_id'];
					 $sname=$row['student_name'];
					 $sbranch=$row['student_branch'];
					 $scourse=$row['student_course'];
					 $sadmno=$row['student_admno'];
					 $spic=$row['student_photo'];

			
			
		?>	
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>Name:<b> <?php echo $sname ?></b></i></h4>
                            <div class="left col-xs-7">
                              <h2></h2>
                              <p><strong>Admission No: </strong><?php echo $sadmno ?>  </p>
                              <ul class="list-unstyled">
                                <li></i><strong> Branch:</strong> <?php echo $sbranch ?> </li>
                                <li></i><strong> Course:</strong> <?php echo $scourse ?> </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="<?php echo $spic ?>" alt="hiii" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                             
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                               <a href="mentor_user_profile_list_view.php?action=edit&id=<?php echo $id2; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View Profile </a>
                            </div>
                          </div>
                        </div>
                      </div>

                        <?php    
                                }
	
		?>	

                      

                      

                     

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



<?php include('footer.php'); ?>