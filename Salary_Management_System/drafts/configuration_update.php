<?php
	/*Configuration Page for updated salaries*/
	$con=mysqli_connect("localhost","root","","emp_update");
	//check connection
	if(mysqli_connect_errno())
		echo "Failed to connect to MySQL:". mysql_connect_error();
?>