<?php
    include('config.php');
    //require_once('session1.php');
    session_start();
    if(isset($_SESSION['role']))
    {

?>
<html>
    <html lang="en">

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

  <link rel="shortcut icon" href="assets/img/calculator156.png">

    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <title>Home</title>

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
    <![endif]-->     <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <body>

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
               <div class="span3">&nbsp;&nbsp;&nbsp;&nbsp;<img class="index_logo" height="45" width="100" src="assets/img/logosmall1666.png"></div>
            </div>
            <!-- Top Menu Items -->
            

                <?php 
                $role=$_SESSION['role'];

                if($role=='admin'){ ?>


                <!--  ---------------------------------- Top Menu  Bar Items for Admin  ---------------------------------------->

                <ul class="nav navbar-right top-nav">             
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;
                <?php   if(isset($_SESSION['adminname']))
                { 
                echo 
                "".$_SESSION['adminname']. " ";
                }

                ?>
                <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="viewuser.php"><i class="fa fa-users fa-lg"></i>&nbsp;View User</a>
                    </li>
                    <li>
                        <a href="adduser.php"><i class="fa fa-users fa-lg"></i>&nbsp;Add New User</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a>
                    </li>

                    </ul>
                </li>
                </ul>
                <!--  ---------------------------------- Side Menu  Bar Items for Admin  ---------------------------------------->

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>

                    <li>
               			<a href="javascript:;" data-toggle="collapse" data-target="#demon"><i class="fa fa-sitemap fa"></i> Student <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demon" class="collapse">
                            <li>
                                <a href="add.php" class="glyphicon glyphicon-plus">&nbsp;Add Student</a>
                            </li>
							<li>
                                <a href="add_transport.php" class="glyphicon glyphicon-plus">&nbsp;Transport Details</a>
                            </li>
                            <li>
                                <a href="viewst.php" class="glyphicon glyphicon-eye-open">&nbsp;View Student</a>
                            </li>                            
                        </ul>
                    </li>
                    
                    <li>
                        <!--<a href="updatest.php"><i class=""></i>&nbsp; Update Student Details</a>-->
						<a href="javascript:;" data-toggle="collapse" data-target="#demon_std"><i class="fa fa-sitemap fa"></i>&nbsp;Edit Student Details<i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="demon_std" class="collapse">
                            <li>
                                <a href="updatest.php" class="glyphicon glyphicon-eye-open">&nbsp;Academic Details</a>
                            </li>
                            <li>
                                <a href="updatest_transport.php" class="glyphicon glyphicon-eye-open">&nbsp;Transport Details</a>
                            </li>
                        </ul>
					</li>
					
                    <li>
						<a href="javascript:;" data-toggle="collapse" data-target="#demon_s"><i class="fa fa-sitemap fa"></i>&nbsp;Update Fee Details<i class="fa fa-fw fa-caret-down"></i></a>
                        <!--<a href="updatefee.php"><i class="glyphicon glyphicon-tint"></i>&nbsp;Update Fee Details</a>-->
						<ul id="demon_s" class="collapse">
                            <li>
                                <a href="updatefee.php" class="glyphicon glyphicon-eye-open">&nbsp;Academic Fee</a>
                            </li>
                            <li>
                                <a href="updatefee_transport.php" class="glyphicon glyphicon-eye-open">&nbsp;Transport Fee</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demons"><i class="glyphicon glyphicon-tint"></i> Generate Chalan<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demons" class="collapse">
                            <li>
                                <a href="generate.php" class="glyphicon glyphicon-eye-open">&nbsp;Fee Chalan</a>
                            </li>
                            <li>
                                <a href="generate_transport.php" class="glyphicon glyphicon-eye-open">&nbsp;Transport Chalan</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demons_r"><i class="glyphicon glyphicon-tint"></i> Receipt<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demons_r" class="collapse">
						<li>
                                <a href="generate_receipt.php" class="glyphicon glyphicon-eye-open">&nbsp;Generate Receipt</a>
                            </li>
						<li>
                                <a href="report.php" class="glyphicon glyphicon-eye-open">&nbsp;Receipts Report</a>
                            </li>	
						</ul>
                    </li>
					<li>
                        <!--<a href="updatest.php"><i class=""></i>&nbsp; Update Student Details</a>-->
						<a href="javascript:;" data-toggle="collapse" data-target="#demon_d"><i class="fa fa-sitemap fa"></i>&nbsp;Register<i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="demon_d" class="collapse">
                            <li>
                                 <a href="viewtr.php" class="glyphicon glyphicon-eye-open">&nbsp;Day-Wise</a>
                               </li>
                            <li>
								<a href="viewtrm.php" class="glyphicon glyphicon-eye-open">&nbsp;Month-Wise</a>
                            </li>
                        </ul>
					</li>
					<li>
                        <!--<a href="updatest.php"><i class=""></i>&nbsp; Update Student Details</a>-->
						<a href="javascript:;" data-toggle="collapse" data-target="#demon_f"><i class="fa fa-sitemap fa"></i>&nbsp;Fee Drafts<i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="demon_f" class="collapse">
                            <li>
                                 <a href="feeout.php" class="glyphicon glyphicon-eye-open">&nbsp;Fees Outstanding</a>
                               </li>
                            <li>
                                <a href="ex.php" class="glyphicon glyphicon-eye-open">&nbsp;Excess Fee Check</a>
                            </li>
							<li>
                                <a href="co.php" class="glyphicon glyphicon-eye-open">&nbsp;Collection Statement</a>
                            </li>
                        </ul>
					</li>
                    <li>
                        <a href="export.php"><i class="glyphicon glyphicon-eye-open"></i> Generate Database Backup</a>
                    </li>
                    <li>
                        <a href="aboutus.php"><i class="glyphicon glyphicon-info-sign"></i> About Us</a>
                    </li>
                    </ul>
            </div>
                </nav>


                <?php }
                else if($role=='student') { ?>
                <!--  ---------------------------------- Top Menu  Bar Items for Student ---------------------------------------->


                <ul class="nav navbar-right top-nav">
                        
                     <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;
                    <?php   if(isset($_SESSION['username']))
                    { 
                    echo "".$_SESSION['username']." ";
                    }

                    ?>
                    <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>
                            <a href="stview.php"><i class="fa fa-users fa-lg"></i>&nbsp;View Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="changepw.php"><i class="fa fa-users fa-lg"></i>&nbsp;Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a>
                        </li>
                        </ul>
                        </li>
                  </ul>

                    <!--  ---------------------------------- Side Menu  Bar Items for Student ---------------------------------------->


                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li class="active">
                                 <a href="dashboard.php"><i class="fa fa-fw fa-home"></i> Home</a>
                            </li>
                        <li>
                                <a href="feedet.php"><i class="glyphicon glyphicon-import"></i>&nbsp; Fee Details</a>
                        </li>
                        </ul>
                    </div>
                    </nav>
                
                    







                <!--  ---------------------------------- Top Menu  Bar Items for Principal  ---------------------------------------->

                <?php }
                else if($role=='principal') { ?>

                <ul class="nav navbar-right top-nav">             
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;
                <?php   if(isset($_SESSION['adminname']))
                { 
                echo 
                "".$_SESSION['adminname']. " ";
                }

                ?>
                <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    
                        <li class="divider"></li>
                        <li>
                                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a>
                        </li>
                    </ul>
                </li>
                </ul>
                <!--  ---------------------------------- Side Menu  Bar Items for Principal  ---------------------------------------->

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demon"><i class="fa fa-sitemap fa"></i> Student <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demon" class="collapse">
                            <li>
                                <a href="viewstu_History.php" class="glyphicon glyphicon-eye-open">&nbsp;View Student   Payment History </a>
                            </li>
                        </ul>
                    </li>
                    
 
                    <li>
                        
                        
                    </li>
                    
                    <li>
                        <a href="aboutus.php"><i class="glyphicon glyphicon-info-sign"></i> About Us</a>
                </nav>



                     <?php } ?>



                     <!--  ---------------------------------- End of  Menu Items ---------------------------------------->




                




                      
    <div id="page-wrapper">
            <div class="container-fluid">
            <nav>
            <head>
     <div class="row-fluid">    
              <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <i class="icon-info-sign"></i>  <center><h4>Welcome to MGIT Fee Management System!</h4></center>
                    </div>
               </div>
       </div>
                <!-- Page Heading -->
      <div class="row">
        <!--=================================================== site1 ===================================================-->
                <?php
                $monthh = strtotime('now');
                $mon = date('F',$monthh);
                ?>
              <div id="g-site1" class="col-xs-12">
                  <div class="demo-container">
                    <strong><h3><center>Welcome to MGIT Fee Management System! </center></h3></strong>
                        <div id="block_bg" class="block">   
                            <div class="navbar navbar-inner block-header">
                            <div class="block-content collapse in">
                                <div class="span12">
                                <form class="form-horizontal" role="form" method="post">
                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                <br>
                                <br>
                    
                    </table>
                    
                    <br>
                    <br>
                    <br>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
                      </div>
                  </div>
              </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            </head>
            </nav>
            </div>
            <!-- /.container-fluid -->

        </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

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
    <?php include('script.php'); 

    }
    else
    {

    ?>

    <script>


            alert("Your session has been expired,Please Login To Continue");
            window.location="index.php";
    </script>
    <?php
    }
    ?>   

</body>

</html>
        <!--<center><h1>Administration Page</h1>
            <hr>
            <h3>Welcome </h3></center>
            <p align="right"><a href="logout.php">Logout</a><p><p>
            <a href="add.html">Add a student</a><p><p>
            <a href="updatest.html">Update student details</a><p><p>
            <a href="update.html">Update Fee Details</a><p><p>
            <a href="rollno.html">Generate Challan</a>
    </body>
</html>-->  