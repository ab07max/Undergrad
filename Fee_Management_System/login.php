<?php
	include('config.php');
	session_start();
	$myusername=$_REQUEST['username'];
	$mypassword=$_REQUEST['password'];
	function encryptIt( $q ) {
		$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
		$qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
		return( $qEncoded );
	}
	$encpass=encryptIt($mypassword);
	//$pass=md5($mypassword);
	$sql="select * from role where username='$myusername'";
	$query=mysql_query($sql);
	$count=mysql_num_rows($query);
	if($count==1){
		$row=mysql_fetch_array($query);
		
		$_SESSION['username']=$myusername;
		$_SESSION['role']=$row['role'];
	$role = $row['role'];
		//print_r($role);
		//exit;

		if($myusername==$row['username']){
			if($row['role']=='student'){
				if($encpass!=$row['password']){
?>
<script>
	alert('Invalid Password!');
	window.location="index.php";
</script>
<?php
				}	
				else{	
					$_SESSION['username']=$myusername;
					$_SESSION['status']='Active';
					session_write_close();
					header("location:dashboard.php");
					exit();
				}	
			}
			else if($row['role']=='admin'){
				if($encpass!=$row['password']){
?>
<script>
	alert('Invalid Password!');
	window.location="index.php";
</script>
<?php
				}
				else{
					$_SESSION['adminname']=$myusername;
										$_SESSION['status']='Active';

					session_write_close();
					header("location:dashboard.php");
					exit();
				}
			}
			else if($row['role']=='principal'){
				if($encpass!=$row['password']){
?>
<script>
	alert('Invalid Password!');
	window.location="index.php";
</script>
<?php
				}
				else{
					$_SESSION['adminname']=$myusername;
										$_SESSION['status']='Active';

					session_write_close();
					header("location:dashboard.php");
					exit();
				}
			}
		}
	}	
	else{
?>
<script>
	alert('Invalid Username!');
	window.location="index.php";
</script>
<?php
	}
?>