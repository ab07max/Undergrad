<html>
	<head>
		<title>
			Add Regular Teaching Faculty
		</title>
	</head>
	<body>
		<center><h1>Add Regular Teaching Faculty</h1>
		<hr><p><p>
	<form method="POST" action="">
		<table border="1"  style="border-collapse: collapse" cellpadding="20px">
			<tr>
				<th colspan="2" width="300px">Personal Details</th>
			</tr>
			<tr>
				<th>Fid:</th><td><input type="text" name="fid"></td>
			</tr>
			<tr>
				<th>Name:</th><td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>Comment:</th><td><input type="text" name="comment"></td>
			</tr>
			<tr>
				<th>Department:</th><td>
					<select name="department">
						<option>CSE</option>
						<option>IT</option>
						<option>ECE</option>
						<option>MCT</option>
						<option>Civil</option>
						<option>Mechanical</option>
						<option>EEE</option>
					</select></td>
			</tr>
			<tr>
				<th>Designation:</th><td><input type="text" name="designation">
			</tr>
			<tr>
				<th>Account No:</th><td><input type="text" name="account"></td>
			</tr>
			<tr>
				<th>PAN no:</th><td><input type="text" name="pan"></td>
			</tr>
		</table>
		<p align="center"><input type="submit" value="ADD" name="sub">
	</form>
	</body>
</html>
<?php
	include('configuration.php');
	if(isset($_REQUEST['sub'])){
		$fid=$_REQUEST['fid'];
		$name=$_REQUEST['name'];
		$comment=$_REQUEST['comment'];
		$department=$_REQUEST['department'];
		$designation=$_REQUEST['designation'];
		$account=$_REQUEST['account'];
		$pan=$_REQUEST['pan'];
		//check for duplicates of the faculty ID as it's a primary key
		$s="select * from details where fid='$fid'";
		$q=mysqli_query($con,$s);
		$count=mysqli_num_rows($q);
		if($count!=0){
?>
<script>
	confirm("The Faculty ID already exists.Assign another ID.");
	window.location="addregt.php";
</script>
<?php
				die();
		}
		else{
			$sql="INSERT INTO `details`(`fid`, `name`, `comment`, `department`, `designation`, `type`, `stream`, `account`, `pan`) VALUES ('$fid','$name','$comment','$department','$designation','Regular','teaching','$account','$pan')";
			$query=mysqli_query($con,$sql);
?>
<script>
	confirm("Successfully Added New Faculty to the databases.");
	window.location="homepage.php";
</script>
<?php			
			die();
		}	
	}
?>	