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

   <h2 class="content-subhead">Accomodation Details</h2>
			
			<table class="pure-table pure-table-horizontal">
        
           
	<?php
  
  
  
  
    
		$sql11="SELECT extra_id FROM `tbl_mn_extracurricul` WHERE `extra_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			  
           <th>Cultural activities/Sports/scholarships/Leadership roles</th>
            <th>Level of recognition (state/district/university/school)</th>
            <th>Year</th>
            <th>Remarks</th>
			
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_extracurricul` WHERE `extra_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["extra_stud_id"];
				
				
			 echo"<tr>";
       
            echo"<td>".$row['culact']."</td>";
            echo"<td>".$row['lvlrecog']."</td>";
           echo"<td>".$row['actyear']."</td>";
            echo"<td>".$row['actrmrk']."</td>";
			 
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
	
	
	//$stid=$_POST["stuid"];
	
				$culact=$_POST["culact"];
				$lvlrecog=$_POST["lvlrecog"];
				$actyear=$_POST["actyear"];
				$actrmrk=$_POST["actrmrk"];
				
				
	


	
								
		
	$sqbio1="INSERT INTO `tbl_mn_extracurricul`(`extra_stud_id`, `culact`, `lvlrecog`, `actyear`, `actrmrk`) VALUES (
	'$id','$culact','$lvlrecog','$actyear','$actrmrk')"; 
	
	mysqli_query($con,$sqbio1);
	echo $sqbio1;
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_accomo.php?action=edit&id=<?php echo $id; ?>"></a>
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
