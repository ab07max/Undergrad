<?php
	session_start();
    //unset($_SESSION['status']);

	if(session_destroy())
		header("location:index.php");
?>