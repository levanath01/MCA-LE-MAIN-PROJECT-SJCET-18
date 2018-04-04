<?php include('mentoring_book_header.php'); ?>
 
 
 <?php
 
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
 
 ?>
 
 
	
	
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    
	
	
	
	  <?php include('biodata_section_sidebar.php'); ?>

    <div id="main">
      

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
		   
	




		   
	<br>	   
 
 

    
			
<form class="pure-form pure-form-stacked" action="" method="post">

 <fieldset>

   <h2 class="content-subhead">Local Guardian Details</h2>
			
			<table class="pure-table pure-table-horizontal">
        
           
	<?php
  
  
  
  
    
		$sql11="SELECT local_id FROM `tbl_mn_localguardian` WHERE `local_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			  
            <th>Name</th>
            <th>Profession</th>
            <th>Age</th>
			<th>Place of work</th>
			<th>Contact no.</th>
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_localguardian` WHERE `local_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["local_stud_id"];
				
				
			 echo"<tr>";
       
            echo"<td>".$row['local_name']."</td>";
            echo"<td>".$row['local_prof']."</td>";
           echo"<td>".$row['local_age']."</td>";
            echo"<td>".$row['local_pow']."</td>";
			  echo"<td>".$row['local_addr']."</td>";
			    echo"<td>".$row['local_mob']."</td>";
			echo"</tr>";
		
		
		
		
		}
		    echo"</tbody>";

		
		}	
		else
		{			
			
			echo"No data available";	
		
		}
}
}
	
   
	
       

  

 ?>
 
 </table>
 </fieldset>



		
	
  


        
   



















	
		   
		<br>   
		   
	 
		   
	
	
</form>	
		   


<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
	
				$local_name=$_POST["localname"];
				$local_age=$_POST["localprof"];
				$local_status=$_POST["localage"];
				$local_pow=$_POST["localpow"];
				$local_addr=$_POST["localaddr"];
				$local_mob=$_POST["localmob"];
				
	


	
								
		
	$sqbio1="INSERT INTO `tbl_mn_localguardian`(`local_stud_id`, `local_name`, `local_prof`, `local_age`
	, `local_pow`, `local_addr`, `local_mob`) VALUES ('$id','$local_name','$local_age','$local_status','$local_pow','$local_addr','$local_mob')"; 
	
	mysqli_query($con,$sqbio1);
	echo $sqbio1;
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_localguardian.php?action=edit&id=<?php echo $id; ?>"></a>
    <script>alert("Inserted Successfully");
	
    document.getElementById("anch1").click();
    </script>
    <?php

	
	
	
	
}
?>



	   
		   
		   
        </div>
    </div>
</div>




<script src="js/ui.js"></script>

</body>
</html>
