
 <?php include('mentoring_book_header.php'); ?>


 
 
 
 
 
 <?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
		$sql="SELECT * FROM `tbl_mn_annex1` WHERE `an_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["an_stud_id"];
				
				
					
				
				
				$swot_file=$row["swot_file"];
				
				

					
				
				
				
				
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

  
  
  
  
  <?php include('ann1_sidebar.php'); ?>

    <div id="main">
       
        <div class="content">
           <!-- <h2 class="content-subhead">How to use this layout</h2>-->
           
<form class="pure-form pure-form-stacked" action="" method="post" enctype="multipart/form-data">
    

 		  

<fieldset>	
  <label for="email">Mentees own SWOT Analysis(File upload)</label>
 
 
       <input type="file" name="fileToUpload" id="fileToUpload" >
                         
 </fieldset>
 		   
		   
		 

 

<br>

  
	 <button type="submit" class="pure-button pure-button-primary" name="submit" value="Upload Image">Save</button>				 

      
   
</form>

 <br> 
 


	 

<br>


<?php


if(isset($_POST["submit"])) {

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
		
			
	$sqbio1="UPDATE `tbl_mn_annex1` SET `swot_file`='$target_file' WHERE an_stud_id='$stid'"; 
	
	mysqli_query($con,$sqbio1);
	
		
		
		?>
    <a id="anch1" href="biodata_swot.php?action=edit&id=<?php echo $stid; ?>"></a>
    <script>alert("Uploaded Successfully");
	
    document.getElementById("anch1").click();
    </script>
    <?php
	
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}







}
?>












		

		   
		   
		   
		   
		   
		   
        </div>
    </div>
</div>



<script src="js/ui.js"></script>

</body>
</html>
