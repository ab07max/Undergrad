<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add Faculty</title>
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
                    <h1>Add Faculty</h1>
                      <input type="text" name="fid" class="form-control" placeholder="Enter Faculty ID" required="required"></br>
                      <input type="text" name="name" class="form-control" placeholder="Enter Userame" required="required"></br>
                      <input type="text" name="comment" class="form-control" placeholder="Enter Comments" ></br>
                      <select name="department" class="form-control">
						          <option>CSE</option>
						          <option>IT</option>
						          <option>ECE</option>
						          <option>MCT</option>
									<option>MME</option>
									<option value="M&H">M&H </option>
						            <option>CIVIL</option>
						            <option>MECH</option>
						            <option>EEE</option>
									<option value="P&C">P&C </option>
									<option>P.Ed.</option>
									<option>LIC</option>
									<option>Admin office</option>
									<option>Transport Section</option>
									<option>AES</option>
									<option>WATCHMAN</option>
									<option>MAINTENANCE</option>
				              	</select></br>
				            	   <select name="type" class="form-control" >
						            <option>Regular</option>
						            <option>Adhoc</option>
					           </select></br>
					           <select name="stream" class="form-control">
						            <option value="teaching">Teaching</option>
						            <option value="nonteaching">Non Teaching</option>
					           </select></br>

                      <input type="text" name="designation" class="form-control" placeholder="Enter Designation" required="required"></br>
					  <input type="text" name="account" class="form-control" placeholder="Enter Account Number" required="required" ></br>
					  <input type="text" name="pan" class="form-control" placeholder="Enter PAN card Number" required="required" ></br>
					  DOB<input type="date" name="dob" class="form-control" placeholder="Enter Date of Birth" required="required" ></br>
					  DOJ<input type="date" name="doj" class="form-control" placeholder="Enter Date of Joining" required="required" ></br>
					  <input type="text" name="adhar" class="form-control" placeholder="Enter Adhar card Number" required="required" ></br>
                      <input type="submit" class="btn-submit" style="width:260px" value="Add Faculty" name="sub" required="required"></br>
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
	if(isset($_REQUEST['sub'])){
		session_start();
		$fid=$_REQUEST['fid'];
		$name=$_REQUEST['name'];
		$comment=$_REQUEST['comment'];
		$department=$_REQUEST['department'];
		$type=$_REQUEST['type'];
		$stream=$_REQUEST['stream'];
		$designation=$_REQUEST['designation'];
		$account=$_REQUEST['account'];
		$pan=$_REQUEST['pan'];
		$dob=$_REQUEST['dob'];
		$doj=$_REQUEST['doj'];
		$adhar=$_REQUEST['adhar'];
		$_SESSION['fid']=$fid;
		$_SESSION['name']=$name;
		$_SESSION['comment']=$comment;
		$_SESSION['dept']=$department;
		$_SESSION['type']=$type;
		$_SESSION['stream']=$stream;
		$_SESSION['des']=$designation;
		$_SESSION['acc']=$account;
		$_SESSION['pan']=$pan;
		$_SESSION['dob']=$dob;
		$_SESSION['doj']=$doj;
		$_SESSION['adhar']=$adhar;
		//check for duplicates of the faculty ID though it's a primary key
		$s="select * from details where fid='$fid'";
		$q=mysqli_query($con,$s);
		$count=mysqli_num_rows($q);
		if($count!=0){
?>
<script>
	confirm("The Faculty ID already exists.Assign another ID.");
	window.location="addfaculty.php";
</script>
<?php
				die();
		}
		else{
			$sql="INSERT INTO `details`(`fid`, `name`, `comment`, `department`, `designation`, `type`, `stream`, `account`, `pan`, `dob`, `doj`, `adhar`) VALUES ('$fid','$name','$comment','$department','$designation','$type','$stream','$account','$pan','$dob','$doj','$adhar')";
			$query=mysqli_query($con,$sql);
?>
<script>
	alert("Successfully Added New Faculty to the databases.");
	window.location="addfaculty_update.php";
</script>
<?php			
			die();
		}	
	}
?>