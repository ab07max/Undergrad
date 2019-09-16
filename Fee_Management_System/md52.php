<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$encpass=encryptIt($password);
function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}
if($username&&$password)
{
	$connect = mysqli_connect("localhost","root","");
	mysqli_select_db($connect, "stark") or die("couldnt connect");
	$query=mysqli_query($connect,"SELECT * FROM users WHERE username='$username'");
	$numrows=mysqli_num_rows($query);
	if($numrows!==0)
	{
		while($row=mysqli_fetch_assoc($query))
		{
			$dbusername =$row['username'];
			$dbpassword = $row['password'];
			
		}
	if($username==$dbusername&&$encpass==$dbpassword)
	{
		echo "you are logged in";
		@$_SESSION['username']=$username;
	}
	else 
		echo "incorrect";
	}
else
	die("doesnt exist");
	}
else die("please enter a username and password");
	?>

