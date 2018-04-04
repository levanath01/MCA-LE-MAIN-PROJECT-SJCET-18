<?php
include('connection.php');
//$con=mysqli_connect("localhost","16lemca026","10","16lemca026");

//$con=mysqli_connect("localhost","16lemca026","10","16lemca026");

$brname=$_POST["branchname"];
$brcourse=$_POST["branchcourse"];
$brdate=$_POST["branchdate"];
//$username=$_POST["uname"];
//$password=$_POST["upassword"];


$usql="select branch_name from tbl_branch where branch_name='$brname'";
 $res=mysqli_query($con,$usql);
//$res=mysql_query($usql);
$num=mysqli_num_rows($res);

if($num>0)
{
	?>
	<script>window.alert('Branch already exists!!');
	location.href="admin_add_dept.php";
	</script>
    <?php
}
else
{
  $sql_branch="INSERT INTO tbl_branch(branch_name,branch_course,branch_date)VALUES('$brname','$brcourse','$brdate')";

 mysqli_query($con,$sql_branch);
// $uid=mysql_insert_id();
 


	?>
    <script>alert("Inserted Successfully");
    document.location.href='admin_add_dept.php';
    </script>
    <?php


}

?>