



<?php include('connection.php'); ?>




  <?php
if(isset($_GET['action']))
{
	if($_GET['action']=='delete')
	{
	$id=$_GET['id'];
	
	
	
	
		
		
	
	
	//login tbl delete
	$univ_uname="SELECT student_name FROM `tbl_studentreg` WHERE `student_id`='$id'"; 
	$result=mysqli_query($con,$univ_uname);
	
				
	$value = mysqli_fetch_assoc($result);
	
	
	$value1=$value["student_name"];
	
	
	
	
	
	//$r=mysqli_query($con,$univ_uname);
	//$row=mysqli_fetch_array($r,MYSQLI_NUM);
	//$log=$row[0];
	
	$sq3="DELETE FROM `tbl_past_mentor` WHERE past_stud='$value1'";
	mysqli_query($con,$sq3);
	$sq3="DELETE FROM `tbl_mentor_schdle` WHERE schdle_stud_name='$value1'";
	mysqli_query($con,$sq3);
	
	$sq3="DELETE FROM `tbl_studentreg` WHERE student_id='$id'";
	mysqli_query($con,$sq3);
	
	$sq3="DELETE FROM `tbl_mn_biodata` WHERE bio_stud_id='$id'";
	mysqli_query($con,$sq3);
	
	$sq3="DELETE FROM `tbl_mn_annex1` WHERE an_stud_id='$id'";
	mysqli_query($con,$sq3);
	
	$sq3="DELETE FROM `tbl_mn_language` WHERE lang_stud_id='$id'";
	mysqli_query($con,$sq3);
	$sq3="DELETE FROM `tbl_mn_log` WHERE logg_stud_id='$id'";
	mysqli_query($con,$sq3);
	$sq3="DELETE FROM `tbl_mn_objectiveimpr` WHERE obj_stud_id='$id'";
	mysqli_query($con,$sq3);
	
	
	
	
			
echo '<script language="javascript">';
echo 'alert("Mentee Successfuly Deleted ")';
echo '</script>';

	
	
		
	
	
	
	
	}
}




?>
	 
					 
					  
		  
					  









<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
<?php include('mentor_sidebar.php'); ?>
 <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">














  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Department Students <small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Adm No.</th>
                          <th>Name</th>
                          <th>Branch</th>
                          
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
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
					  
					  
                        <tr>
                          <td><?php echo $sadmno;  ?></td>
                          <td><?php echo $sname;  ?></td>
                          <td><?php echo $sbranch;  ?></td>
                          
						  <td>  <a href="mentor_user_profile_view.php?action=edit&id=<?php echo $id2; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View Profile </a>
						   <a onclick="return confirm('Are you sure to delete mentee?')" href="mentor_user_profile_list.php?action=delete&id=<?php echo $id2; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a></td>
                        </tr>
							  
			
  
                        <?php    
                                }
	
		?>	
                     
  
  </tbody>
                    </table>
                  </div>
                </div>
              </div>

             
              

              
					
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
	 <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>