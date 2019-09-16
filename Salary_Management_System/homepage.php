<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Homepage</title>
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
  
  <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>-->
  <link rel="shortcut icon" href="images/favicon000000000000.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

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
          <a class="navbar-brand" href="#">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo" ></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="logout.php">Logout</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

<header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <!--<div class="item active" style="background-image: url(images/slider/1.jpg)">-->
		<div class="item active" style="background-color:#000033;">
          <div class="caption" align="left">
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="addfaculty.php" style="width:320px">Add Faculty</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="add1.php" style="width:320px">Add Administrator</a>
			<a data-scroll class="btn btn-start animated fadeInUpBig" href="updatesalary.php" style="width:320px">Update Faculty Salary</a></br>
			<a data-scroll class="btn btn-start animated fadeInUpBig" href="updatedahra.php" style="width:320px">Update %DA & %HRA</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="payslip.php" style="width:320px">Generate Payslip</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="bank_statement.php" style="width:320px">Generate Bank Statement</a></br>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="salary_statement.php" style="width:320px">Salary statements</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="monthly.php" style="width:320px">Consolidated Salary Statements</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="deductions_individual.php" style="width:320px">Draft Deductions</a></br>
			<a data-scroll class="btn btn-start animated fadeInUpBig" href="absentid.php" style="width:320px">leaves</a></br>
			</br>
            </br>
            </br>
          </div>
        </div>

      </div>


    </div><!--/#home-slider-->

    <footer id="footer" style="margin-top: 0px;">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" >
      <div class="container text-center">
        <div class="navbar-head" style="left:0px"  >
            <img    class="img-responsive" src="images/logo.png" alt="" >
        </div>
        </div>
    </div>

  </footer>

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

