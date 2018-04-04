 
 
 <?php include('connection.php'); ?>
 
 <?php session_start();
 
 $uid=$_SESSION['uid'];
  $username=$_SESSION['username'];
  
  $newpass=$_POST["newPassword"];
  $sql="UPDATE `login` SET `password`='$newpass' WHERE username='$username'";
  mysqli_query($con,$sql);
  
  
 
	?>
    <script>alert("Password Updated Successfully");
    document.location.href='admin_home.php';
    </script>
    <?php




?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>