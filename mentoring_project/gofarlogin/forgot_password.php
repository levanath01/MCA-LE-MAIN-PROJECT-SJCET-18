<?php include('connection.php');

session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <!-- TITLE -->
    <title>Gofar</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/awe-booking-font.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    
    <!-- CSS COLOR -->
    <link id="colorreplace" rel="stylesheet" type="text/css" href="css/colors/blue.css">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->



 
        
        <!-- HEADER PAGE 
        <header id="header-page">
            <div class="header-page__inner">
                <div class="container">
                     LOGO 
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                     END / LOGO 
                    
                  

                     TOGGLE MENU RESPONSIVE 
                    <a class="toggle-menu-responsive" href="#">
                        <div class="hamburger">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                    </a>
                     END / TOGGLE MENU RESPONSIVE
                </div>
            </div>
        </header>
        END / HEADER PAGE -->
        
        <section class="">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register-page__content">
                     <div class="content-title">
                        <span>Hi There!</span>
                        <h2>Welcome Back</h2>
                    </div>
                    <form action="" method="post">
                        <div class="form-item">
                            <label>Enter your Username/Email</label>
                            <input type="email" name="username" required>
							
                                   <div class="form-actions">
                            <input type="submit" value="Click to send OTP" name="submit">
                        </div>
                        </div>
                        
                    </form>
					
					
                    
                </div>
            </div>
        </section>

		
		
		
			   <?php


if(isset($_POST["submit"])) {

	$uname = $_POST['username'];	
	
	
	
	$usql="select username from login where username='$uname'";
 $res=mysqli_query($con,$usql);
//$res=mysql_query($usql);
$num=mysqli_num_rows($res);

if($num>0)
{
	
	

$otp=mt_rand(10000,99999);


	
									 $sqlstd="SELECT * FROM `tbl_mentor` WHERE  mentor_uname='$uname'"; 
	$result=mysqli_query($con,$sqlstd);
	
				
	$value = mysqli_fetch_assoc($result);
	
	
	$value1=$value["mentor_contact"];
	//echo $value1;
	
	
	
//send sms code
	
	// Authorisation details.
	$username = "levanathr1@gmail.com";
	$hash = "5cf436fc1752c0a5febbec461c752b85a56e9996992151c8a2f29e9714e41705";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $value1; // A single number or a comma-seperated list of numbers
	$message = "Hello,".$uname.",Your OTP to reset password is"." ".$otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	if($result==true){
		
		
		
		
		
		
		
		
	}
	curl_close($ch);

	$_SESSION['otp'] = $otp;
	$_SESSION['uname'] = $uname;
	
	
	?>
    <script>alert("An OTP was send to your registered mobile no.");
   document.location.href='forgotpassword_otp.php';
    </script>
  <?php
}
else
{
 
  
  ?>
	<script>window.alert('No such user!!');
	location.href="forgot_password.php";
	</script>
    <?php
  
  
  
  
}	
	
}
	
	

		
	

    


?>
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		


       
    </div>
    <!-- END / PAGE WRAP -->

    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/lib/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/theia-sticky-sidebar.js"></script>
    <script type='text/javascript' src="js/lib/jquery-ui.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>