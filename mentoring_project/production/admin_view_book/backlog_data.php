<?php include('mentoring_book_header.php'); ?>
 
 
 
 
 <?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
		$sql="SELECT * FROM `tbl_mn_biodata` WHERE `bio_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["bio_stud_id"];
				
				
		
				$faname=$row["back_logs"];
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		}
}
}
	
    ?>

<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

   
   
   
     <?php include('academic_sidebar.php'); ?>

    <div id="main">
        
        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
           
<form class="pure-form pure-form-stacked" action="" method="post">
    <h2 class="content-subhead">Current backlogs</h2>
			
		   
		   
    <fieldset>
	<input type="hidden" name="stuid" value="<?php echo $stid;?>" >   
        

        <label for="email">Current Back log no.</label>
        <input id="email" type="text" placeholder=""name="faname"value="<?php echo $faname;?>" readonly=readonly;>
       

        

        


        
    </fieldset>




  


         
   
</form>




<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
	
				$faname=$_POST["faname"];
				

	


	
								
		
	$sqbio1="UPDATE `tbl_mn_biodata` SET `back_logs`='$faname'
	 WHERE bio_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	
	?>
	
	<a id="anch1" href="backlog_data.php?action=edit&id=<?php echo $stid; ?>"></a>
    <script>alert("Saved Successfully");
	
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
