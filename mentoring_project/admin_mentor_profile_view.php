<?php include('connection.php'); ?>
<?php include('first.php'); ?>

<?php include('admin_sidebar.php'); ?>


 
  
  
 
 <?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='view')
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
				
				
		}
}
}
	
    ?>


	


 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mentor profile</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $mnname;?><small><?php//echo $username;?></small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
						  <?php
				
					//$username=$_SESSION['username'];
					$user5="SELECT * FROM `tbl_mentor` WHERE  mentor_id='$mnid'"; 
					$r5=mysqli_query($con,$user5);
	
	 while($row5=mysqli_fetch_assoc($r5))
		{
		   
			$propicz=$row5["mentor_pic"];
			
			

		


		?>				  
		                     <img class="img-responsive avatar-view" src="<?php echo $propicz;?>" alt="Mentor Photo" title="Change the avatar">
                           
		<?php				  
						  
		}				  ?>
                        </div>
                      </div>
                      <h3><?php echo $mnname;?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Branch  :<?php echo $mnbranch?>
                        </li>
						<li><i class="fa fa-map-marker user-profile-icon"></i> Course  :<?php echo $mncourse?>
                        </li>
						<li><i class="fa fa-map-marker user-profile-icon"></i> Joined On  :<?php echo $mndate?>
                        </li>
						<li><i class="fa fa-map-marker user-profile-icon"></i> Contact  :<?php echo $mncontact?>
                        </li>

                       

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">Email  :<?php echo $mnemail;?></a>
                        </li>
                      </ul>
                       
					  
					   <a class="btn btn-success" href="admin_edit_mentor.php?action=edit&id=<?php echo $mnid; ?>"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
					   

                  
                     <!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Change password</a>-->
                      <br />

                      

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        
                        

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Mentors Students</a>
                          </li>
                         
                          
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                 
                                  <th>Student Name</th>
                                  <th>Admission No.</th>
								  <th>Branch</th>
                                 
                                  <th>Joined on</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                 <?php
								 
								 
					
								 
								 
								 
								 
	$sql2="SELECT * FROM `tbl_studentreg` WHERE `student_mentorid`='$mnid' ";
	$sq2=mysqli_query($con,$sql2);
     while($row=mysqli_fetch_assoc($sq2))
	 {
	 
					 $id2=$row['student_id'];
					 
//echo"<tr><td>".$row['uni_id']."</td>";
			echo"<td>".$row['student_name']."</td>";
	        echo"<td>".$row['student_admno']."</td>";
			
			echo"<td>".$row['student_branch']."</td>";
			echo"<td>".$row['student_adate']."</td>";
			
			
		?>	
					  
                                    
                          <td>
                            <td>
                            <a href="admin_viewallstud_profile.php?action=edit&id=<?php echo $id2; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View Profile </a>
	
                                 
                                </tr>
                            <?php    
                                }
	
		?>	
                               
                              </tbody>
                            </table>
                            <!-- end recent activity -->

                          </div>
                          
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                              photo booth letterpress, commodo enim craft beer mlkshk </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->



<?php include('footer.php'); ?>



























