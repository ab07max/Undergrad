<?php
	include('configuration.php');
	session_start();
	$fid=$_SESSION['fid'];
		$a="select * from details where fid='$fid'";
		$b=mysqli_query($con,$a);
		$c=mysqli_fetch_array($b,MYSQLI_ASSOC);
		$d="select max(sno) from absent where fid='$fid'";
		$e=mysqli_query($con,$d);
		$f=mysqli_fetch_array($e,MYSQLI_ASSOC);
		$sno=$f['max(sno)'];
		$g="select * from absent where (sno='$sno' && fid='$fid')";
		$h=mysqli_query($con,$g);
		$i=mysqli_fetch_array($h,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>No. of Faculty leaves</title>
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
  <style type="text/css">
    .form-control{
    color:#028fcc;
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
                    <h1>Faculty leaves</h1>
                      <input type="text" name="name" class="form-control" placeholder="Faculty name"  value="<?php echo $c['name'];?>"></br>
    

                      <input type="number" name="casual" value="<?php echo $i['casual'];?>"class="form-control" placeholder="No. of casual leaves" required="required"></br>
					  <input type="number" name="medical" value="<?php echo $i['medical'];?>"class="form-control" placeholder="No. of medical leaves" required="required" ></br>
					  <input type="number" name="earned" value="<?php echo $i['earned'];?>"class="form-control" placeholder="No. of Earned leaves" required="required" ></br>
					  <input type="number" name="maternity" value="<?php echo $i['maternity'];?>"class="form-control" placeholder="No. of Maternity leaves" required="required" ></br>
					  <select name="month" class="form-control" style="width: 570px;height: 50px;" >
						<option value="january">January</option>
						<option value="february">February</option>
						<option value="march">March</option>
						<option value="april">April</option>
						<option value="may">May</option>
						<option value="june">June</option>
						<option value="july">July</option>
						<option value="august">August</option>
						<option value="september">September</option>
						<option value="october">October</option>
						<option value="november">November</option>
						<option value="december">December</option>
					</select></br>
					<select name="year" class="form-control" style="width: 570px;height: 50px;">
						<option>2017</option>
						<option>2016</option>
						<option>2015</option>
					</select>
                      <input type="submit" class="btn-submit" style="width:260px" value="Add to the database" name="sub" required="required"></br>
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
	if(isset($_REQUEST['sub'])){
		session_start();
		$year=$_REQUEST['year'];
		$month=$_REQUEST['month'];
		$casual=$_REQUEST['casual'];
		$medical=$_REQUEST['medical'];
		$earned=$_REQUEST['earned'];
		$maternity=$_REQUEST['maternity'];
		$s="select * from absent where (fid='$fid' && year='$year' && month='$month'";
		$q=mysqli_query($con,$s);
		$count=mysqli_num_rows($q);
		if($count!=0){
?>
<script>
	confirm("Already Updated for that month");
	window.location="absent.php";
</script>
<?php
				die();
		}
		else{
			$sql="INSERT INTO `absent`(`sno`, `fid`, `year`, `month`, `casual`, `medical`, `earned`, `maternity`) VALUES ('','$fid','$year','$month','$casual','$medical','$earned','$maternity')";
			$query=mysqli_query($con,$sql);
?>
<script>
	alert("Successfully Added leave details to the databases.");
	window.location="homepage.php";
</script>
<?php			
			die();
		}	
	}
?>