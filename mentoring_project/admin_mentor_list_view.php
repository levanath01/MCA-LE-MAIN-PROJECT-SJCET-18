



<?php include('connection.php'); ?>

<?php
if(isset($_GET['action']))
{
	if($_GET['action']=='delete')
	{
	$id=$_GET['id'];
	
	
	
	$sql11="SELECT student_id FROM `tbl_studentreg` WHERE `student_mentorid`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
echo '<script language="javascript">';
echo 'alert("Unable to delete mentor as he/she has active mentees")';
echo '</script>';

		
		}
		else
		{
	
	
	//login tbl delete
	$univ_uname="SELECT `mentor_uname` FROM `tbl_mentor` WHERE mentor_id='$id'"; 
	$result=mysqli_query($con,$univ_uname);
	
				
	$value = mysqli_fetch_assoc($result);
	
	
	$value1=$value["mentor_uname"];
	
	
	
	
	
	//$r=mysqli_query($con,$univ_uname);
	//$row=mysqli_fetch_array($r,MYSQLI_NUM);
	//$log=$row[0];
	
	
	$sq3="DELETE FROM `login` WHERE username='$value1'";
	mysqli_query($con,$sq3);
	
	$sq3="DELETE FROM `tbl_mentor` WHERE mentor_uname='$value1'";
	mysqli_query($con,$sq3);
	
			
echo '<script language="javascript">';
echo 'alert("Mentor Successfuly Deleted ")';
echo '</script>';

	
	
		}
	
	
	
	
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
<?php include('admin_sidebar.php'); ?>
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
                    <h2>Department Mentors <small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         
                          <th>Name</th>
                          <th>Branch</th>
                          
                          <th>Joined On</th>
						  <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
					  
					  
				  <?php
					 
	$sql="SELECT * FROM tbl_mentor where mentor_branch='MCA Regular'OR'MCA Lateral'";
	$sq=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($sq))
	 {
	 
					 $id1=$row['mentor_id'];
					 
//echo"<tr><td>".$row['uni_id']."</td>";

			echo"<td>".$row['mentor_name']."</td>";
	        echo"<td>".$row['mentor_branch']."</td>";
			echo"<td>".$row['mentor_date']."</td>";
			
			
			
			
	
		?>	
					  
                                    
                          <td>
						  <a href="admin_mentor_profile_view.php?action=view&id=<?php echo $id1;?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> View Profile </a>
						  
                           <a onclick="return confirm('Are you sure to delete mentee?')" href="admin_mentor_list_view.php?action=delete&id=<?php echo $id1; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                           
                          </td>
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