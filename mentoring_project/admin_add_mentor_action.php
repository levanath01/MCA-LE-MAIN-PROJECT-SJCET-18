<?php include "connection.php"; ?>
<?php

session_start();

$username=$_SESSION['username'];
$musrname=$_POST["mentoruname"];
$mname=$_POST["mentorname"];

$mpass=$_POST["mentorpass"];
$mbranch=$_POST["mentorbranch"];
$mdate=$_POST["mentorjdate"];
$maddrs=$_POST["mentoraddrs"];
$mstate=$_POST["mentorstate"];
$mcntry=$_POST["mentorcountry"];
$mpin=$_POST["mentorpin"];
$mcont=$_POST["mentorcontact"];

$m1mob="91".$mcont;	


$usql="select username from login where username='$musrname'";
 $res=mysqli_query($con,$usql);
//$res=mysql_query($usql);
$num=mysqli_num_rows($res);

if($num>0)
{
	?>
	<script>window.alert('Mentor already existing!!');
	location.href="admin_add_mentor.php";
	</script>
    <?php
}
else
{





		
		
		$sql_login="INSERT INTO login(user_type,username,password)VALUES('mentor','$musrname','$mpass')";

 mysqli_query($con,$sql_login);
		//$file_name = $_FILES["fileToUpload"]["tmp_name"];
		
		
		$crse="SELECT * FROM `tbl_branch` WHERE  branch_name='$mbranch'"; 
	$r=mysqli_query($con,$crse);
	
	
	
	 while($row=mysqli_fetch_assoc($r))
		{
		   
		
				
				$mcrse=$row["branch_course"];


		}
		
		
		
		
		
		
		
		
		
		$msqladd="INSERT INTO `tbl_mentor`(`mentor_name`, `mentor_uname`, `mentor_password`, `mentor_branch`,mentor_course,`mentor_date`, `mentor_address`, `mentor_state`, `mentor_country`, `mentor_pincode`, `mentor_contact`) VALUES ('$mname','$musrname','$mpass','$mbranch','$mcrse','$mdate','$maddrs','$mstate','$mcntry','$mpin','$m1mob');";
		 mysqli_query($con,$msqladd);
		
		
		
		
		
		
		
		
		
		
	
	


	?>
    <script>alert("Inserted Successfully");
    document.location.href='admin_add_mentor.php';
    </script>
    <?php


}





?>
