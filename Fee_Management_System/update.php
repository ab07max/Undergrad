<?php
	//this program is not required
	include('config.php');
	$roll=$_REQUEST['roll'];
	$ch=$_REQUEST['chalan'];
	$sql="select * from chalan where chalanno='$ch'";
	$query=mysql_query($sql);
	$count=mysql_num_rows($query);
	if($count==1){
		$row=mysql_fetch_array($query);
		if($roll==$row['rollno']){
			$date=$row['day'];
			$due=$row['due'];
			$amount=$row['amount'];
			$ql="insert into feepaid values('$ch','$date','$roll','$amount')";
			mysql_query($ql);
			$s="select * from student where roll='$roll'";
			$q=mysql_query($s);
			$r=mysql_fetch_array($q);
			$feedue=$r['feedue'];
			$feedue=$feedue-$due;
			$sql="update student set feedue='$feedue' where roll='$roll'";
			mysql_query($sql);
			echo "Databases Updated!";
			echo "<script>setTimeout(\"location.href = 'dashboard.php';\",1500);</script>";
		}
		else{
			echo "Unsuccessful!";
			echo "<script>setTimeout(\"location.href = 'dashboard.php';\",1500);</script>";
		}
	}	
?>