<?php include('first.php'); ?>
<?php include('mentor_sidebar.php');
//session_start();
include('connection.php');

			
			if(isset($_GET['action']))
{
	if($_GET['action']=='upload')
	{
	$id5=$_GET['id'];
  
		//$sql="SELECT * FROM `tbl_studentreg` WHERE `student_id`='$id'";
		//$r= mysqli_query($con,$sql);
		//while($row=mysqli_fetch_assoc($r))
		//{  $stid=$row["student_id"];
				
				
				
		//}
}
}


?>






<!-- page content -->
       <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Upload Photo</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					
					<form action="" method="post" enctype="multipart/form-data">
					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Choose picture to upload <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="fileToUpload" id="fileToUpload"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					 <input type="submit" value="Upload Image" name="submit">
					</form>
					
                    
                  </div>
                </div>
              </div>
        </div>    </div>
        <!-- /page content -->


    <?php


if(isset($_POST["submit"])) {

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
		
			
	$univ="UPDATE `tbl_studentreg` SET `student_photo`='$target_file' WHERE student_id='$id5'"; 
	$r=mysqli_query($con,$univ);
		
		
		
		?>
    <script>alert("File was successfully uploaded");
    document.location.href='mentor_home.php';
    </script>
    <?php
	
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}







}
?>
		
      













 
<?php include('footer.php'); ?>