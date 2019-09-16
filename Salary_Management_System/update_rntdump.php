<?php
	include('configuration.php');
	session_start();
	$year=date("Y");
	$m=date('F');
	$month=strtolower($m);
	$fid=$_SESSION['fid'];
	$basicpay=$_SESSION['basicpay'];
	$da=$_SESSION['da'];
	$hra=$_SESSION['hra'];
	$cca=$_SESSION['cca'];
	$ppay=$_SESSION['personal'];
	$spay=$_SESSION['special'];
	$buspass=$_SESSION['buspass'];
	$other=$_SESSION['other'];
	$gross=$_SESSION['gross'];


	$epf=$_SESSION['epfnt'];
	$esic=$_SESSION['esicnt'];
	$gis=$_SESSION['gisnt'];
	$lic=$_SESSION['licnt'];
	$transport=$_SESSION['transport'];
	$professional=$_SESSION['prof'];
	$quartersrent=$_SESSION['quarter'];
	$electricity=$_SESSION['electricity'];
	$festival=$_SESSION['festival'];
	$income=$_SESSION['income'];
	$deductions=$_SESSION['deductionsnt'];


	$dept=$_SESSION['dept'];
	$acc=$_SESSION['acc'];
	$net=$gross-$deductions;


	$ear="INSERT INTO `earnings_nt`(`sno`, `fid`, `year`, `month`, `basicpay`, `da`, `hra`, `cca`, `personalpay`, `special`, `buspass`, `other`, `gross`) VALUES ('','$fid','$year','$month','$basicpay','$da','$hra','$cca','$ppay','$spay','$buspass','$other','$gross')";
	$earq=mysqli_query($con,$ear);
	$ded="INSERT INTO `deductions_nt`(`sno`, `fid`, `year`, `month`, `epf`, `esic`, `gis`, `lic`, `transport`, `professional`, `quartersrent`, `electricity`, `festival`, `incometax`, `deductions`) VALUES ('','$fid','$year','$month','$epf','$esic','$gis','$lic','$transport','$professional','$quartersrent','$electricity','$festival','$income','$deductions')";
	$dedq=mysqli_query($con,$ded);
	$sal="INSERT INTO `salary`(`sno`, `fid`, `year`, `month`, `department`, `type`, `stream`, `account`, `grosspay`, `deductions`, `netpay`) VALUES ('','$fid','$year','$month','$dept','Regular','nonteaching','$acc','$gross','$deductions','$net')";
	$salq=mysqli_query($con,$sal);
	header("location:homepage.php");
?>