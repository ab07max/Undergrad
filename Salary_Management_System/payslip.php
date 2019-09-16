<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Generate Payslip</title>
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
            <div class="col-sm-6000000000">
              <form id="main-contact-form0000000" name="contact-form" method="post" action="">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-60000000000">
                    <div class="form-group" >
                    <div ><center>
                    <h1>Generate Payslip:</h1></center>
                    <table align="center"> 
                    <tr>
                    <td>
                      	<select name="month" class="form-control" style="width: 261px;height: 50px;">
						<option style="font-color:#ffffff" value="january">January</option>
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
						</select>
					</td>
					<td width="85px"></td>
					<td>
					<select name="month1" class="form-control" style="width: 261px;height: 50px;">
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
					</select>
					</td>
					<td width="85px"></td>

					<td>
					<select name="month2" class="form-control" style="width: 261px;height: 50px;" >
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
					</select>
					</td>
					</tr>
					<tr>
					<td>
					<select name="year" class="form-control" style="width: 261px;height: 50px;">
						<option>2016</option>
						<option>2015</option>
					</select>
					</td>
					<td></td>
					<td>
					<select name="year1" class="form-control" style="width: 261px;height: 50px;">
						<option>2016</option>
						<option>2015</option>
					</select>
					</td>
					<td width="85px"></td>

					<td>
					<select name="year2" class="form-control" style="width: 261px;height: 50px;">
						<option>2016</option>
						<option>2015</option>
					</select>
					</td>
					</tr>
					<tr>
					<td>
					<input type="text" name="fid" placeholder="Enter Faculty ID" class="form-control" style="width: 261px;height: 50px;">
					</td>
					<td></td>
					<td>
					<select class="form-control" name="dept" style="width: 261px;height: 50px;">
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
					</select>
					</td>
					<td></td>
					</tr>
					<tr>
					<td>				
					<input type="submit" name="individual" value="Individual" class="btn-submit" style="width: 261px;height: 50px;">
					</td>
					<td></td>

					<td>				

					<input type="submit" class="btn-submit" name="department" value="Department Wise" style="width: 261px;height: 50px;">
					</td>
					<td width="85px"></td>

					<td>				

					<input type="submit" name="total" class="btn-submit" value="Total College" style="width: 261px;height: 50px;">		
					</td>
					</table>
					<div>




					</br>

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
	session_start();
	if(isset($_REQUEST['individual'])){
		$fid=$_REQUEST['fid'];
		$month=$_REQUEST['month'];
		$year=$_REQUEST['year'];
		$_SESSION['fid']=$fid;
		$_SESSION['month']=$month;
		$_SESSION['year']=$year;
		$sql="select * from details where fid='$fid'";
		$query=mysqli_query($con,$sql);
		$count=mysqli_num_rows($query);
		if($count==0){
?>
<script>
	alert("No Record with that Faculty ID!");
	window.location="payslip.php";
</script>
<?php
			exit();
		}
		else{
			$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
			$_SESSION['details']=$row;
			$s="select * from salary where fid='$fid'";
			$q=mysqli_query($con,$s);
			$c=mysqli_num_rows($q);
			if($c==0){
?>
<script>
	alert("Pay slip not yet updated for that Faculty ID!");
	window.location="payslip.php";
</script>
<?php					
			}
			else{
				if($row['stream']=='teaching' && $row['type']=='Regular'){
					$i=0;
					while($r=mysqli_fetch_array($q,MYSQLI_ASSOC)){
						if($r['month']==$month && $r['year']==$year){
							header("location:payslip_T.php");
							die();
						}
						else{
							$i=$i+1;
							if($i==$c){
?>
<script>
	alert("Pay slip not yet updated for that Month and Year!");
	window.location="payslip.php";
</script>							
<?php
								die();
							}
							else 
								continue;
						}
					}
				}	
				else if($row['stream']=='teaching' && $row['type']=='Adhoc'){
					$i=0;
					while($r=mysqli_fetch_array($q,MYSQLI_ASSOC)){
						if($r['month']==$month && $r['year']==$year){
							header("location:payslip_AT.php");
							die();
						}
						else{
							$i=$i+1;
							if($i==$c){
?>
<script>
	alert("Pay slip not yet updated for that Month and year!");
	window.location="payslip.php";
</script>					
<?php
								die();
							}
							else 
								continue;
						}
					}
				}
				else if($row['stream']=='nonteaching' && $row['type']=='Regular'){
					$i=0;
					while($r=mysqli_fetch_array($q,MYSQLI_ASSOC)){
						if($r['month']==$month && $r['year']==$year){
							header("location:payslip_RNT.php");
							die();
						}
						else{
							$i=$i+1;
							if($i==$c){
?>
<script>
	alert("Pay slip not yet updated for that Month and year!");
	window.location="payslip.php";
</script>					
<?php
								die();
							}
							else 
								continue;
						}
					}
				}
				else if($row['stream']=='nonteaching' && $row['type']=='Adhoc'){
					$i=0;
					while($r=mysqli_fetch_array($q,MYSQLI_ASSOC)){
						if($r['month']==$month && $r['year']==$year){
							header("location:payslip_ANT.php");
							die();
						}
						else{
							$i=$i+1;
							if($i==$c){
?>
<script>
	alert("Pay slip not yet updated for that Month and year!");
	window.location="payslip.php";
</script>					
<?php
								die();
							}
							else 
								continue;
						}
					}
				}
			}	
		}
	}	
	else if(isset($_REQUEST['department'])){
		$_SESSION['month']=$_REQUEST['month1'];
		$_SESSION['year']=$_REQUEST['year1'];
		$_SESSION['dept']=$_REQUEST['dept'];
		header("location:department.php");
		exit();
	}
	else if(isset($_REQUEST['total'])){
		$_SESSION['month']=$_REQUEST['month2'];
		$_SESSION['year']=$_REQUEST['year2'];
		header("location:total.php");
		exit();
	}	
?>
