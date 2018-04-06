
 <?php include('mentoring_book_header.php'); ?>


 
 
 
 
 
 <?php
  
  
  
  					
			if(isset($_GET['action']))
{
	if($_GET['action']=='edit')
	{
	$id=$_GET['id'];
  
		
}
}
	
	
	
	
	
	

	
	
    ?>

 
 
 
  
 
  <script>
  function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
  </script>
 
 
 
 
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
           
<form class="pure-form pure-form-stacked" action="" method="post" enctype="multipart/form-data">
  <fieldset>

   <h2 class="content-subhead">Academic Details</h2>
			
			<table class="pure-table pure-table-horizontal">
        
           
	<?php
  
  
  
  
    
		$sql11="SELECT ac_id FROM `tbl_mn_academic` WHERE `ac_stud_id`='$id'";
		$r1= mysqli_query($con,$sql11);
		
		
		
		$row1 = mysqli_fetch_array($r1, MYSQLI_ASSOC) ;
		
		
		if($row1!="")
		{
		
		


			echo" <thead>
			<tr>
			     <th>Semester</th>
           <th> Mark Sheets</th>
           
         
			
			 		
        </tr>
    </thead>

    <tbody>";
	
			
			 
			
		
		
		$sql="SELECT * FROM `tbl_mn_academic` WHERE `ac_stud_id`='$id' ORDER BY ac_sem";
		$r= mysqli_query($con,$sql);
		
		
		
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["ac_stud_id"];
				$filetod=$row['ac_file'];
				
			 echo"<tr>";
			 ?>  <input type="hidden" value="<?php echo $filetod;?>" name="file_view">
			 <?php
     
            echo"<td>".$row['ac_sem']."</td>";
           // echo"<td>".$row['ac_file']."</td>";
           echo"<td>"; echo'<button type="submit" class="pure-button pure-button-primary" name="download" value="download Image">Click to download file</button>'; echo"</td>";
			 
			echo"</tr>";
		
		
		
		
		}
		    echo"</tbody>";

		
		}	
		else 
		{			
			
			echo"No data available";	
		
		}


	
   
	
       

  

 ?>
 
 </table>
 </fieldset>
 
  </form> 


 <br> 
 


	 

<br>


<?php


if(isset($_POST["submit"])) {
	
	
	$sem=$_POST["sem"];
$stid=$_POST["stid"];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image




		$sql111="SELECT ac_id FROM `tbl_mn_academic` WHERE `ac_stud_id`='$stid' AND`ac_sem`='$sem'";
		$r11= mysqli_query($con,$sql111);
		
		
		
		$row11 = mysqli_fetch_array($r11, MYSQLI_ASSOC) ;
		
		
		if($row11!="")
		{

	
	
	
		?>
    <a id="anch1" href="academic_upload.php?action=edit&id=<?php echo $stid; ?>"></a>
    <script>alert("Sem mark list already uploaded");
	
    document.getElementById("anch1").click();
    </script>
    <?php
	

		}
		
		else
		{
	
	
	// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
	
			
	$sqbio1="INSERT INTO `tbl_mn_academic`(`ac_stud_id`, `ac_file`, `ac_sem`) VALUES ('$stid','$target_file','$sem')"; 
	
	mysqli_query($con,$sqbio1);
	
		
		
		?>
    <a id="anch1" href="academic_upload.php?action=edit&id=<?php echo $stid; ?>"></a>
    <script>alert("Uploaded Successfully");
	
    document.getElementById("anch1").click();
    </script>
    <?php
	
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

	
		}	
		




}
?>




<?php


if(isset($_POST["download"])) {

$target=$_POST["file_view"];



$_SESSION['varname'] =$target;?>

 
 <iframe src="pdf.php" height="10px" width="10px">
 
</iframe>


    <a id="anch1" href="academic_upload.php?action=edit&id=<?php echo $stid; ?>"></a>
    <script>alert("File Download will start now");
	
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
