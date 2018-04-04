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
				
				
		
				$faname=$row["faname"];
				$faprof=$row["faprof"];
				$faage=$row["faage"];
				$fapow=$row["fapow"];
				$famob=$row["famob"];
				
				
				
				
				$moname=$row["moname"];
				$moprof=$row["moprof"];
				$moage=$row["moage"];
				$mopow=$row["mopow"];
				$momob=$row["momob"];
						
				
				
				
				
				
				
				
				
				
				
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

   
   
   
     <?php include('biodata_section_sidebar.php'); ?>

    <div id="main">
        
        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
           
<form class="pure-form pure-form-stacked" action="" method="post">
    <h2 class="content-subhead">Parent Profile</h2>
			
		   
		   
    <fieldset>
	<input type="hidden" name="stuid" value="<?php echo $stid;?>" >   
        <legend>a.Fathers Details</legend>

        <label for="email">i.Name</label>
        <input id="email" type="text" placeholder=""name="faname"value="<?php echo $faname;?>">
       

        <label for="email">ii.Profession</label>
        <input id="email" type="text" placeholder=""name="faprof"value="<?php echo $faprof;?>">
		<label for="email">iii.Age</label>
        <input id="email" type="text" placeholder=""name="faage"value="<?php echo $faage;?>">
		<label for="email">iv.P.O.W</label>
        <input id="email" type="text" placeholder=""name="fapow"value="<?php echo $fapow;?>">
		<label for="email">v.Contact No.</label>
        <input id="email" type="text" placeholder=""name="famob"value="<?php echo $famob;?>">
		
		
		
		
		<legend>b.Mothers Details</legend>
		<label for="email"> i.Name</label>
        <input id="email" type="text" placeholder=""name="moname"value="<?php echo $moname;?>">
       

        <label for="email">ii.Profession</label>
        <input id="email" type="text" placeholder=""name="moprof"value="<?php echo $moprof;?>">
		<label for="email">iii.Age</label>
        <input id="email" type="text" placeholder=""name="moage"value="<?php echo $moage;?>">
		<label for="email">iv.P.O.W</label>
        <input id="email" type="text" placeholder=""name="mopow"value="<?php echo $mopow;?>">
		<label for="email">v.Contact No.</label>
        <input id="email" type="text" placeholder=""name="momob"value="<?php echo $momob;?>">
		
		
		
		

        


        
    </fieldset>




  


          <button type="submit"name="submit"  id="submit"class="pure-button pure-button-primary">Save</button>
   
</form>




<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
	
				$faname=$_POST["faname"];
				$faprof=$_POST["faprof"];
				$faage=$_POST["faage"];
				$fapow=$_POST["fapow"];
				$famob=$_POST["famob"];
				
				
				
				
				$moname=$_POST["moname"];
				$moprof=$_POST["moprof"];
				$moage=$_POST["moage"];
				$mopow=$_POST["mopow"];
				$momob=$_POST["momob"];

	


	
								
		
	$sqbio1="UPDATE `tbl_mn_biodata` SET `faname`='$faname',`faprof`='$faprof',`faage`='$faage',`fapow`='$famob',`famob`='$famob'
	,`moname`='$moname',`moprof`='$moprof',`moage`='$moage',`mopow`='$mopow',`momob`='$momob'
	 WHERE bio_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_parent.php?action=edit&id=<?php echo $stid; ?>"></a>
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
