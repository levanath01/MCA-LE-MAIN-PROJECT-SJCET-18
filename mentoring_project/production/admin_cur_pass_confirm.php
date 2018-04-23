 
 
 <?php include('connection.php'); ?>
 
 <?php session_start();
 
 $uid=$_SESSION['uid'];
  $username=$_SESSION['username'];
  
  $curpass=$_POST["currentPassword"];
  
  
  
									 $sqlstd="SELECT * FROM login where username='$username'"; 
	$result=mysqli_query($con,$sqlstd);
	
				
	$value = mysqli_fetch_assoc($result);
	
	
	$hash=$value["password"];
	

if (password_verify($curpass, $hash)) {
    
?>
    <script>//alert("Password Updated Successfully");
    document.location.href='admin_change_pass.php';
    </script>
    <?php	
  
}
else
{
	

	?>
    <script>alert("Invalid password");
    document.location.href='admin_cur_pass.php';
    </script>
    <?php

}


?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>