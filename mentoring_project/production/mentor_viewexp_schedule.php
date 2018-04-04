
<?php include('first.php'); ?>
<?php include('connection.php'); ?>

<?php include('mentor_sidebar.php'); ?>




<?php

$username=$_SESSION['username'];		 
								 $crse="SELECT * FROM `tbl_mentor` WHERE  mentor_uname='$username'"; 
	$r=mysqli_query($con,$crse);
	
	
	
	 while($row=mysqli_fetch_assoc($r))
		{
		   
		
				$st_mnid=$row["mentor_id"];
				


		}
	


?>

  

<body>

<div class="container body">
 <div class="right_col" role="main">

<div class="col-md-8 col-sm-8 col-xs-12">
		 
					 
			
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Expired Mentoring Schedule <small></small></h2>
                      
                      <div class="clearfix"></div>
                    </div>
					
					
			
                    <div class="x_content">

					
					
					
					<?php
						  
						  //$mentorcourse=$_POST["mntrcourse"];
		//$todayd=date("Y/m/d");				  
						  
	$sql="SELECT * FROM `tbl_mentor_schdle` where schdle_mntr_id='$st_mnid' ORDER BY schdle_date DESC";
	$sq=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($sq))
	 {
	 
					$shid=$row['schdle_id'];
					$shname=$row['schdle_stud_name'];
					$shdate=$row['schdle_date'];
					 

					 
					 
					
					
					
					
					
					
					
					$date = date('Y/m/d H:i:s');
					
					
					 if(strtotime($shdate)<strtotime($date))
	 {
		 
		


			

$date = $shdate;
$d = date_parse_from_format("Y-m-d", $date);
 $monthNum=$d["month"];
                 
 
$monthName = date('F', mktime(0, 0, 0, $monthNum, 10));


		
		 ?>
						
                        
	             
                         
								
					
                      <article class="media event">
                      <a class="pull-left date">
                        <p class="month"><?php echo $monthName; ?>  </p>
                        <p class="day"><?php echo $d["day"]; ?> </p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#"><br></a>
                        <p>Name:<b><?php echo $shname ?></b></p>
                      </div>
                    </article>
					
					                        				 
	<?php				 
					 
	 }	
else{
?>
<h2></h2>

<?php

}	
					 
			
			
	 }
	 
	
		?>
					
                    </div>
                  </div>
                </div>
                <!-- End to do list -->		 
					 
					 
					 
					 
					 
					 
					 
	



                
				
				</div></div></div>
				
				
				</body>
				
				
				
				
				
				
				
				
				
				<?php include('footer.php'); ?>