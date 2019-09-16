<?php
	include('configuration_update.php');
	session_start();
	$fid=$_SESSION['fid'];
	$year=date("Y");
    $m=date('F');
    $month=strtolower($m);
	$a="select * from dahra where (year='$year' && month='$month' && stream='teaching')";
	$b=mysqli_query($con,$a);
	$c=mysqli_fetch_array($b,MYSQLI_ASSOC);
	$sql="select * from details where fid='$fid'";
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Update New Regular Teaching Faculty Salary Details</title>
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
<script type="text/javascript">
  function sum(){


    var payband=document.getElementById('payband').value;
    var agp=document.getElementById('agp').value;
    var da=document.getElementById('da').value;
    var hra=document.getElementById('hra').value;
    var spay=document.getElementById('spay').value;
    var ppay=document.getElementById('ppay').value;


    payband = parseInt(payband);
	agp= parseInt(agp);
    da=parseInt(da);
    hra=parseInt(hra);
    spay=parseInt(spay);
    ppay =parseInt(ppay);
    var gross=payband+agp+da+hra+spay+ppay;
    document.getElementById('gross').value=gross;
  }

  function ded(){

var epf=parseInt(document.getElementById('epf').value);
var gis=parseInt(document.getElementById('gis').value);
var lic=parseInt(document.getElementById('lic').value);
var transport=parseInt(document.getElementById('transport').value);
var professional=parseInt(document.getElementById('professional').value);
var income=parseInt(document.getElementById('income').value);
var medical=parseInt(document.getElementById('medical').value);
var deductions=epf+gis+lic+transport+professional+income+medical;
document.getElementById('deductions').value=deductions;

}

/*function dahra(){
	var payband=document.getElementById('payband').value;
	var dap=document.getElementById('dapercentage').value;
	var agp=document.getElementById('agp').value;
	payband = parseInt(payband);
	agp= parseInt(agp);
	dap=((payband+agp)*dap)/100;
	dap=Math.ceil(dap);
	document.getElementById('da').value=dap;
	var hra=document.getElementById('hrapercentage').value;
	hra=((payband+agp)*hra)/100;
	hra=Math.ceil(hra);
	document.getElementById('hra').value=hra;
	sum();
}*/
function daper(){
	var payband=document.getElementById('payband').value;
	var dap=document.getElementById('dapercentage').value;
	var agp=document.getElementById('agp').value;
	payband = parseInt(payband);
	agp= parseInt(agp);
	dap=((payband+agp)*dap)/100;
	dap=Math.ceil(dap);
	document.getElementById('da').value=dap;

	sum();



}

function hraper(){

	var payband=document.getElementById('payband').value;
	var hra=document.getElementById('hrapercentage').value;
	var agp=document.getElementById('agp').value;
	payband = parseInt(payband);
	agp= parseInt(agp);
	hra=((payband+agp)*hra)/100;
	hra=Math.ceil(hra);
	document.getElementById('hra').value=hra;

	sum();
}
$(document).on("keypress", 'form', function (e) {
    var code = e.keyCode || e.which;
    if (code == 13) {
        e.preventDefault();
        return false;
    }
});



  </script>
</head>
<!-- -------------------------------------------- /head  --------------------------------------------- -->

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


<!--                    Begin  Update Faculty                   -->

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
                    <h1>Add Salary Details of New Regular Teaching Staff</h1>
					<h5><table><tr>
						<th>FACULTY ID: <?php echo $fid;?></th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>FACULTY NAME: <?php echo $row['name'];?></th>
					</tr></table></h5>
                    <table border="0"  style="border-collapse: collapse;border-width: 0px" cellpadding="20px" >
			<tr >

				<th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EARNINGS</th>
				<td></td>
				<th colspan="2" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEDUCTIONS</th>
				<td></td>
			</tr>
			<tr>
				<th >Payband:</th><td colspan="2"><input type="text" required  class="form-control" id="payband" name="payband"  oninput="sum()"></td>
				<th >EPF:</th><td  colspan="2"><input type="text"  required required  class="form-control" id="epf" name="epf"  oninput="ded()" ></td>
			</tr>
			<tr>
				<th >AGP:</th><td colspan="2"><input type="text" required  class="form-control" id="agp" name="agp" oninput="sum()"></td>
				<th >GIS:</th><td colspan="2"><input type="text" required  class="form-control" name="gis" id="gis" oninput="ded()"></td>
			</tr>
			<tr>
				<th >DA:</th><td><input type="number" step="0.1" value="<?php echo $c['da'];?>" min=0 class="form-control" id="dapercentage" placeholder="%" style="width:80px;height:40px;color:white" onfocus="daper()"></td>
				<td><input type="text" required  class="form-control" id="da" name="da" step=1 oninput="sum()"    </td>
				<th >LIC:</th><td  colspan="2"><input type="text" required  class="form-control" name="lic" id="lic" oninput="ded()"></td>
			</tr>
			<tr>
				<th >HRA:</th><td><input type="number" step="0.1" min=0 value="<?php echo $c['hra'];?>"class="form-control" id="hrapercentage" placeholder="%" style="width:80px;height:40px;color:white" onfocus="hraper()"></td><td><input type="text" required  class="form-control" id="hra" name="hra" oninput="sum()"></td>
				<th >Transport Charges:</th><td  colspan="2"><input type="text" required  class="form-control" id="transport" name="transport" oninput="ded()"></td>
			</tr>
			<tr>
				<th >SPay:</th><td  colspan="2"><input type="text" required  class="form-control" id="spay" name="spay" oninput="sum()"></td>
				<th >Professional Tax:</th><td  colspan="2"><input type="text" required  class="form-control" id="professional" name="professional" oninput="ded()"></td>
			</tr>
			<tr>
				<th >PPay:</th><td  colspan="2"><input type="text" required  class="form-control" id="ppay" name="ppay" oninput="sum()"></td>
				<th >Income Tax:</th><td  colspan="2"><input type="text" required  class="form-control" name="income" id="income" oninput="ded()"></td>
			</tr>
			<tr>
				<th >Gross Pay:</th><td  colspan="2"><input type="text" required  class="form-control" id="gross" name="gross" oninput="sum()"  ></td>
				<th >Medical Insurance:</th><td  colspan="2"><input type="text" required  class="form-control" name="medical" id="medical" oninput="ded()"></td>
			</tr>
			<tr><td></td>
				<td colspan="2"> <th >Deductions:</th><td><input type="text" required  class="form-control" id="deductions" name="deductions" oninput="ded()"></td>
			</tr>
		</table>
		<input type="submit" class="btn-submit" style="width:260px" value="Save Changes" name="save" ></br></center>
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
  if(isset($_REQUEST['save'])){
    session_start();
    $payband=$_REQUEST['payband'];
    $agp=$_REQUEST['agp'];
    $da=$_REQUEST['da'];
    $hra=$_REQUEST['hra'];
    $spay=$_REQUEST['spay'];
    $ppay=$_REQUEST['ppay'];
    $gross=$_REQUEST['gross'];
    $epf=$_REQUEST['epf'];
    $gis=$_REQUEST['gis'];
    $lic=$_REQUEST['lic'];
    $transport=$_REQUEST['transport'];
    $professional=$_REQUEST['professional'];
    $income=$_REQUEST['income'];
    $medical=$_REQUEST['medical'];
    $deductions=$_REQUEST['deductions'];
    $fid=$_SESSION['fid'];
    $_SESSION['payband']=$payband;
    $_SESSION['agp']=$agp;
    $_SESSION['da']=$da;
    $_SESSION['hra']=$hra;
    $_SESSION['spay']=$spay;
    $_SESSION['ppay']=$ppay;
    $_SESSION['gross']=$gross;
    $_SESSION['epf']=$epf;
    $_SESSION['gis']=$gis;
    $_SESSION['lic']=$lic;
    $_SESSION['transport']=$transport;
    $_SESSION['professional']=$professional;
    $_SESSION['income']=$income;
    $_SESSION['medical']=$medical;
    $_SESSION['deductions']=$deductions;
    $s="select * from details where fid='$fid'";
    $q=mysqli_query($con,$s);
    $r=mysqli_fetch_array($q,MYSQLI_ASSOC);
    $department=$r['department'];
    $account=$r['account'];
    $_SESSION['dept']=$department;
    $_SESSION['acc']=$account;
    $netpay=$gross-$deductions;
    $abc="INSERT INTO `earnings_t`(`sno`,`fid`, `year`, `month`, `payband`, `agp`, `da`, `hra`, `spay`, `ppay`, `gross`) VALUES ('','$fid','$year','$month','$payband','$agp','$da','$hra','$spay','$ppay','$gross')";
    $def="INSERT INTO `deductions_t`(`sno`,`fid`, `year`, `month`, `epf`, `gis`, `lic`, `transportcharges`, `professionaltax`, `incometax`, `medicalinsurance`, `deductions`) VALUES ('','$fid','$year','$month','$epf','$gis','$lic','$transport','$professional','$income','$medical','$deductions')";
    $sql="INSERT INTO `salary`(`sno`,`fid`, `year`, `month`, `department`, `type`, `stream`, `account`, `grosspay`, `deductions`, `netpay`) VALUES ('','$fid','$year','$month','$department','Regular','teaching','$account','$gross','$deductions','$netpay')";
    $ab=mysqli_query($con,$abc);
    $de=mysqli_query($con,$def);
    $sq=mysqli_query($con,$sql);
?>
<script>
  alert("Updated the Databases!");
  window.location="update_newrtdump.php";
</script> 
<?php
      die();
  } 
?>
	