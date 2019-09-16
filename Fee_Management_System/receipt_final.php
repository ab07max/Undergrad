<?php
	include('config.php');
	session_start();

if(isset($_REQUEST['save'])){	
$receiptno=$_REQUEST['receiptno'];
$date=$_REQUEST['date'];
$d=date('Y-m-d',strtotime($date));
$stuid=$_REQUEST['stuid'];
$amount=$_REQUEST['rupees'];
$type=$_REQUEST['type'];
$wordsone=$_REQUEST['wordsone'];
$wordstwo=$_REQUEST['wordstwo'];
$mode=$_REQUEST['mode'];
$drawn=$_REQUEST['drawn'];
$stuname=$_REQUEST['stuname'];

$_SESSION['receiptno']=$receiptno;
$_SESSION['date']=$date;
$_SESSION['stuid']=$stuid;
$_SESSION['amount']=$amount;
$_SESSION['type']=$type;
$_SESSION['wordsone']=$wordsone;
$_SESSION['wordstwo']=$wordstwo;
$_SESSION['mode']=$mode;
$_SESSION['drawn']=$drawn;
$_SESSION['name']=$stuname;
//echo $receiptno,"  ",$date,$stuid,$amount,$type;

		$sql="insert into receipt values('$receiptno','$stuid','$d','$amount','$type')";
		mysql_query($sql);
		$receiptno=$receiptno+1;
		$s="update receiptno set receiptno='$receiptno'";
		mysql_query($s);
?>
<script>
	alert('Updated the Databases!');
	window.location="receipt_finally.php";
</script>
<?php
		die();
	
 } 



?>
