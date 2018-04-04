 
 
 <?php include "connection.php"; ?>
 
 <?php
 session_start();
 
 
 $admnum = $_SESSION['varname'];
 
		 $crse1="SELECT * FROM `tbl_studentreg` WHERE  student_admno='$admnum'"; 
	$r1=mysqli_query($con,$crse1);
	
	
	
	 while($row=mysqli_fetch_assoc($r1))
		{
		   
		
				$s_id=$row["student_id"];
				


		}
		 
		
		
		
		$sql_bio="INSERT INTO tbl_mn_biodata(bio_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_bio);
 
		$sql_lan="INSERT INTO `tbl_mn_language`(`lang_stud_id`)VALUES('$s_id')";

 mysqli_query($con,$sql_lan);
 
 
 
		
		
		$sql_annex1="INSERT INTO tbl_mn_annex1(an_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_annex1);
 
 
 
 
		$sql_obj1="INSERT INTO tbl_mn_objectiveimpr(obj_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_obj1);
 
 
		$sql_script="INSERT INTO tbl_mn_scriptgoal(sc_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_script);
 
 
 	$sql_core="INSERT INTO tbl_mn_career(car_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_core);
 
 
 
 
 	$sql_s1="INSERT INTO tbl_mn_s1skill(s1_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_s1);
 
 	$sql_s2="INSERT INTO tbl_mn_s2skill(s2_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_s2);
 
 	$sql_s3="INSERT INTO tbl_mn_s3skill(s3_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_s3);
 
 	$sql_s4="INSERT INTO tbl_mn_s4skill(s4_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_s4);
 
 	$sql_s5="INSERT INTO tbl_mn_s5skill(s5_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_s5);
 
 	$sql_s6="INSERT INTO tbl_mn_s6skill(s6_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_s6);
 
 	$sql_s7="INSERT INTO tbl_mn_s7skill(s7_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_s7);
 
 	$sql_s8="INSERT INTO tbl_mn_s8skill(s8_stud_id)VALUES('$s_id')";

 mysqli_query($con,$sql_s8);
 
 
 
 
 
 
 
 
 
 
 
 
 //$sql_annex2="INSERT INTO tbl_mn_annex2(annex2_stud_id)VALUES('$s_id')";

 //mysqli_query($con,$sql_annex2);
 
 //$sql_annex3="INSERT INTO tbl_mn_annex3(annex3_stud_id)VALUES('$s_id')";

 //mysqli_query($con,$sql_annex3);
 
 
 
// $_SESSION['varname1'] =$s_id;
 
 
 ?>
    <script>
    document.location.href='mentor_home.php';
    </script>
    
	
	
		