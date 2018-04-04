

<?php include('connection.php'); ?>
<?php include('first.php'); ?>
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
				$scourse=$row["student_course"];
				$sdate=$row["student_adate"];
				$sphoto=$row["student_photo"];
				
				
		}
}
}
	
    ?>



 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mentee profile</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $sname;?><small><?php//echo $username;?></small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
						 
		                     <img class="" src="<?php echo $sphoto;?>" alt="Mentor Photo" title="Change the avatar" height="250px">
                           
		
                        </div>
                      </div>
                      <h3>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sname;?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Branch  :<?php echo $sbranch?>
                        </li>
						<li><i class="fa fa-map-marker user-profile-icon"></i> Course  :<?php echo $scourse?>
                        </li>
						<li><i class="fa fa-map-marker user-profile-icon"></i> Joined On  :<?php echo $sdate?>
                        </li>
						

                       

                       
                      </ul>
                       
					  
					  
					   

                  
                     <!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Change password</a>-->
                      <br />

                      

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        
                        

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Mentoring Tasks</a>
                          </li>
                         
                          
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
 

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                
                              </thead>
                              <tbody>
                                <tr>
                                 
					  
                         
                          <td>
                           &nbsp;&nbsp;&nbsp;&nbsp; <a href="admin_view_mntrbook.php?action=edit&id=<?php echo $sid; ?>" class="btn btn-primary"><i class="fa fa-folder"></i> View Mentoring Book </a>
			</td>
			
			
	
                                 
                                </tr>
                            
                               
                              </tbody>
                            </table>
                            <!-- end recent activity -->

                         
                            <!-- start user projects -->
                           
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

























