<?php
	include('config.php');
	session_start();
	$roll=$_REQUEST['roll'];
	$sql="select * from student where roll='$roll'";
	$query=mysql_query($sql);
	$count=mysql_num_rows($query);
	if($count==0){
?>
<script>
	alert("No Record Found in the database, add the student first!");
	window.location="add.php";
</script>	
<?php	
	}
	else{
		$row=mysql_fetch_array($query);
		$s="select * from role where username='$roll'";
		$qr=mysql_query($s);
		$r=mysql_fetch_array($qr);
		function decryptIt( $q ) {
			$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
			$qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
			return( $qDecoded );
		}
		$dec=decryptIt($r['password']); 
	}
?>
<html>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	
	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/alert.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="assets/img/calculator.png">

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <title>Update Student</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
	           <?php 
                $role=$_SESSION['role'];
                if($role=='admin'){ ?>
	<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="span3">&nbsp;&nbsp;&nbsp;&nbsp;<img class="index_logo" height="45" width="100" src="assets/img/logosmall.png"></div>
            </div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
		<nav>
		<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" role="form" method="post">
			<h3><center>Student Information</center></h3>
			<br>
			<div>
				<div class="form-group">
							  	
			</div>
			</div>
			<div>
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Name:</label>
							  <div class="col-md-3">
					<input type="text" name="name" id = "fname" value="<?php  echo $row['name'];?>"class="form-control input-md" placeholder="name" required/> 
						</div>
						</div>
						
						<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Roll Number:</label>
							  <div class="col-md-3">
					<input type="text" name="roll" id = "mname" value="<?php echo $roll;?>"class="form-control input-md"  placeholder="Roll Number" required/> 
					</div>
					</div>
					
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Branch:</label>
							  <div class="col-md-3">
					<input type="text" name="branch" value="<?php echo $row['branch'];?>"id = "lname" class="form-control input-md" placeholder="Branch" required/> 
					</div>
					</div>
					
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Year:</label>
							  <div class="col-md-3">
					<input type="text" name="year" value="<?php echo $row['year'];?>"id = "lname" class="form-control input-md" placeholder="year" required/> 
					</div>
					</div>
					
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Caste:</label>
							  <div class="col-md-3">
					<input type="text" name="caste" value="<?php echo $row['caste'];?>"id = "lname" class="form-control input-md" placeholder="Branch" required/> 
					</div>
					</div>
					
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Category:</label>
							  <div class="col-md-3">
					<input type="text" name="cat" value="<?php echo $row['fee_category'];?>"id = "lname" class="form-control input-md" placeholder="Branch" required/> 
					</div>
					</div>

					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Mode Of Payment:</label>
							  <div class="col-md-3">
					<input type="text" name="mode" value="<?php echo $row['mode'];?>"id = "lname" class="form-control input-md" placeholder="mode" required/> 
					</div>
					</div>
	
					
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Fee:</label>
							  <div class="col-md-3">
						<input type="text" name="fee" value="<?php echo $row['fee'];?>"id = "nname" class="form-control input-md"  placeholder="Fee" required/>
					</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Fee Due:</label>
							  <div class="col-md-3">
							  <input type="text" name="feedue" value="<?php echo $row['feedue'];?>"id = "feedue" class="form-control input-md"  placeholder="Fee Due" required/>
					</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Scholarship:</label>
							  <div class="col-md-3">
						<input type="text" name="scholar" value="<?php echo $row['scholarship'];?>"id = "scholar" class="form-control input-md" title="input number only" placeholder="scholarship amount" required/>
					</div>
				</div>
				
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Accredition Fee:</label>
							  <div class="col-md-3">
					<input type="text" name="accred" value="<?php echo $row['accred'];?>"id = "lname" class="form-control input-md" placeholder="accredition" required/> 
					</div>
					</div>

				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Accredition Fee Due:</label>
							  <div class="col-md-3">
					<input type="text" name="accreddue" value="<?php echo $row['accreddue'];?>"id = "lname" class="form-control input-md" placeholder="accred. due" required/> 
					</div>
					</div>
					
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Miscellaneous Fee:</label>
							  <div class="col-md-3">
					<input type="text" name="misc" value="<?php echo $row['misc'];?>"id = "lname" class="form-control input-md" placeholder="miscellaneous fee" required/> 
					</div>
					</div>

				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Miscellaneous Fee Due:</label>
							  <div class="col-md-3">
					<input type="text" name="miscdue" value="<?php echo $row['miscdue'];?>"id = "lname" class="form-control input-md" placeholder="Misc. due" required/> 
					</div>
					</div>	
	
				
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Contact No.:</label>
							  <div class="col-md-3">
						<input type="text" name="cno" value="<?php echo $row['cellno'];?>"id = "contact" class="form-control input-md" title="input number only" placeholder="Contact Number" required/>
					</div>
				</div>
				
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Email-Id:</label>
							  <div class="col-md-3">
						<input type="text" name="email" value="<?php echo $row['Email_Id'];?>"id = "contact" class="form-control input-md" title="input number only" placeholder="Contact Number" required/>
					</div>
				</div>
				
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Password:</label>
							  <div class="col-md-3">
						<input type="text" name="password" value="<?php echo $dec;?>"id = "contact" class="form-control input-md" title="input number only" placeholder="Password" required/>
					</div>
				</div>
				<div class="control-group">
				<div class="controls" align="center">
				<button type="submit" id="submit" name="update" class="btn btn-success">Update</button>
				<br>
				<br>
				<br>
				<br>
				<br>
				</div>
				</div>
				</div>
				</form>
				</div>
				</div>
				</nav>
				</div>
				
</div>
				<?php
				if(isset($_REQUEST['update'])){
					$name=$_REQUEST['name'];
					$roll=$_REQUEST['roll'];
					$branch=$_REQUEST['branch'];
					$year=$_REQUEST['year'];
					$caste=$_REQUEST['caste'];
					$cat=$_REQUEST['cat'];
					$mode=$_REQUEST['mode'];
					$fee=$_REQUEST['fee'];
					//$feedue=$_REQUEST['feedue'];
					$scholar=$_REQUEST['scholar'];
					$feedue=$fee-$scholar;
					$accred=$_REQUEST['accred'];
					$accreddue=$_REQUEST['accreddue'];
					$misc=$_REQUEST['misc'];
					$miscdue=$_REQUEST['miscdue'];
					$cno=$_REQUEST['cno'];
					$email=$_REQUEST['email'];
					$password=$_REQUEST['password'];
					function encryptIt( $q ) {
						$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
						$qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
						return( $qEncoded );
					}
					$encpass=encryptIt($password);
					//$encpass=md5($pass);
					$update="UPDATE `student` SET `roll`='$roll',`name`='$name',`branch`='$branch',`year`='$year',`caste`='$caste',`fee_category`='$cat',`mode`='$mode',`fee`='$fee',`feedue`='$feedue',`accred`='$accred',`accreddue`='$accreddue',`misc`='$misc',`miscdue`='$miscdue',`scholarship`='$scholar',`cellno`='$cno',`Email_Id`='$email' WHERE roll='$roll'";
					mysql_query($update);
					$update1="update role set password='$encpass' where username='$roll'";
					mysql_query($update1);	
?>
<script>
	alert('Updated the Databases!');
	window.location = "dashboard.php";
</script>
<?php
}?>
	
</div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	</body>


    <?php } 
    else {
        ?>
        <script>
            alert("You are not Authorized to visit this page ");
            window.location="index.php";
        </script>

    <?php } ?>

</html>	