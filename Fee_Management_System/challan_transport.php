<?php
	include('config.php');
	session_start();
	$roll=$_REQUEST['rollno'];
	$sql="select * from student where roll='$roll'";
	$ch="select * from chalanno_transport";
	$q=mysql_query($ch);
	$r=mysql_fetch_array($q);
	$ch=$r['chalanno'];
	$ch=$ch+1;
	$s="update chalanno_transport set chalanno='$ch'";
	mysql_query($s);
	$query=mysql_query($sql);
	$s="select * from student_transport where roll='$roll'";
	$qr=mysql_query($s);
	$ro=mysql_fetch_array($qr);
	$routeno=$ro['routeno'];
	$board=$ro['boarding'];
	$abc="select * from routes where routeno='$routeno'";
	$def=mysql_query($abc);
	$efg=mysql_fetch_array($def);
	$routename=$efg['routename'];
	
	$count=mysql_num_rows($qr);
	$year=date("d-m-Y");
	if($count==1)
		$row=mysql_fetch_array($query);
	else{
?>
<script>
	alert("The Details of Student Not yet Updated!");
	window.location="dashboard.php";
</script>
<?php
		die();
	}
?>
<html>
<head>
		<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
		<script type="text/javascript" src="challan3202_files/wz_jsgraphics.js">
		</script>
		<style type="text/css">
<!--
	span.cls_002{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	div.cls_002{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	span.cls_0022{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none;white-space: nowrap;}
	div.cls_0022{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none;white-space: nowrap;}
	span.cls_003{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	div.cls_003{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	span.cls_0033{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none;white-space: nowrap;}
	div.cls_0033{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none;white-space: nowrap;}
	span.cls_004{font-family:"Calibri Bold",serif;font-size:15.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	div.cls_004{font-family:"Calibri Bold",serif;font-size:15.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	span.cls_0044{font-family:"Calibri Bold",serif;font-size:15.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none;white-space: nowrap;}
	div.cls_0044{font-family:"Calibri Bold",serif;font-size:15.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none;white-space: nowrap;}
	span.cls_005{font-family:"Calibri",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	div.cls_005{font-family:"Calibri",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	span.cls_0055{font-family:"Calibri",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none;white-space: nowrap;}
	div.cls_0055{font-family:"Calibri",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none;white-space: nowrap;}
	span.cls_006{font-family:"Calibri Bold",serif;font-size:13.9px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	div.cls_006{font-family:"Calibri Bold",serif;font-size:13.9px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	span.cls_0066{font-family:"Calibri Bold",serif;font-size:13.9px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none;white-space: nowrap;}
	div.cls_0066{font-family:"Calibri Bold",serif;font-size:13.9px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none;white-space: nowrap;}
	span.cls_007{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	div.cls_007{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	span.cls_0077{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none;white-space: nowrap;}
	div.cls_0077{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none;white-space: nowrap;}

-->
</style>
	</head>
<body onChange="myfunc()" style="white-space:nowrap" >
	<?php 
                $role=$_SESSION['role'];
                if($role=='admin'){ ?>


<form name="forms" method="POST" action="transport_final.php">
<div style="position:absolute;left:350.00px;top:10px" class="cls_002"><span class="cls_002"><hr width="1" size="700" style="border: 1px dashed"></span></div>
<div style="position:absolute;left:700.00px;top:10px" class="cls_002"><span class="cls_002"><hr width="1" size="700" style="border: 1px dashed"></span></div>
<div style="position:absolute;left:1055.00px;top:10px" class="cls_002"><span class="cls_002"><hr width="1" size="700" style="border: 1px dashed"></span></div>
<div style="position:absolute;left:10.00px;top:15px" class="cls_002"><span class="cls_002">Acc. No. 064311100000663&nbsp;&nbsp;&nbsp;&nbsp;QUADRUPLICATE&nbsp;&nbsp;&nbsp;Account No. 064311100000663&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRIPLICATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account No. 064311100000663&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DUPLICATE</span></div> 
<div style="position:absolute;left:10px;top:42px" class="cls_003"><span class="cls_003">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE BANK)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE COLL)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE DEPT)</span></div>
<div style="position:absolute;left:1170px;top:42px" class="cls_003"><span class="cls_003">(TO BE RETAINED BY THE STUDENT)</span></div>
<div style="position:absolute;left:1065px;top:15px" class="cls_0022"><span class="cls_0022">Account No. 064311100000663</span></div>
<div style="position:absolute;left:1320px;top:15px" class="cls_0022"><span class="cls_0022">ORIGINAL</span></div>

<div style="position:absolute;left:10.00px;top:69px" class="cls_003"><span class="cls_003">Challan No.T<input type="text" name="challan" id="cid1" value="<?php echo $r['chalanno'];?>" style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:162.9px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date"value="<?php echo $year;?>" id="dateid1" style="border: none;width: 150px;text-align:center" ></span></div>
<div style="position:absolute;left:360px;top:69px" class="cls_003"><span class="cls_003">Challan No.T<input type="text" name="challan" id="cid2" value="<?php echo $r['chalanno'];?>" style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:510px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" value="<?php echo $year;?>" id="dateid2" style="border: none;width: 150px;text-align:center" ></span></div>
<div style="position:absolute;left:710px;top:69px" class="cls_003"><span class="cls_003">Challan No.T<input type="text" name="challan"id="cid3" value="<?php echo $r['chalanno'];?>"style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:860px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" value="<?php echo $year;?>"id="dateid3"  style="border: none;width: 150px;text-align:center" ></span></div>
<div style="position:absolute;left:1065px;top:69px" class="cls_003"><span class="cls_003">Challan No.T<input type="text" name="challan"id="cid3" value="<?php echo $r['chalanno'];?>"style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:1225px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" value="<?php echo $year;?>" id="dateid4"  style="border: none;width: 150px;text-align:center" ></span></div>

<div style="position:absolute;left:10px;top:96px" class="cls_006"><span class="cls_006">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:357px;top:96px" class="cls_006"><span class="cls_006">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:707px;top:96px" class="cls_006"><span class="cls_006">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:1065px;top:96px" class="cls_006"><span class="cls_006">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:10px;top:123px" class="cls_005"><span class="cls_005">&nbsp;&nbsp;&nbsp;Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:357px;top:123px" class="cls_005"><span class="cls_005">&nbsp;&nbsp;&nbsp;Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:707px;top:123px" class="cls_005"><span class="cls_005">&nbsp;&nbsp;&nbsp;Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:1075px;top:123px" class="cls_005"><span class="cls_005">&nbsp;&nbsp;&nbsp;Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>

<!---------------------------------------------------    Section for Student Details  ---------------------------------->

<!-------------------------  Section for Student Name    ------------------>

<div style="position:absolute;left:10.00px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid1" value="<?php echo $ro['name'];?>" name="sname" placeholder="Enter" pattern="[a-zA-Z ]+"
    oninvalid="setCustomValidity('Please enter  Alphabets only ')"
    onchange="try{setCustomValidity('')}catch(e){}" style="border: none;font-size: 15px;width: 200px;text-align:center" onchange="changename()" ></span></div>

<div style="position:absolute;left:357.05px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid2" value="<?php echo $ro['name'];?>" name="sname" style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>

<div style="position:absolute;left:707px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid3" value="<?php echo $ro['name'];?>" name="sname"  style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>

<div style="position:absolute;left:1065px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid4" value="<?php echo $ro['name'];?>" name="sname"  style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>

<!-------------------------  Section for Student Class Roll No. and Branch    ------------------>


<div style="position:absolute;left:10.00px;top:177px" class="cls_003"><span class="cls_003">TRG No:<input type="text" name="sclass" id="classid1" style="border: none;font-size: 15px;width: 50px;text-align:center" onchange="changeclass()" ></span></div>
<div style="position:absolute;left:115px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid1"value="<?php echo $row['roll'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 95px;text-align:center" onchange="changeroll()"></span></div>
<div style="position:absolute;left:260px;top:177px" class="cls_003"><span class="cls_003">Branch<input type="text" name="sbranch" id="branchid1" value="<?php echo $row['branch'];?>"placeholder="Enter" style="border: none;font-size: 15px;width: 35px;text-align:center" onchange="changebranch()" ></span></div>



<div style="position:absolute;left:357px;top:177px" class="cls_003"><span class="cls_003">TRG No:<input type="text" name="sclass" id="classid2" style="border: none;font-size: 15px;width: 50px;text-align:center" ></span></div>
<div style="position:absolute;left:467px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid2" value="<?php echo $row['roll'];?>"style="border: none;font-size: 15px;width: 95px;text-align:center" ></span></div>
<div style="position:absolute;left:613px;top:177px" class="cls_003"><span class="cls_003">Branch<input type="text" name="sbranch" id="branchid2"value="<?php echo $row['branch'];?>"style="border: none;font-size: 15px;width: 35px;text-align:center" ></span></div>



<div style="position:absolute;left:707px;top:177px" class="cls_003"><span class="cls_003">TRG No:<input type="text" name="sclass" id="classid3"style="border: none;font-size: 15px;width: 50px;text-align:center" ></span></div>
<div style="position:absolute;left:818px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid3" value="<?php echo $row['roll'];?>"style="border: none;font-size: 15px;width: 95px;text-align:center"  ></span></div>
<div style="position:absolute;left:963px;top:177px" class="cls_003"><span class="cls_003">Branch <input type="text" name="sbranch" id="branchid3"value="<?php echo $row['branch'];?>" style="border: none;font-size: 15px;width: 35px;text-align:center" ></span></div>


<div style="position:absolute;left:1065px;top:177px" class="cls_003"><span class="cls_003">TRG No:<input type="text" name="sclass" id="classid4"style="border: none;font-size: 15px;width: 50px;text-align:center" ></span></div>
<div style="position:absolute;left:1175px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid4" value="<?php echo $row['roll'];?>"style="border: none;font-size: 15px;width: 95px;text-align:center"  ></span></div>
<div style="position:absolute;left:1323px;top:177px" class="cls_003"><span class="cls_003">Branch <input type="text" name="sbranch" id="branchid4"value="<?php echo $row['branch'];?>" style="border: none;font-size: 15px;width: 35px;text-align:center" ></span></div>


<!---------------------------------------------------    Section for Bus Route Number And Route Name  ---------------------------------->


<div style="position:absolute;left:10px;top:215px" class="cls_003">
<span class="cls_003">
Bus Number : <input type="text" id="busId1" value="<?php echo $routeno;?>" name="busno" style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBusNo()"></span></div>
<div style="position:absolute;left:10px;top:250px" class="cls_003">
<span class="cls_003">
Bus Route  &nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" id="busRo1" value="<?php echo $routename;?>" name="busrt" style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBusRoute()" ></span></div>
<div style="position:absolute;left:10px;top:285px" class="cls_003">
<span class="cls_003">
Boarding Point : <input type="text" id="boardId1"value="<?php echo $board;?>" name="board" style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBuspoint()"></span></div>

<div style="position:absolute;left:357px;top:215px" class="cls_003">
<span class="cls_003">
Bus Number : <input type="text" id="busId2" value="<?php echo $routeno;?>" name="busno" style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>
<div style="position:absolute;left:357px;top:250px" class="cls_003">
<span class="cls_003">
Bus Route  &nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" id="busRo2" value="<?php echo $routename;?>" name="busrt" style="border: none;font-size: 15px;width: 200px;text-align:center"></span></div>
<div style="position:absolute;left:357px;top:285px" class="cls_003">
<span class="cls_003">
Boarding Point : <input type="text" id="boardId2"value="<?php echo $board;?>" name="board" style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBuspoint()"></span></div>

<div style="position:absolute;left:707px;top:215px" class="cls_003">
<span class="cls_003">
Bus Number : <input type="text" id="busId3" value="<?php echo $routeno;?>" name="busno" style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>
<div style="position:absolute;left:707px;top:250px" class="cls_003">
<span class="cls_003">
Bus Route  &nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" id="busRo3" value="<?php echo $routename;?>" name="busrt" style="border: none;font-size: 15px;width: 200px;text-align:center"></span></div>
<div style="position:absolute;left:707px;top:285px" class="cls_003">
<span class="cls_003">
Boarding Point : <input type="text" id="boardId3" name="board" value="<?php echo $board;?>"style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBuspoint()"></span></div>

<div style="position:absolute;left:1065px;top:215px" class="cls_003">
<span class="cls_003">
Bus Number : <input type="text" id="busId4" value="<?php echo $routeno;?>" name="busno" style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>
<div style="position:absolute;left:1065px;top:250px" class="cls_003">
<span class="cls_003">
Bus Route  &nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" id="busRo4" value="<?php echo $routename;?>" name="busrt" style="border: none;font-size: 15px;width: 200px;text-align:center">
</span>
</div>
<div style="position:absolute;left:1065px;top:285px" class="cls_003">
<span class="cls_003">
Boarding Point : <input type="text" id="boardId4" name="board" value="<?php echo $board;?>"style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBuspoint()"></span></div>




<div style="position:absolute;left:270.02px;top:315px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:618.07px;top:315px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:966.12px;top:315px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:1300px;top:315px" class="cls_003"><span class="cls_003">Rs.</span></div>




<!---------------------------------------------------    Section for Transport Fee  ---------------------------------->



<div style="position:absolute;left:10.00px;top:342px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANSPORT FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="trans" id="univid1"  value="<?php echo $ro['feedue'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:342px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANSPORT FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="trans" id="univid2" value="<?php echo $ro['feedue'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:342px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANSPORT FEE&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="trans" id="univid3" value="<?php echo $ro['feedue'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1065px;top:342px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANSPORT FEE&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid4" value="<?php echo $ro['feedue'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<!---------------------------------------------------    Section for Total Fee  ---------------------------------->

<div style="position:absolute;left:10.00px;top:400px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid1" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357.00px;top:400px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid2" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:400px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid3" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1065px;top:400px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid4" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>



<!---------------------------------------------------    Section for Total Fee in Words ---------------------------------->



<div style="position:absolute;left:10.00px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid1" name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357.05px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid2" name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid3" name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1065px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid4" name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>



<!---------------------------------------------------    Section for Signatures ---------------------------------->




<div style="position:absolute;left:180px;top:550px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:535px;top:550px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:890px;top:550px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:1250px;top:550px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>



<div style="position:absolute;left:10.00px;top:577px" class="cls_003"><span class="cls_003">---------------FOR THE USE OF BANK STAFF---------------</span></div>
<div style="position:absolute;left:357px;top:577px" class="cls_003"><span class="cls_003">---------------FOR THE USE OF BANK STAFF---------------</span></div>
<div style="position:absolute;left:707px;top:577px" class="cls_003"><span class="cls_003">---------------FOR THE USE OF BANK STAFF---------------</span></div>
<div style="position:absolute;left:1065px;top:577px" class="cls_003"><span class="cls_003">---------------FOR THE USE OF BANK STAFF---------------</span></div>



<div style="position:absolute;left:10.00px;top:631px" class="cls_003"><span class="cls_003">Cashier</span></div>
<div style="position:absolute;left:200.02px;top:631px" class="cls_003"><span class="cls_003">Manager/Accountant</span></div>



<div style="position:absolute;left:357px;top:631px" class="cls_003"><span class="cls_003">Cashier</span></div>
<div style="position:absolute;left:547px;top:631px" class="cls_003"><span class="cls_003">Manager/Accountant</span></div>



<div style="position:absolute;left:707px;top:631px" class="cls_003"><span class="cls_003">Cashier</span></div>
<div style="position:absolute;left:897px;top:631px" class="cls_003"><span class="cls_003">Manager/Accountant</span></div>



<div style="position:absolute;left:1065px;top:631px" class="cls_003"><span class="cls_003">Cashier</span></div>
<div style="position:absolute;left:1265px;top:631px" class="cls_003"><span class="cls_003">Manager/Accountant</span></div>



<div style="position:absolute;left:10.00px;top:658px" class="cls_003"><span class="cls_003">This Challan will be accepted in Andhra Bank,</span></div>
<div style="position:absolute;left:10.00px;top:678px" class="cls_003"><span class="cls_003">Kokapet Branch Only.</span></div>



<div style="position:absolute;left:357px;top:658px" class="cls_003"><span class="cls_003">This Challan will be accepted in Andhra Bank,</span></div>
<div style="position:absolute;left:357.00px;top:678px" class="cls_003"><span class="cls_003">Kokapet Branch Only.</span></div>



<div style="position:absolute;left:707px;top:658px" class="cls_003"><span class="cls_003">This Challan will be accepted in Andhra Bank,</span></div>
<div style="position:absolute;left:707.00px;top:678px" class="cls_003"><span class="cls_003">Kokapet Branch Only.</span></div>


<div style="position:absolute;left:1065px;top:658px" class="cls_003"><span class="cls_003">This Challan will be accepted in Andhra Bank,</span></div>
<div style="position:absolute;left:1065.00px;top:678px" class="cls_003"><span class="cls_003">Kokapet Branch Only.</span></div>



<div style="position:absolute;left:270px;top:678" class="cls_003"><span class="cls_003"><input type="submit"  name="save" value="Save"></span></div>
</div>
</form>
<script language="javascript">
/*function myfunc(){
	var date=new Date();
	document.forms.sname.value=date;
	}*/	
function myfunc(){

/*var today = new Date();
document.getElementById('dateid1').value=today.toISOString().substring(0, 10);

document.getElementById('dateid2').value=today.toISOString().substring(0, 10);

document.getElementById('dateid3').value=today.toISOString().substring(0, 10);

document.getElementById('dateid4').value=today.toISOString().substring(0, 10);


var todayTime = new Date(); var month = format(todayTime.getMonth()); var day = format(todayTime.getDate()); var year = format(todayTime.getFullYear()); var now= day+ "/" + month + "/" + year; 

document.getElementById('dateid3').value=now;*/









document.getElementById("univid2").value=document.getElementById("univid1").value;
document.getElementById("univid3").value=document.getElementById("univid1").value;
document.getElementById("univid4").value=document.getElementById("univid1").value;



var univfee=document.getElementById("univid1").value;

total=univfee;

document.getElementById("totalid1").value=total;
document.getElementById("totalid2").value=total;
document.getElementById("totalid3").value=total;
document.getElementById("totalid4").value=total;



var x=document.getElementById("totalid1").value;
var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];


    if ((x = x.toString()).length > 9) return 'overflow';
    var n = ('000000000' + x).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
    document.getElementById("wrdid1").value=str;
	document.getElementById("wrdid2").value=str;
	document.getElementById("wrdid3").value=str;
	document.getElementById("wrdid4").value=str;


}

function changename()
{
document.getElementById("snameid2").value=document.getElementById("snameid1").value;
document.getElementById("snameid3").value=document.getElementById("snameid1").value;
document.getElementById("snameid4").value=document.getElementById("snameid1").value;

}
function changeclass()
{
document.getElementById("classid2").value=document.getElementById("classid1").value;
document.getElementById("classid3").value=document.getElementById("classid1").value;
document.getElementById("classid4").value=document.getElementById("classid1").value;

}
function changeroll()
{
document.getElementById("rollid2").value=document.getElementById("rollid1").value;
document.getElementById("rollid3").value=document.getElementById("rollid1").value;
document.getElementById("rollid4").value=document.getElementById("rollid1").value;

}
function changebranch()
{
document.getElementById("branchid2").value=document.getElementById("branchid1").value;
document.getElementById("branchid3").value=document.getElementById("branchid1").value;
document.getElementById("branchid4").value=document.getElementById("branchid1").value;

}

function changeBusNo(){
	document.getElementById("busId2").value=document.getElementById("busId1").value;
	document.getElementById("busId3").value=document.getElementById("busId1").value
	document.getElementById("busId4").value=document.getElementById("busId1").value
}

function changeBusRoute(){
	document.getElementById("busRo2").value=document.getElementById("busRo1").value;
	document.getElementById("busRo3").value=document.getElementById("busRo1").value;
	document.getElementById("busRo4").value=document.getElementById("busRo1").value;




}
function changeBuspoint(){
	document.getElementById("boardId2").value=document.getElementById("boardId1").value;
	document.getElementById("boardId3").value=document.getElementById("boardId1").value;
	document.getElementById("boardId4").value=document.getElementById("boardId1").value;

}


</script>
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