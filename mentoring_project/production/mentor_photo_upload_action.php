
<?php include "connection.php"; ?>
<?php

session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;



$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
//if (file_exists($target_file)) {
   // echo "Sorry, file already exists.";
   // $uploadOk = 0;
//}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    //echo "Sorry, your file is too large.";
	
	
    $uploadOk = 0;
	?>
    <script>alert("File too large");
    document.location.href='mentor_photo_upload.php';
    </script>
    <?php
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	
    $uploadOk = 0;
	?>
    <script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed");
    document.location.href='mentor_photo_upload.php';
    </script>
    <?php
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
	
	?>
    <script>alert("Sorry, your file was not uploaded");
    document.location.href='mentor_photo_upload.php';
    </script>
    <?php
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		
		$username=$_SESSION['username'];
		
		//$file_name = $_FILES["fileToUpload"]["tmp_name"];
		
	$univ="UPDATE `tbl_mentor` SET `mentor_pic`='$target_file' WHERE mentor_uname='$username'"; 
	$r=mysqli_query($con,$univ);
		
		
		?>
    <script>alert("File was successfully uploaded");
    document.location.href='mentor_home.php';
    </script>
    <?php
		
    } else {
		?>
    <script>alert("Sorry, there was an error uploading your file");
    document.location.href='mentor_photo_upload.php';
    </script>
    <?php
        //echo "Sorry, there was an error uploading your file.";
    }
}







?>
