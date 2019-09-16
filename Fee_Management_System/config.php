<?php
	$con=mysql_connect("localhost:3306","root","")
		or die("Connection to server cannot be established.");
	mysql_select_db("fee",$con)
		or die("The database doesn't exist.");
?>