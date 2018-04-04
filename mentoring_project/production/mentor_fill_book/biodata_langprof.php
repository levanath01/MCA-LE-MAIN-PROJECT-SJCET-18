

 <?php include('mentoring_book_header.php'); ?>


 
 
 
 
 
 <?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
		$sql="SELECT * FROM `tbl_mn_language` WHERE `lang_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["lang_stud_id"];
				
				
				
				
				
		
				
				
				$engspeak=$row["engspeak"];
				$engread=$row["engread"];
				$engwrite=$row["engwrite"];
				$engcert=$row["engcert"];
				
				$hinspeak=$row["hinspeak"];
				$hinread=$row["hinread"];
				$hinwrite=$row["hinwrite"];
				$hincert=$row["hincert"];
				
				
				$malspeak=$row["malspeak"];
				$malread=$row["malread"];
				$malwrite=$row["malwrite"];
				$malcert=$row["malcert"];
				
				

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
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
    

      

		   

		  

		   
		   
		   
		   
		





		

	   

 
 
 

 
 
 <h2 class="content-subhead">Language proficiency</h2>	
		<fieldset>
		<input type="hidden" name="stuid" value="<?php echo $stid;?>" >   
<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th>Language</th>
            <th>Speak</th>
			 <th>Read</th>
			  <th>Write</th>
            <th>Certifications in Language</th>
             <th>Status</th>
			
			
			
        </tr>
    </thead>

    <tbody>
        <tr>
           <td>English </td>
            
            <td> <label for="option-one" class="pure-checkbox">
        <input id="option-one" type="checkbox" value="Speak"name="engspeak">
        
    </label></td>
	<td> <label for="option-one" class="pure-checkbox">
        <input id="option-one" type="checkbox" value="Read"name="engread">
        
    </label></td>
	<td> <label for="option-one" class="pure-checkbox">
        <input id="option-one" type="checkbox" value="Write"name="engwrite">
        
    </label></td>
            <td><input id="email" type="text" placeholder=""name="engcert"></td>
			<td> <label for="option-one" class="pure-checkbox"><?php echo $engspeak." ".$engread." ".$engwrite;?>
       
        
    </label></td>
        </tr>

        <tr>
           <td>Hindi</td>
            <td> <label for="option-one" class="pure-checkbox">
        <input id="option-one" type="checkbox" value="Speak"name="hinspeak">
        
    </label></td>
	<td> <label for="option-one" class="pure-checkbox">
        <input id="option-one" type="checkbox" value="Read"name="hinread">
        
    </label></td>
	<td> <label for="option-one" class="pure-checkbox">
        <input id="option-one" type="checkbox" value="Write"name="hinwrite">
        
    </label></td>
            <td><input id="email" type="text" placeholder=""name="hincert"></td>
           <td> <label for="option-one" class="pure-checkbox"><?php echo $hinspeak." ".$hinread." ".$hinwrite;?>
       
        
    </label></td>
        </tr>
		 <tr>
           <td>Malayalam</td>
            <td> <label for="option-one" class="pure-checkbox">
        <input id="option-one" type="checkbox" value="Speak"name="malspeak">
        
    </label></td>
	<td> <label for="option-one" class="pure-checkbox">
        <input id="option-one" type="checkbox" value="Read"name="malread">
        
    </label></td>
	<td> <label for="option-one" class="pure-checkbox">
        <input id="option-one" type="checkbox" value="Write"name="malwrite">
        
    </label></td>
            <td><input id="email" type="text" placeholder=""name="malcert"></td>
            <td> <label for="option-one" class="pure-checkbox"><?php echo $malspeak." ".$malread." ".$malwrite;?>
       
        
    </label></td>
        </tr>
		
		 
		

       
		
    </tbody>
</table>
 </fieldset>



 
 
 
 
 

 
		
		


























<br>

  


        <button type="submit" class="pure-button pure-button-primary" name="submit" id="submit">Save</button>
   
</form>




<?php		   
if(isset($_POST["submit"])) {
	
	
	$stid=$_POST["stuid"];
				
				
				
				
				
				
				
				
				
				$engspeak=$_POST["engspeak"];
				$engread=$_POST["engread"];
				$engwrite=$_POST["engwrite"];
				$engcert=$_POST["engcert"];
				
				$hinspeak=$_POST["hinspeak"];
				$hinread=$_POST["hinread"];
				$hinwrite=$_POST["hinwrite"];
				$hincert=$_POST["hincert"];
				
				
				$malspeak=$_POST["malspeak"];
				$malread=$_POST["malread"];
				$malwrite=$_POST["malwrite"];
				$malcert=$_POST["malcert"];
				
	
	
	
	
	
	
		
	$sqbio1="UPDATE `tbl_mn_language` SET 
	`engspeak`='$engspeak',`engread`='$engread',`engwrite`='$engwrite',`engcert`='$engcert'
	,`hinspeak`='$hinspeak',`hinread`='$hinread',`hinwrite`='$hinwrite',`hincert`='$hincert'
	,`malspeak`='$malspeak',`malread`='$malread',`malwrite`='$malwrite',`malcert`='$malcert' WHERE lang_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
	
	
	
	
	?>
	
	<a id="anch1" href="biodata_langprof.php?action=edit&id=<?php echo $stid; ?>"></a>
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
