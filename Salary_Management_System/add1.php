<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add Admin</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
  <style>
  #text {
		
  }
  </style>
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <header id="home">
    
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li class="scroll"><a href="homepage.php">Home</a></li>                 
            <li class="scroll"><a href="logout.php">Logout</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
<header id="home">
<section id="Add Administrator">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="100ms">
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form0000000" name="contact-form" method="post" action="">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-smyy-6">
                    <div id="text">
                    <div >
                   
                    <h1>Add Admin</h1>
                      <input type="text" name="user"  class="form-control" placeholder="Enter Username" required="required" style="width: 261px;height: 50px;">
					             <br>
					             <input type="password" name="pass"  class="form-control" placeholder="Enter Password" required="required" style="width: 261px;height: 50px;">
                       <input type="submit" class="btn-submit" style="width:260px" value="Add Admin" name="subm" required="required"></br>
                     
                     </div>
                    </div>
              </form>   
            </div>
          </div>
        </div>                     
                <div class="form-group">
                  
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section>
	<!------             footer Section                     -------------------->
	    <footer id="footer" style="margin-top: 0px;">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" >
      <div class="container text-center">
        <div class="navbar-head" style="left:0px"  >
            <img    class="img-responsive" src="images/logo.png" alt="" >
        </div>
        </div>
    </div>

  </footer>
  <!------          End of Footer Section  ---------------------->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
<?php
	include('configuration.php');
	if(isset($_REQUEST['subm'])){
		$myusername=$_REQUEST['user'];
		$mypassword=$_REQUEST['pass'];
		function encryptIt( $q ) {
			$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
			$qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
			return( $qEncoded );
		}
		$encpass=encryptIt($mypassword);
		$sql="INSERT INTO `admin`(`username`, `password`) VALUES ('$myusername','$encpass')";
		mysqli_query($con,$sql);
?>
<script>
	alert("Successfully added to databases!");
	window.location="homepage.php";
</script>	
<?php		
	}
?>