<?php
	include('configuration.php');
	session_start();
	$year=date("Y");
	$m=date('F');
	$month=strtolower($m);
	$fid=$_SESSION['fid'];
	$basicpay=$_SESSION['basicpay'];
	$bp=$_SESSION['bp'];
	$da=$_SESSION['da'];
	$hra=$_SESSION['hra'];
	$other=$_SESSION['other'];
	$gross=$_SESSION['gross'];
	
	$epf=$_SESSION['epf'];
	$gis=$_SESSION['gis'];
	$lic=$_SESSION['lic'];
	$transport=$_SESSION['transport'];
	$professional=$_SESSION['professional'];
	$income=$_SESSION['income'];
	$deductions=$_SESSION['deductions'];
	
	$dept=$_SESSION['dept'];
	$acc=$_SESSION['acc'];
	$net=$gross-$deductions;
	$ear="INSERT INTO `earnings_at`(`sno`, `fid`, `year`, `month`, `basicpay`, `50%bp`, `da`, `hra`, `otherallowances`, `gross`) VALUES ('','$fid','$year','$month','$basicpay','$bp','$da','$hra','$other','$gross')";
	$earq=mysqli_query($con,$ear);
	$ded="INSERT INTO `deductions_at`(`sno`, `fid`, `year`, `month`, `transportcharges`, `epf`, `professionaltax`, `incometax`, `gis`, `lic`, `deductions`) VALUES ('','$fid','$year','$month','$transport','$epf','$professional','$income','$gis','$lic','$deductions')";
	$dedq=mysqli_query($con,$ded);
	$sal="INSERT INTO `salary`(`sno`, `fid`, `year`, `month`, `department`, `type`, `stream`, `account`, `grosspay`, `deductions`, `netpay`) VALUES ('','$fid','$year','$month','$dept','Adhoc','teaching','$acc','$gross','$deductions','$net')";
	$salq=mysqli_query($con,$sal);
	header("location:homepage.php");
?>
