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
	$special=$_SESSION['special'];
	$interim=$_SESSION['interim'];
	$gross=$_SESSION['gross'];
	
	$epf=$_SESSION['epf'];
	$esic=$_SESSION['esic'];
	$lic=$_SESSION['lic'];
	$transport=$_SESSION['transport'];
	$professional=$_SESSION['professional'];
	$income=$_SESSION['income'];
	$festival=$_SESSION['festival'];
	$quarters=$_SESSION['quarters'];
	$electrical=$_SESSION['electrical'];
	$medical=$_SESSION['medical'];
	$deductions=$_SESSION['deductions'];
	
	$dept=$_SESSION['dept'];
	$acc=$_SESSION['acc'];
	$netpay=$gross-$deductions;
	$ear="INSERT INTO `earnings_ant`(`sno`, `fid`, `year`, `month`, `basicpay`, `da`, `hra`, `cca`, `special`, `interim`, `gross`) VALUES ('','$fid','$year','$month','$basicpay','$da','$hra','$cca','$special','$interim','$gross')";
	$earq=mysqli_query($con,$ear);
	$ded="INSERT INTO `deductions_ant`(`sno`, `fid`, `year`, `month`, `epf`, `esic`, `lic`, `transport`, `professional`, `incometax`, `festival`, `quarters`, `electrical`, `medical`, `deductions`) VALUES ('','$fid','$year','$month','$epf','$esic','$lic','$transport','$professional','$income','$festival','$quarters','$electrical','$medical','$deductions')";
	$dedq=mysqli_query($con,$ded);
	$sal="INSERT INTO `salary`(`sno`, `fid`, `year`, `month`, `department`, `type`, `stream`, `account`, `grosspay`, `deductions`, `netpay`) VALUES ('','$fid','$year','$month','$dept','Adhoc','nonteaching','$acc','$gross','$deductions','$netpay')";
	$salq=mysqli_query($con,$sal);
	header("location:homepage.php");
?>