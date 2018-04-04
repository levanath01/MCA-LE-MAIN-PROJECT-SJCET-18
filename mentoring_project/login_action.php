    <?php include('connection.php'); ?>
<?php
session_start();


$username=$_POST["username"];
$password=$_POST["password"];


$sql="select * from login where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
$num_row=mysqli_num_rows($result);
if($num_row==1)
{
	$row=mysqli_fetch_assoc($result);
	$_SESSION['uid']=$row['log_id'];
	if($row['user_type']=='admin')
	{
		$_SESSION['username']=$username;
		

		header('location:./production/admin_home.php');
		exit();
	}
	else if($row['user_type']=='mentor')
	{
		$_SESSION['username']=$username;
		
		header('location:./production/mentor_home.php');
		exit();
	}
	else if($row['user_type']=='user')
	{
		$_SESSION['username']=$username;
		header('location:./production/user_home.php');
	exit();
	}
}
	else
	{
		?>
        <script>
        window.alert('No Such User Found...Please Register');
		location.href="index.php";
		</script>
        <?php
	}
?>

