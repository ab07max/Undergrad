<?php
	include('config.php');
	if (isset($_POST['register'])){
		$name=$_REQUEST['name'];
		$roll=$_REQUEST['roll'];
		$abc="select * from student where roll='$roll'";
		$def=mysql_query($abc);
		$count1=mysql_num_rows($def);
		if($count1==0){
?>
<script>
	alert("The Student doesnt exist. Add The Student First!");
	window.location="add.php";
</script>
<?php			die();
		}
		$routeno=$_REQUEST['routeno'];
		$boarding=$_REQUEST['board'];
		$feedue=$_REQUEST['feedue'];
		//$feedue=$_REQUEST['feedue'];
		$sql="select roll from student_transport";
		$query=mysql_query($sql);
		$count=mysql_num_rows($query);
		$i=1;
		while($row=mysql_fetch_array($query)){
			if($row['roll']==$roll){
?>
<script>
	alert('Student Transport Details Already Exists!');
	window.location = "dashboard.php";
</script>
<?php
			}
			else{
				if($i==$count){
					$p="INSERT INTO `student_transport`(`roll`, `name`, `routeno`, `boarding`, `feedue`) VALUES ('$roll','$name','$routeno','$boarding','$feedue')";
					mysql_query($p);
				}
				$i=$i+1;
			}
		}	
?>
<script>
	alert('Succsessfully Save!');
	window.location = "dashboard.php";
</script>
<?php
}?>







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
    <title>Register Student Transport</title>

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
				session_start();
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
			<h3><center>Transport Information</center></h3>
			<br>
			<div>
				<div class="form-group">
							  	
			</div>
			</div>
			<div>
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Name:</label>
							  <div class="col-md-3">
					<input type="text" name="name" id = "fname" class="form-control input-md" placeholder="name" required/> 
						</div>
						</div>
						
						<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Roll Number:</label>
							  <div class="col-md-3">
					<input type="text" name="roll" id = "mname" class="form-control input-md"  placeholder="Roll Number" required/> 
					</div>
					</div>
					
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Route Number:</label>
							  <div class="col-md-3">
					<input type="text" name="routeno" id = "lname" class="form-control input-md" placeholder="Route" required/> 
					</div>
					</div>
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Boarding Point:</label>
							  <div class="col-md-3">
					<input type="text" name="board" id = "board" class="form-control input-md" placeholder="Boarding" required/> 
					</div>
					</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Fee Amount:</label>
							  <div class="col-md-3">
						<input type="text" name="feedue" id = "nname" class="form-control input-md"  placeholder="Amount" required/>
					</div>
				</div>
				<div class="control-group">
				<div class="controls" align="center">
				<button type="submit" id="submit" name="register" class="btn btn-success">Save</button>
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

	<?php }	?>

</html>