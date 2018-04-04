<?php include('connection.php'); 


session_start();



$otp=$_SESSION['otp'];
$uname=$_SESSION['uname'];



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
						<input type="hidden" name="otp1" value="<?php echo $otp;?>">
						<input type="hidden" name="uname" value="<?php echo $uname;?>">
                            <label>Enter your OTP</label>
                            <input type="text" name="otp" required>
							<div class="form-actions">
                            <input type="submit" value="Verify OTP" name="submit">
                        </div>
                        </div>
                       
                       
                        
                    </form>
                    
                </div>
            </div>
        </section>

		
		
		
			   <?php


if(isset($_POST["submit"])) {

	$uname = $_POST['uname'];	
	$otp1 = $_POST['otp1'];	
	$otp = $_POST['otp'];	
	


if($otp==$otp1)
{
	
	$_SESSION['uname'] = $uname;
	?>
    <script>alert("OTP Verified");
   document.location.href='change_user_pass.php';
    </script>
  <?php
}
else
{

  ?>
	<script>window.alert('OTP did not match.Try again!!');
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