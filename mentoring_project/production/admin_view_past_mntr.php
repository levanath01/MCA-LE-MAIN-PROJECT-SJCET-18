<?php include('first.php'); ?>


<?php include('admin_sidebar.php'); ?>
<?php include('connection.php');
 


?>




<html>
<body>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>University List</h3>
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
						  <th>Student Name</th>
						  <th>Branch</th>
                          <th >Past Mentor</th>
                          <th>New Mentor</th>
                           <th>Changed on</th>
                         
                        </tr>
                      </thead>
                      <tbody>
					  
					  
					  <?php
					 
	$sql="SELECT * FROM tbl_past_mentor ORDER BY past_cdate";
	$sq=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($sq))
	 {
	 
					
					 
//echo"<tr><td>".$row['uni_id']."</td>";
			echo"<td>".$row['past_stud']."</td>";
				echo"<td>".$row['past_dept']."</td>";
	        echo"<td>".$row['past_ment']."</td>";
			echo"<td>".$row['past_newment']."</td>";
			echo"<td>".$row['past_cdate']."</td>";
			
			
			
	
		?>	
					  
                         
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

	