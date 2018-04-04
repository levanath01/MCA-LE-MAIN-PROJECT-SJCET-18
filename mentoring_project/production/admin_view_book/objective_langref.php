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

    
	
	
	
	  <?php include('objective_impr_sidebar.php'); ?>

    <div id="main">
      

        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
		   
		   
		   
	




		   
	<br>	   
 
 

    
			
<form class="pure-form pure-form-stacked" action="" method="post">

 <fieldset>

   <h2 class="content-subhead">Details of Referral to language lab</h2>
			
			<table class="pure-table pure-table-horizontal">
        
           
	<?php
  
  
  
  
    
		$sql11="SELECT lang_id FROM `tbl_mn_langreferral` WHERE `lang_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			  
           <th>Sl.No</th>
            <th>Referral to language lab</th>
            <th>Remarks by English communication faculity</th>
           
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_langreferral` WHERE `lang_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["ach_stud_id"];
				
				
			 echo"<tr>";
       
            echo"<td>#</td>";
            echo"<td>".$row['lang_ref']."</td>";
			 echo"<td>".$row['lang_ref_rmrk']."</td>";
			
         
			 
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
	
				$lang_ref=$_POST["lang_ref"];
				$lang_ref_rmrk=$_POST["lang_ref_rmrk"];
				
				
	


	
								
		
	$sqbio1="INSERT INTO `tbl_mn_langreferral`(`lang_stud_id`lang_ref`, `lang_ref_rmrk`) VALUES ('$id','$lang_ref','$lang_ref_rmrk')"; 
	
	mysqli_query($con,$sqbio1);
	echo $sqbio1;
	
	
	
	
	?>
	
	<a id="anch1" href="objective_langref.php?action=edit&id=<?php echo $id; ?>"></a>
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
