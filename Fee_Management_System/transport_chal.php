<?php
	include('config.php');
	session_start();
	$trg=$_SESSION['class'];
	$roll=$_SESSION['roll'];
	$ch=$_SESSION['ch'];
	$date=$_SESSION['date'];
	$name=$_SESSION['name'];
	$branch=$_SESSION['branch'];
	$trans=$_SESSION['trans'];
	$total=$_SESSION['total'];
	$wrd=$_SESSION['wrd'];
	$busrt=$_SESSION['busrt'];
	$busno=$_SESSION['busno'];
	$bp=$_SESSION['board'];
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
<body style="white-space:nowrap" >
	<?php 
                $role=$_SESSION['role'];
                if($role=='admin'){ ?>


<form name="forms" method="POST" action="">
<div style="position:absolute;left:350.00px;top:10px" class="cls_002"><span class="cls_002"><hr width="1" size="700" style="border: 1px dashed"></span></div>
<div style="position:absolute;left:700.00px;top:10px" class="cls_002"><span class="cls_002"><hr width="1" size="700" style="border: 1px dashed"></span></div>
<div style="position:absolute;left:1055.00px;top:10px" class="cls_002"><span class="cls_002"><hr width="1" size="700" style="border: 1px dashed"></span></div>
<div style="position:absolute;left:10.00px;top:15px" class="cls_002"><span class="cls_002">Acc. No. 064311100000663&nbsp;&nbsp;&nbsp;&nbsp;QUADRUPLICATE&nbsp;&nbsp;&nbsp;Account No. 064311100000663&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRIPLICATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account No. 064311100000663&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DUPLICATE</span></div> 
<div style="position:absolute;left:10px;top:42px" class="cls_003"><span class="cls_003">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE BANK)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE COLLEGE)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE DEPT)</span></div>
<div style="position:absolute;left:1170px;top:42px" class="cls_003"><span class="cls_003">(TO BE RETAINED BY THE STUDENT)</span></div>
<div style="position:absolute;left:1065px;top:15px" class="cls_0022"><span class="cls_0022">Account No. 064311100000663</span></div>
<div style="position:absolute;left:1320px;top:15px" class="cls_0022"><span class="cls_0022">ORIGINAL</span></div>

<div style="position:absolute;left:10.00px;top:69px" class="cls_003"><span class="cls_003">Challan No.T<input type="text" name="challan" id="cid1" value="<?php echo $ch;?>" style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:162.9px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" id="dateid1" style="border: none;width: 150px;text-align:center" value="<?php echo $date;?>"></span></div>
<div style="position:absolute;left:360px;top:69px" class="cls_003"><span class="cls_003">Challan No.T<input type="text" name="challan" id="cid2" value="<?php echo $ch;?>" style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:510px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" id="dateid2" style="border: none;width: 150px;text-align:center" value="<?php echo $date;?>"></span></div>
<div style="position:absolute;left:710px;top:69px" class="cls_003"><span class="cls_003">Challan No.T<input type="text" name="challan"id="cid3" value="<?php echo $ch;?>"style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:860px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" id="dateid3"  style="border: none;width: 150px;text-align:center" value="<?php echo $date;?>"></span></div>
<div style="position:absolute;left:1065px;top:69px" class="cls_003"><span class="cls_003">Challan No.T<input type="text" name="challan"id="cid3" value="<?php echo $ch;?>"style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:1225px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" id="dateid4"  style="border: none;width: 150px;text-align:center" value="<?php echo $date;?>"></span></div>

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

<div style="position:absolute;left:10.00px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid1" value="<?php echo $name;?>" name="sname" placeholder="Enter" pattern="[a-zA-Z ]+"
    oninvalid="setCustomValidity('Please enter  Alphabets only ')"
    onchange="try{setCustomValidity('')}catch(e){}" style="border: none;font-size: 15px;width: 200px;text-align:center" onchange="changename()" ></span></div>

<div style="position:absolute;left:357.05px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid2" value="<?php echo $name;?>" name="sname" style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>

<div style="position:absolute;left:707px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid3" value="<?php echo $name;?>" name="sname"  style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>

<div style="position:absolute;left:1065px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid4" value="<?php echo $name;?>" name="sname"  style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>

<!-------------------------  Section for Student Class Roll No. and Branch    ------------------>


<div style="position:absolute;left:10.00px;top:177px" class="cls_003"><span class="cls_003">TRG No:<input type="text" name="sclass" id="classid1" style="border: none;font-size: 15px;width: 50px;text-align:center" value="<?php echo $trg;?>" ></span></div>
<div style="position:absolute;left:115px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid1"value="<?php echo $roll;?>" placeholder="Enter" style="border: none;font-size: 15px;width: 95px;text-align:center" ></span></div>
<div style="position:absolute;left:260px;top:177px" class="cls_003"><span class="cls_003">Branch<input type="text" name="sbranch" id="branchid1" value="<?php echo $branch;?>"placeholder="Enter" style="border: none;font-size: 15px;width: 35px;text-align:center"></span></div>



<div style="position:absolute;left:357px;top:177px" class="cls_003"><span class="cls_003">TRG No:<input type="text" name="sclass" id="classid2" style="border: none;font-size: 15px;width: 50px;text-align:center" value="<?php echo $trg;?>"></span></div>
<div style="position:absolute;left:467px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid2" value="<?php echo $roll;?>"style="border: none;font-size: 15px;width: 95px;text-align:center" ></span></div>
<div style="position:absolute;left:613px;top:177px" class="cls_003"><span class="cls_003">Branch<input type="text" name="sbranch" id="branchid2"value="<?php echo $branch;?>"style="border: none;font-size: 15px;width: 35px;text-align:center" ></span></div>



<div style="position:absolute;left:707px;top:177px" class="cls_003"><span class="cls_003">TRG No:<input type="text" name="sclass" id="classid3"style="border: none;font-size: 15px;width: 50px;text-align:center" value="<?php echo $trg;?>"></span></div>
<div style="position:absolute;left:818px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid3" value="<?php echo $roll;?>"style="border: none;font-size: 15px;width: 95px;text-align:center"  ></span></div>
<div style="position:absolute;left:963px;top:177px" class="cls_003"><span class="cls_003">Branch <input type="text" name="sbranch" id="branchid3"value="<?php echo $branch;?>" style="border: none;font-size: 15px;width: 35px;text-align:center" ></span></div>


<div style="position:absolute;left:1065px;top:177px" class="cls_003"><span class="cls_003">TRG No:<input type="text" name="sclass" id="classid4"style="border: none;font-size: 15px;width: 50px;text-align:center" value="<?php echo $trg;?>"></span></div>
<div style="position:absolute;left:1175px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid4" value="<?php echo $roll;?>"style="border: none;font-size: 15px;width: 95px;text-align:center"  ></span></div>
<div style="position:absolute;left:1323px;top:177px" class="cls_003"><span class="cls_003">Branch <input type="text" name="sbranch" id="branchid4"value="<?php echo $branch;?>" style="border: none;font-size: 15px;width: 35px;text-align:center" ></span></div>


<!---------------------------------------------------    Section for Bus Route Number And Route Name  ---------------------------------->


<div style="position:absolute;left:10px;top:215px" class="cls_003">
<span class="cls_003">
Bus Number : <input type="text" id="busId1" value="<?php echo $busno;?>" name="busno" style="border: none;font-size: 15px;width: 200px;text-align:center"></span></div>
<div style="position:absolute;left:10px;top:250px" class="cls_003">
<span class="cls_003">
Bus Route  &nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" id="busRo1" value="<?php echo $busrt;?>" name="busrt" style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBusRoute()" ></span></div>
<div style="position:absolute;left:10px;top:285px" class="cls_003">
<span class="cls_003">
Boarding Point : <input type="text" id="boardId1" value="<?php echo $bp;?>"name="board" style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBuspoint()"></span></div>


<div style="position:absolute;left:357px;top:215px" class="cls_003">
<span class="cls_003">
Bus Number : <input type="text" id="busId2" value="<?php echo $busno;?>" name="busno" style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>
<div style="position:absolute;left:357px;top:250px" class="cls_003">
<span class="cls_003">
Bus Route  &nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" id="busRo2" value="<?php echo $busrt;?>" name="busrt" style="border: none;font-size: 15px;width: 200px;text-align:center"></span></div>
<div style="position:absolute;left:357px;top:285px" class="cls_003">
<span class="cls_003">
Boarding Point : <input type="text" id="boardId2" value="<?php echo $bp;?>"name="board" style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBuspoint()"></span></div>


<div style="position:absolute;left:707px;top:215px" class="cls_003">
<span class="cls_003">
Bus Number : <input type="text" id="busId3" value="<?php echo $busno;?>" name="busno" style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>
<div style="position:absolute;left:707px;top:250px" class="cls_003">
<span class="cls_003">
Bus Route  &nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" id="busRo3" value="<?php echo $busrt;?>" name="busrt" style="border: none;font-size: 15px;width: 200px;text-align:center"></span></div>
<div style="position:absolute;left:707px;top:285px" class="cls_003">
<span class="cls_003">
Boarding Point : <input type="text" id="boardId3" value="<?php echo $bp;?>"name="board" style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBuspoint()"></span></div>


<div style="position:absolute;left:1065px;top:215px" class="cls_003">
<span class="cls_003">
Bus Number : <input type="text" id="busId4" value="<?php echo $busno;?>" name="busno" style="border: none;font-size: 15px;width: 200px;text-align:center" ></span></div>
<div style="position:absolute;left:1065px;top:250px" class="cls_003">
<span class="cls_003">
Bus Route  &nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" id="busRo4" value="<?php echo $busrt;?>" name="busrt" style="border: none;font-size: 15px;width: 200px;text-align:center">
</span>
</div>
<div style="position:absolute;left:1065px;top:285px" class="cls_003">
<span class="cls_003">
Boarding Point : <input type="text" id="boardId4" value="<?php echo $bp;?>"name="board" style="border: none;font-size: 15px;width: 200px;text-align:center" onChange="changeBuspoint()"></span></div>





<div style="position:absolute;left:270.02px;top:315px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:618.07px;top:315px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:966.12px;top:315px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:1300px;top:315px" class="cls_003"><span class="cls_003">Rs.</span></div>




<!---------------------------------------------------    Section for Transport Fee  ---------------------------------->



<div style="position:absolute;left:10.00px;top:342px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANSPORT FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="trans" id="univid1"  value="<?php echo $trans;?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:342px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANSPORT FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="trans" id="univid2" value="<?php echo $trans;?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:342px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANSPORT FEE&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="trans" id="univid3" value="<?php echo $trans;?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1065px;top:342px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANSPORT FEE&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid4" value="<?php echo $trans;?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<!---------------------------------------------------    Section for Total Fee  ---------------------------------->

<div style="position:absolute;left:10.00px;top:400px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid1" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" value="<?php echo $total;?>"></span></div>
<div style="position:absolute;left:357.00px;top:400px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid2" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" value="<?php echo $total;?>"></span></div>
<div style="position:absolute;left:707px;top:400px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid3" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" value="<?php echo $total;?>"></span></div>
<div style="position:absolute;left:1065px;top:400px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid4" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" value="<?php echo $total;?>"></span></div>



<!---------------------------------------------------    Section for Total Fee in Words ---------------------------------->



<div style="position:absolute;left:10.00px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid1" value="<?php echo $wrd;?>" name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357.05px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid2" name="wrd" value="<?php echo $wrd;?>"style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid3" name="wrd" value="<?php echo $wrd;?>"style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1065px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid4" name="wrd" value="<?php echo $wrd;?>"style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>



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


<div style="position:absolute;left:250px;top:678" class="cls_003"><span class="cls_003"><input type="button"  name="print" value="print" id="print" onclick="x()"></span></div>
<div style="position:absolute;left:300px;top:678px" class="cls_003"><span class="cls_003"><input type="button" value="back" onclick="window.location='dashboard.php'" id="back"></span></div>

</div>
</form>
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
<script>
	
	function x(){
		var y=document.getElementById("print");
		var k=document.getElementById("back");
		y.style.visibility="hidden";
		k.style.visibility="hidden";
		window.print();
		y.style.visibility="visible";
		k.style.visibility="visible";
	}
</script>