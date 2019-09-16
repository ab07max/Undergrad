<?php
	include('config.php');
	session_start();
	



	
                $role=$_SESSION['role'];
                if($role=='admin'){ 




	if(isset($_REQUEST['save'])){
		$name=$_REQUEST['sname'];
		$roll=$_REQUEST['sid'];
		$branch=$_REQUEST['sbranch'];
		$busno=$_REQUEST['busno'];
		$busrt=$_REQUEST['busrt'];
		$trg=$_REQUEST['sclass'];
		$bp=$_REQUEST['board'];
		$amount=$_REQUEST['total'];
		$dte=$_REQUEST['date'];
		$ch=$_REQUEST['challan'];
		$_SESSION['ch']=$ch;
		$date=date("Y-m-d",strtotime($dte));
		$roll=$_REQUEST['sid'];
		$_SESSION['name']=$name;
		$_SESSION['roll']=$roll;
		$_SESSION['branch']=$branch;
		$_SESSION['date']=$dte;
		$_SESSION['class']=$trg;
		$wrd=$_REQUEST['wrd'];
		$_SESSION['wrd']=$wrd;
		$_SESSION['busno']=$busno;
		$_SESSION['busrt']=$busrt;
		$_SESSION['board']=$bp;
		$trans=$_REQUEST['trans'];
		$_SESSION['trans']=$trans;
		$_SESSION['total']=$amount;
		$sql="INSERT INTO `transport`(`chalanno`, `trg`, `date`, `rollno`, `route no`, `boarding`, `amount`) VALUES ('$ch','$trg','$date','$roll','$busno','$bp','$amount')";
		mysql_query($sql);
		$ch=$ch+1;
		$s="update chalanno_transport set chalanno='$ch'";
		mysql_query($s);
?>
<script>
	alert('Updated the Databases!');
	window.location="transport_chal.php";
</script>
<?php
		die();
	}
 } 
	else {
		?>
		<script>
			alert("You are not Authorized to visit this page ");
			window.location="index.php";
		</script>

	<?php }	?>