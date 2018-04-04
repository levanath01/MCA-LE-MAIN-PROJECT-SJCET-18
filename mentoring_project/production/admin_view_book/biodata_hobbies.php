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
  
  
  
  
    
		$sql11="SELECT hob_id FROM `tbl_mn_hobbies` WHERE `hob_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			  
           
           <th>SlNo</th>
            <th>Physical hobbies</th>
            <th>Adventurous hobbies</th>
            <th>Soft hobbies</th>
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_hobbies` WHERE `hob_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["hob_stud_id"];
				
				
			 echo"<tr>";
        echo"<td>#</td>";
            echo"<td>".$row['hob_phy']."</td>";
            echo"<td>".$row['hob_advent']."</td>";
           echo"<td>".$row['hob_soft']."</td>";
           
			 
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
	
				$hob_phy=$_POST["hob_phy"];
				$hob_advent=$_POST["hob_advent"];
				$hob_soft=$_POST["hob_soft"];
				
				
				
	


	
								
		
	$sqbio1="INSERT INTO `tbl_mn_hobbies`(`hob_stud_id`, `hob_phy`
	, `hob_advent`, `hob_soft`) VALUES ('$id','$hob_phy','$hob_advent','$hob_soft')"; 
	
	mysqli_query($con,$sqbio1);
	echo $sqbio1;
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_hobbies.php?action=edit&id=<?php echo $id; ?>"></a>
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
