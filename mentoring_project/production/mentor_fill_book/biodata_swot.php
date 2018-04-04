
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
           
<form class="pure-form pure-form-stacked" action="" method="post" enctype="multipart/form-data">
    

 	<?php




$sql="SELECT * FROM `tbl_mn_annex1` WHERE `an_stud_id`='$id'";
		$r= mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($r))
		{  $stid=$row["an_stud_id"];
				
				
					
				
				
				$swot_file=$row["swot_file"];
				
				

					
				
				
				
				
		}
}
}
	
    ?>
	

<fieldset>	
<br>
<input type="hidden" value="<?php echo $swot_file;?>" name="file_view">

 <h2 class="content-subhead"> Mentees own SWOT Analysis from ANNEXURE1</h2>

 
 
      
                         
 </fieldset>
 		   
		   
		 

 

<br>

  
	 <button type="submit" class="pure-button pure-button-primary" name="submit" value="Upload Image">Click to download SWOT file</button>				 

      
   
</form>

 <br> 
 

	 

<br>


<?php


if(isset($_POST["submit"])) {

$target=$_POST["file_view"];



$_SESSION['varname'] =$target;?>

 
 <iframe src="pdf.php" height="10px" width="10px">
 
</iframe>


    <a id="anch1" href="biodata_swot.php?action=edit&id=<?php echo $stid; ?>"></a>
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
