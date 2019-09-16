<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Update %DA and %HRA</title>
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


<!--                    Begin  Add Faculty                   -->

<header id="home">
<section id="AddFaculty">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="100ms">
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6rrr">
              <form id="main-contact-form0000000" name="contact-form" method="post" action="">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                    <div >
                    <center>
                    <h1>Update %DA and %HRA</h1>
					<table><tr>
						<th>DA:<td><input type="number" step="0.1" min=0 class="form-control" placeholder="%" name="daper" style="width:80px;height:40px;color:white">
						<tr>
						<th>HRA:<td><input type="number" step="0.1" min=0 class="form-control" placeholder="%" name="hraper" style="width:80px;height:40px;color:white">
						 </table>
						 <table><tr>
						 <td><input type="submit" class="btn-submit" style="width:105px" value="Non Teaching" name="nonteach"></td>
						 <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                      <td><input type="submit" class="btn-submit" style="width:105px" value="Teaching" name="teach" ></td>
                      </table>
					  </center>
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
	include('configuration_update.php');
	$year=date("Y");
	$m=date('F');
	$month=strtolower($m);
	if(isset($_REQUEST['teach'])){
		$da=$_REQUEST['daper'];
		$hra=$_REQUEST['hraper'];
		$sql="INSERT INTO `dahra`(`sno`, `year`, `month`, `stream`, `da`, `hra`) VALUES ('','$year','$month','teaching','$da','$hra')";
		$query=mysqli_query($con,$sql);
?>
<script>
	alert("Successfully updated the %DA and %HRA");
	window.location="homepage.php";
</script>
<?php
			die();
	}
	else if(isset($_REQUEST['nonteach'])){
		$da=$_REQUEST['daper'];
		$hra=$_REQUEST['hraper'];
		$sql="INSERT INTO `dahra`(`sno`, `year`, `month`, `stream`, `da`, `hra`) VALUES ('','$year','$month','nonteaching','$da','$hra')";
		$query=mysqli_query($con,$sql);
?>
<script>
	alert("Successfully updated the %DA and %HRA");
	window.location="homepage.php";
</script>
<?php
			die();	
	}	
?>