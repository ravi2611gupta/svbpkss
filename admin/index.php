<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
	$err="Invalid Email Or Password !!!";
}
if($msg==2)
{
	$err="You have Sucessfully Logout !!!";
}
if($msg==3)
{
	$err="Unauthorised Access for this Page !!!";
}
if($msg==4)
{
	$err="Your Password is Changed Sucessfully !!!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>SVBPKSS : : Admin</title>
<!-- Bootstrap CSS -->
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CSS-->
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- Animate CSS -->
<link href="assets/animate/animate.css" rel="stylesheet">
<!-- Owl Carousel -->
<link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
<link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="../images/jkcollege/favicon.png">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
#sp
{
	color:red;
	font-weight:bold;
}
</style>
</head>
<body>
<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Header Start -->
<!-- Header End -->
<!-- Inner Banner Wrapper Start -->
<!-- Inner Banner Wrapper End -->
<section class="inner-wrapper">
  <div class="container">
    <div class="row offset-top-80">
      <h2>Admin Login <span>Form</span></h2>
      <div class="inner-wrapper-main">
        <div class="col-sm-6 col-sm-offset-3 col-xs-offset-0">
          <div class="form">
            <form action="code.php" method="post" name="Login_Form" class="form-signin">
			<span id="sp"><?php echo $err; ?></span>
              <input type="text"  class="txt" name="email" placeholder="Email...." required />
              <input type="password"  class="txt" name="pass" placeholder="Password...." required/>
              <div class="social-login">
              <input type="submit" value="Login" name="submit" class="txt2">
              <input type="submit" value="Back to Home" class="txt2" onclick="window.location.href='../index.php'">
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Call to Action start -->
<!-- Call to Action End -->
<!-- Footer Links Start-->
<!-- Footer Links End -->
<!-- Copy Rights Start -->
<div class="footer-wrapper">
  <div class="container">
            <p>
                &copy; Copyright
                <script type="text/javascript">
                    var d = new Date();
                    document.write(d.getFullYear());
                </script>
                Designed & Developed By | <a target="_blank" href="http://www.softproindia.in" style="color:white;">Softpro India Computer Technologies (P) Ltd.</a>
            </p>
   </div>
  <a id="scrool-top" href="javascript:void(0)"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a> 
</div>
<!-- Copy Rights End --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="assets/jquery/jquery-3.1.1.min.js"></script> 
<script src="assets/jquery/jquery.animateNumber.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="assets/easing/jquery.easing.min.js"></script> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/wow/wow.min.js"></script> 
<script src="assets/owl-carousel/js/owl.carousel.js"></script> 
<script src="js/custom.js"></script>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83282272-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-83282272-3');
</script>
</body>

</html>