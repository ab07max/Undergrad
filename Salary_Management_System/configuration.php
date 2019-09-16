<?php
	/*Configuration Page*/
	$con=mysqli_connect("localhost","root","","emp");
	//check connection
	if(mysqli_connect_errno())
		echo "Failed to connect to MySQL:". mysql_connect_error();
?>