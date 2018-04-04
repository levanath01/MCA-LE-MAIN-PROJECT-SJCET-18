<?php include('connection.php'); ?>
<?php
if(isset($_POST) & !empty($_POST)){
	$username=$_POST["username"];
	//$username = mysqli_real_escape_string($con, $_POST['username']);
	$sql = "select * from login where username='$username'";
	$res = mysqli_query($con,$sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		//echo "Send email to user with password";
		$r = mysqli_fetch_assoc($res);
$password = $r['password'];
$to = $r['username'];
$subject = "Your Recovered Password";

$message = "Please use this password to login " . $password;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
if(mail($to,$subject,$message, $headers)){
	
	?>
        <script>
        window.alert('Your Password has been sent to your email id');
		location.href="login.php";
		</script>
        <?php
	
	//echo "Your Password has been sent to your email id";
}else{
	?>
        <script>
        window.alert('Failed to Recover your password, try again');
		//location.href="forgot_password.php";
		</script>
        <?php
	
	//echo "Failed to Recover your password, try again";
}
		
		
		
	}else{
		
		?>
        <script>
        window.alert('User name does not exist in database');
		location.href="forgot_password.php";
		</script>
        <?php
		//echo "User name does not exist in database";
	}
}


?>