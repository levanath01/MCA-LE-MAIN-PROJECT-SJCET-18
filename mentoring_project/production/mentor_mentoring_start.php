

<?php include('connection.php'); ?>
<?php include('first.php'); ?>
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
				
				
		}
}
}
	
    ?>



 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mentoring Book</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php //echo $sname;?><small><?php//echo $username;?></small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
						 
		                     <img class="" src="<?php echo $sphoto;?>" alt="Mentor Photo" title="Change the avatar" height="200px">
                           
		
                        </div>
                      </div>
                      <h3>&nbsp;&nbsp;<?php echo $sname;?></h3>

                      
                       
					  
					   
					   

                  
                     <!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Change password</a>-->
                      <br />

                      

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        
                        

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Content Page</a>
                          </li>
                         
                          
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
 

                            <!-- start user projects -->
                            <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                           <th>Content</th>
                          <th>Mentoring Progress</th>
                         
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
						
						<?php
						
							$sq01="SELECT local_id FROM `tbl_mn_localguardian` WHERE `local_stud_id`='$id'";
		$r01= mysqli_query($con,$sq01);
		
		
		
		$pr01 = mysqli_fetch_array($r01, MYSQLI_ASSOC) ;
		
		
		if($pr01!="")
		{
		
		}			
			?>			
						
						
                          <td>1.</td>
                         
                          
                          <td>
                            <a href="mentor_fill_book/biodata_section.php?action=edit&id=<?php echo $sid; ?>" class="btn btn-default btn-sm"><i class="fa fa-edit m-right-xs"></i>Biodata Of Mentee</a>
                          </td>
						  
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="12"></div>
                            </div>
                            <small>12% Complete</small>
                          </td>
                         
                        </tr>
						 
						 
                         
						  <tr>
                          <td>2.</td>
                         
                          
                          <td>
						  
						  <a href="mentor_fill_book/objective_impr.php?action=edit&id=<?php echo $sid; ?>" class="btn btn-default btn-sm"><i class="fa fa-edit m-right-xs"></i>Mentors Objective Impressions About Mentee</a>
						  
						  
                            
                          </td>
						  
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="20"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                         
                        </tr>
						 <tr>
                          <td>3.</td>
                         
                          
                          <td>
                            <a href="mentor_fill_book/career_goal.php?action=edit&id=<?php echo $sid; ?>" class="btn btn-default btn-sm"><i class="fa fa-edit m-right-xs"></i>Scripting Career Goals</a>
                          </td>
						  
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="57"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                         
                        </tr>
						 <tr>
                          <td>4.</td>
                         
                          
                          <td>
                             <a href="mentor_fill_book/core_comp.php?action=edit&id=<?php echo $sid; ?>" class="btn btn-default btn-sm"><i class="fa fa-edit m-right-xs"></i>Core Competancy/Career Fitment Matrix</a>
                          </td>
						  
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="10"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                         
                        </tr>
						 <tr>
                          <td>5.</td>
                         
                          
                          <td>
						  
						  <a href="mentor_fill_book/mentor_assesmnt.php?action=edit&id=<?php echo $sid; ?>" class="btn btn-default btn-sm"><i class="fa fa-edit m-right-xs"></i>Assessment of the Mentee by the Mentor</a>
                           
                          </td>
						  
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="57"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                         
                        </tr>
						
						
						<tr>
                          <td>7.</td>
                         
                          
                          <td>
                             <a href="mentor_student_photo_upload.php?action=upload&id=<?php echo $sid; ?>" class="btn btn-default btn-sm"><i class="fa fa-edit m-right-xs"></i>Mentoring Assignment</a>
                          </td>
						  
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="57"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                         
                        </tr>
						<tr>
                          <td>8.</td>
                         
                          
                          <td>
                             <a href="mentor_fill_book/annexure1.php?action=edit&id=<?php echo $sid; ?>" class="btn btn-default btn-sm"><i class="fa fa-edit m-right-xs"></i>Annexure 1</a>
                          </td>
						  
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="57"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                         
                        </tr>
						<tr>
                          <td>9.</td>
                         
                          
                          <td>
                             <a href="mentor_student_photo_upload.php?action=upload&id=<?php echo $sid; ?>" class="btn btn-default btn-sm"><i class="fa fa-edit m-right-xs"></i>Annexure 2</a>
                          </td>
						  
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="57"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                         
                        </tr>
                         <tr>
                          <td>6.</td>
                         
                          
                          <td>
                             <a href="mentor_fill_book/mentor_log_fill.php?action=edit&id=<?php echo $sid; ?>" class="btn btn-default btn-sm"><i class="fa fa-edit m-right-xs"></i>Mentoring Log</a>
                          </td>
						  
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="30"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                         
                        </tr>
                        
                        
                        
                        
                        
                       
                        
                      </tbody>
                    </table>
                    <!-- end project list -->
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

























