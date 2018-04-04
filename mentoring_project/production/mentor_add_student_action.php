<?php include "connection.php"; ?>
<?php

session_start();


$username=$_SESSION['username'];
$sname=$_POST["stdname"];
$sadmno=$_POST["stdadmno"];
//$fileupload=$_POST["fileToUpload"];
$srno=$_POST["stdrno"];
$sdate=$_POST["stddate"];
$smob=$_POST["stdmob"];
$_SESSION['varname'] = $sadmno;

$usql="select * from tbl_studentreg where student_admno='$sadmno'";
 $res=mysqli_query($con,$usql);
//$res=mysql_query($usql);
$num=mysqli_num_rows($res);

if($num>0)
{
	?>
	<script>window.alert('Student already existing!!');
	location.href="mentor_add_student.php";
	</script>
    <?php
}
else
{

	
		
		

$crse="SELECT * FROM `tbl_mentor` WHERE  mentor_uname='$username'"; 
	$r=mysqli_query($con,$crse);
	
	
	
	 while($row=mysqli_fetch_assoc($r))
		{
		   
		
				$s_mnid=$row["mentor_id"];
				$sbranch=$row["mentor_branch"];
				$scourse=$row["mentor_course"];
                $smname=$row["mentor_name"];

		}
		
	



//$target_dir = "uploads/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$uploadOk = 1;



//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    
	
		
	//$univ="UPDATE `tbl_studentreg` SET `student_photo`='$target_file' WHERE student_id='$id5'"; 
	//$r=mysqli_query($con,$univ);
		
	$s1mob="91".$smob;	
		


$msqladd="INSERT INTO `tbl_studentreg`(`student_mentorid`, `student_name`, `student_branch`, `student_course`, `student_roll`, `student_admno`, `student_adate`,student_mob,student_mnname) VALUES ('$s_mnid','$sname','$sbranch','$scourse','$srno','$sadmno','$sdate','$s1mob','$smname');";
		 mysqli_query($con,$msqladd);
		 
		 
		 

		 
		 
		
			


	?>
    <script>alert("Inserted Successfully");
    document.location.href='student_annexure_reg.php';
    </script>
    <?php


}





?>






