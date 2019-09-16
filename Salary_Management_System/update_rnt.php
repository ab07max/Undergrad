<?php
	include('configuration_update.php');
	session_start();
	$fid=$_SESSION['fid'];
	$s="select * from earnings_nt where fid='$fid'";
	$q=mysqli_query($con,$s);
	$r=mysqli_fetch_array($q,MYSQLI_ASSOC);
	$year=date('Y');
	$m=date('F');
	$month=strtolower($m);
	$a="select * from dahra where (year='$year' && month='$month' && stream='nonteaching')";
	$b=mysqli_query($con,$a);
	$c=mysqli_fetch_array($b,MYSQLI_ASSOC);
	$sq="select * from deductions_nt where fid='$fid'";
	$qr=mysqli_query($con,$sq);
	$ro=mysqli_fetch_array($qr,MYSQLI_ASSOC);
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
  <title>Update Regular Teaching </title>
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
  <link rel="shortcut icon" href="images/favicon.ico">
<style type="text/css">
    .form-control{
    color:#028fcc;
    }
 </style>
  
  </head><!--/head-->

<body onload="dahra()">

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
                    <h1>Update Regular Non Teaching   </h1>
					<h5><table><tr>
						<th>FACULTY ID: <?php echo $fid;?></th>
						<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						<th>FACULTY NAME: <?php echo $row['name'];?></th>
					</tr></table></h5>
                    <table border="0"  style="border-collapse: collapse;border-width: 0px" cellpadding="20px" >
			<tr align="center">
				<th colspan="2" width="300px"  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;   Earnings</th>
				<th colspan="2" width="300px"  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deductions</th>
			</tr>
			<tr>
				<th >BasicPay:</th><td colspan="2"><input type="text"  required  class="form-control" id="basicpay" name="basicpay" value="<?php echo $r['basicpay'];?>" oninput="sum()"></td>
				<th >EPF:</th><td colspan="2"><input type="text"  required       class="form-control" id="epf" name="epf" value="<?php echo $ro['epf'];?>" oninput="ded()" ></td>
			</tr>
			<tr>
				<th >DA:</th><td><input type="number" step="0.1" min=0 class="form-control" value="<?php echo $c['da'];?>"placeholder="%" id="dapercentage" style="width:80px;height:40px;color:white" oninput="daper()"></td><td><input type="text"  required        class="form-control" id="da" name="da" oninput="sum()"></td>
				<th >GIS:</th><td colspan="2"><input type="text"  required       class="form-control" name="gis" id="gis" value="<?php echo $ro['gis'];?>" oninput="ded()"></td>
			</tr>
			<tr>
				<th >HRA:</th><td><input type="number" step="0.1"value="<?php echo $c['hra'];?>" min=0 class="form-control"  placeholder="%"  id="hrapercentage" style="width:80px;height:40px;color:white" oninput="hraper()"></td><td><input type="text"  required       class="form-control" id="hra" name="hra"  oninput="sum()"></td>
				<th >LIC:</th><td colspan="2"><input type="text"  required       class="form-control" name="lic" id="lic" value="<?php echo $ro['lic'];?>" oninput="ded()"></td>
			</tr>
			<tr>
				<th >CCA:</th><td colspan="2"><input type="text"  required       class="form-control" id="cca" name="cca" value="<?php echo $r['cca'];?>" oninput="sum()"></td>
				<th >Transport Charges:</th><td><input type="text"  required  class="form-control" id="transport" name="transport" value="<?php echo $ro['transport'];?>" oninput="ded()"></td>
			</tr>
			<tr>
				<th >PersonalPay:</th><td colspan="2"><input type="text"  required  class="form-control" id="ppay" name="ppay" value="<?php echo $r['personalpay'];?>" oninput="sum()"></td>
				<th >Professional Tax:</th><td colspan="2"><input type="text"  required  class="form-control" id="professional" name="professional" value="<?php echo $ro['professional'];?>" oninput="ded()"></td>
			</tr>
			<tr>
				<th >SpecialPay:</th><td colspan="2"><input type="text"  required  class="form-control" id="spay" name="spay" value="<?php echo $r['special'];?>" oninput="sum()"></td>
				<th >QuartersRent:</th><td colspan="2"><input type="text"  required  class="form-control" name="quartersrent" id="quartersrent" value="<?php echo $ro['quartersrent'];?>" oninput="ded()"></td>
			</tr>
			<tr>
				<th >Bus Pass:</th><td colspan="2"><input type="text"  required  class="form-control" id="buspass" name="buspass" value="<?php echo $r['buspass'];?>" oninput="sum()" ></td>
				<th >Electricity:</th><td colspan="2"><input type="text"  required  class="form-control" name="electricity" id="electricity" value="<?php echo $ro['electricity'];?>" oninput="ded()"></td>
			</tr>
			<tr>
				<th>Other Allowances:</th><td colspan="2"><input type="text" required class="form-control" id="other" name="other" value="<?php echo $r['other'];?>" oninput="sum()"></td> 
				<th >Festival:</th><td colspan="2"><input type="text"  required  class="form-control" name="festival" id="festival" value="<?php echo $ro['festival'];?>" oninput="ded()"></td>
			</tr>
			<tr>
				<th >Gross Pay:</th><td colspan="2"><input type="text"  required  class="form-control" id="gross" name="gross" value="<?php echo $r['gross'];?>" oninput="sum()"></td>
				<th >Income Tax:</th><td colspan="2"><input type="text"  required  class="form-control" name="income" id="income" value="<?php echo $ro['incometax'];?>" oninput="ded()"></td>
			</tr>
			<tr>
				<th ><td colspan="2"></td></th>
				<th >ESIC:</th><td colspan="2"><input type="text"  required  class="form-control" name="esic" id="esic" value="<?php echo $ro['esic'];?>" oninput="ded()"></td>
			</tr>			

			<tr><td></td>
				<td colspan="2"> <th >Deductions:</th><td><input type="text"  required  class="form-control" id="deductions" name="deductions" value="<?php echo $ro['deductions'];?>" oninput="ded()"></td>
			</tr>
		</table>


 
                      <input type="submit" class="btn-submit" style="width:260px" value="Save Changes" name="save" ></br>
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

<script type="text/javascript">
  function sum(){


    var basicpay=document.getElementById('basicpay').value;
    var da=document.getElementById('da').value;
    var hra=document.getElementById('hra').value;
    var cca=document.getElementById('cca').value;
    var ppay=document.getElementById('ppay').value;
    var spay=document.getElementById('spay').value;
    var buspass=document.getElementById('buspass').value;

    basicpay= parseInt(basicpay);
	da= parseInt(da);
    hra=parseInt(hra);
    cca=parseInt(cca);
    ppay =parseInt(ppay);
    spay=parseInt(spay);
    buspass=parseInt(buspass);

    var gross=basicpay+da+hra+cca+ppay+spay+buspass;
    document.getElementById('gross').value=gross;
  }
  function dahra(){
	var basicpay=parseInt(document.getElementById('basicpay').value);
	var dap=document.getElementById('dapercentage').value;
	//var agp=document.getElementById('agp').value;
	
	dap=(basicpay*dap)/100;
	dap=Math.ceil(dap);
	document.getElementById('da').value=dap;
	var hra=document.getElementById('hrapercentage').value;
	hra=(basicpay*hra)/100;
	hra=Math.ceil(hra);
	document.getElementById('hra').value=hra;
	sum();
  }

  function ded(){

var epf=parseInt(document.getElementById('epf').value);
var esic=parseInt(document.getElementById('esic').value);
var gis=parseInt(document.getElementById('gis').value);

var lic=parseInt(document.getElementById('lic').value);
var transport=parseInt(document.getElementById('transport').value);
var professional=parseInt(document.getElementById('professional').value);
var quartersrent=parseInt(document.getElementById('quartersrent').value);
var electricity=parseInt(document.getElementById('electricity').value);
var festival=parseInt(document.getElementById('festival').value);
var income=parseInt(document.getElementById('income').value);

var deductions=epf+gis+esic+lic+transport+professional+quartersrent+electricity+festival+income;

document.getElementById('deductions').value=deductions;

}

function daper(){
	var basicpay=document.getElementById('basicpay').value;
	var dap=document.getElementById('dapercentage').value;
	dap=(basicpay*dap)/100;
	dap=Math.ceil(dap);
	document.getElementById('da').value=dap;

	sum();



}

function hraper(){

	var basicpay=document.getElementById('basicpay').value;
	var hra=document.getElementById('hrapercentage').value;
	hra=(basicpay*hra)/100;
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

  <?php
	if(isset($_REQUEST['save'])){
		$basicpay=$_REQUEST['basicpay'];
		$da=$_REQUEST['da'];
		$hra=$_REQUEST['hra'];
		$cca=$_REQUEST['cca'];
		$ppay=$_REQUEST['ppay'];
		$spay=$_REQUEST['spay'];
		$buspass=$_REQUEST['buspass'];
		$other=$_REQUEST['other'];
		$gross=$_REQUEST['gross'];

		$epf=$_REQUEST['epf'];
		$esic=$_REQUEST['esic'];
		$gis=$_REQUEST['gis'];
		$lic=$_REQUEST['lic'];
		$transport=$_REQUEST['transport'];
		$professional=$_REQUEST['professional'];
		$quartersrent=$_REQUEST['quartersrent'];
		$electricity=$_REQUEST['electricity'];
		$festival=$_REQUEST['festival'];
		$income=$_REQUEST['income'];
		$deductions=$_REQUEST['deductions'];
		$netpay=$gross-$deductions;

		$ear="UPDATE `earnings_nt` SET `year`='$year',`month`='$month',`basicpay`='$basicpay',`da`='$da',`hra`='$hra',`cca`='$cca',`personalpay`='$ppay',`special`='$spay',`buspass`='$buspass',`other`='$other',`gross`='$gross' WHERE fid='$fid'";
		$earq=mysqli_query($con,$ear);
		$ded="UPDATE `deductions_nt` SET `year`='$year',`month`='$month',`epf`='$epf',`esic`='$esic',`gis`='$gis',`lic`='$lic',`transport`='$transport',`professional`='$professional',`quartersrent`='$quartersrent',`electricity`='$electricity',`festival`='$festival',`incometax`='$income',`deductions`='$deductions' WHERE fid='$fid'";
		$dedq=mysqli_query($con,$ded);
		$sal="UPDATE `salary` SET `year`='$year',`month`='$month',`grosspay`='$gross',`deductions`='$deductions',`netpay`='$netpay' WHERE fid='$fid'";
		$salq=mysqli_query($con,$sal);
		//find a way an easier way to navigate through databases
		$_SESSION['basicpay']=$basicpay;
		$_SESSION['da']=$da;
		$_SESSION['hra']=$hra;
		$_SESSION['cca']=$cca;
		$_SESSION['personal']=$ppay;
		$_SESSION['special']=$spay;
		$_SESSION['buspass']=$buspass;
		$_SESSION['other']=$other;
		$_SESSION['gross']=$gross;

		$_SESSION['epfnt']=$epf;
		$_SESSION['esicnt']=$esic;
		$_SESSION['gisnt']=$gis;
		$_SESSION['licnt']=$lic;
		$_SESSION['transport']=$transport;
		$_SESSION['prof']=$professional;
		$_SESSION['quarter']=$quartersrent;
		$_SESSION['electricity']=$electricity;
		$_SESSION['festival']=$festival;
		$_SESSION['income']=$incometax;
		$_SESSION['deductionsnt']=$deductions;

		$_SESSION['dept']=$row['department'];
		$_SESSION['acc']=$row['account'];
?>
<script>
	alert("Updated the Databases!");
	window.location="update_rntdump.php";
</script>
<?php		
		die();
	}
?>