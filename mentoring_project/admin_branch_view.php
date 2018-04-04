<?php include('first.php'); ?>


<?php include('admin_sidebar.php'); ?>
<?php include('connection.php');

if(isset($_GET['action']))
{
	if($_GET['action']=='delete')
	{
	$id=$_GET['id'];
	
	
	
	
	
	
	
	
	//university info delete
	$sq1="DELETE FROM `tbl_branch` WHERE branch_id='$id'";
	$r1=mysqli_query($con,$sq1);
	
	}
}




?>

 


<html>
<body>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Branches</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    
 
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <!--<th style="width: 1%">#</th> -->
						  <th>Branch Name</th>
						  
						  <th>Created On</th>
                          
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  
					  <?php
					  
					  $coursename=$_POST["branchcourse"];
					  
					  
					  
					  
	$sql="SELECT * FROM `tbl_branch` where branch_course='$coursename'";
	
	$sq=mysqli_query($con,$sql);
	
     while($row=mysqli_fetch_assoc($sq))
	 {
	 
					 $id1=$row['branch_id'];
					 
//echo"<tr><td>".$row['uni_id']."</td>";
			echo"<td>".$row['branch_name']."</td>";
	       
			echo"<td>".$row['branch_date']."</td>";
			
			
			
			
	
		?>	
					  
                                    
                          <td>
                           
                           <!-- <a href="course_study.php?action=edit&id=<?php echo $id1; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Study Now </a>-->
							 <!--<a href="univ_user_edit_body.php?action=viewuser&id=<?php echo $id1; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View Students </a></br>-->
                            <a href="user_study_course.php?action=delete&id=<?php echo $id1; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
						<?php
					 }
					 
				


?>
                       
                      </tbody>
					  
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		
</html>
</body>

<?php include('footer.php'); ?>

	