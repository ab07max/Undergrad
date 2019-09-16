<?php
	include('config.php');
	session_start();
	$class=$_SESSION['class'];
	$roll=$_SESSION['roll'];
	$ch=$_SESSION['ch'];
	$date=$_SESSION['date'];
	$name=$_SESSION['n'];
	$branch=$_SESSION['branch'];
	$univ=$_SESSION['univ'];
	$late=$_SESSION['late'];
	$misc=$_SESSION['misc'];
	$total=$_SESSION['total'];
	$wrd=$_SESSION['wrd'];
	$first=$_SESSION['first'];
	$second=$_SESSION['second'];
	$third=$_SESSION['third'];
	$fourth=$_SESSION['fourth'];
?>
<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_002{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_002{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_003{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_004{font-family:"Calibri Bold",serif;font-size:15.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_004{font-family:"Calibri Bold",serif;font-size:15.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_005{font-family:"Calibri",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_005{font-family:"Calibri",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="challan3202_files/wz_jsgraphics.js"></script>
</head>
<body>
<form name="forms">
<div style="position:absolute;left:50%;margin-left:-756px;top:0px;width:1512px;height:1008px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="challan3202_files/background.jpg" width=1512 height=1008></div>
<div style="position:absolute;left:80.00px;top:69.28px" class="cls_002"><span class="cls_002">Account No. ABC</span></div>
<div style="position:absolute;left:408.25px;top:71.28px" class="cls_002"><span class="cls_002">TRIPLICATE</span></div>
<div style="position:absolute;left:548.05px;top:71.28px" class="cls_002"><span class="cls_002">Account No. ABC</span></div>
<div style="position:absolute;left:879.87px;top:71.28px" class="cls_002"><span class="cls_002">DUPLICATE</span></div>
<div style="position:absolute;left:1016.1px;top:71.28px" class="cls_002"><span class="cls_002">Account No. ABC</span></div>
<div style="position:absolute;left:1347.92px;top:71.28px" class="cls_002"><span class="cls_002">ORIGINAL</span></div>
<div style="position:absolute;left:305.14px;top:103.82px" class="cls_003"><span class="cls_003">(TO BE RETAINED BY THE BANK)</span></div>
<div style="position:absolute;left:710.47px;top:103.82px" class="cls_003"><span class="cls_003">(TO BE RETAINED BY THE DEPARTMENT)</span></div>
<div style="position:absolute;left:1208.62px;top:103.82px" class="cls_003"><span class="cls_003">(TO BE RETAINED BY THE STUDENT)</span></div>
<div style="position:absolute;left:80.00px;top:136.22px" class="cls_003"><span class="cls_003">Challan No.<input type="text" name="challan" id="cid1"  value="<?php echo $ch;?>"style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:313.46px;top:136.22px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" id="dateid1" value="<?php echo $date;?>"style="border: none;width: 150px;text-align:center" ></span></div>
<div style="position:absolute;left:548.05px;top:136.22px" class="cls_003"><span class="cls_003">Challan No.<input type="text" name="challan" id="cid2" value="<?php echo $ch;?>" style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:781.51px;top:136.22px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" id="dateid2" value="<?php echo $date;?>"style="border: none;width: 150px;text-align:center" ></span></div>
<div style="position:absolute;left:1016.1px;top:136.22px" class="cls_003"><span class="cls_003">Challan No.<input type="text" name="challan"id="cid3" value="<?php echo $ch;?>"style="border: none;width: 100px;text-align:center" ></span></div>
<div style="position:absolute;left:1249.56px;top:136.22px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" id="dateid3"  value="<?php echo $date;?>"style="border: none;width: 150px;text-align:center" ></span></div>
<div style="position:absolute;left:90px;top:168.62px" class="cls_004"><span class="cls_004">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:574.37px;top:168.62px" class="cls_004"><span class="cls_004">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:1042.42px;top:168.62px" class="cls_004"><span class="cls_004">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:132.96px;top:202.10px" class="cls_005"><span class="cls_005">Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:601.01px;top:202.10px" class="cls_005"><span class="cls_005">Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:1069.06px;top:202.10px" class="cls_005"><span class="cls_005">Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:80.00px;top:233.66px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid1" value="<?php echo $name;?>" name="sname" placeholder="Enter" pattern="[a-zA-Z ]+"
    oninvalid="setCustomValidity('Plz enter on Alphabets ')"
    onchange="try{setCustomValidity('')}catch(e){}" style="border: none;font-size: 17px;width: 280px;text-align:center;text-decoration: underline" onchange="changename()" ></span></div>
<div style="position:absolute;left:548.05px;top:233.66px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid2" value="<?php echo $name;?>" name="sname" style="border: none; font-size: 17px;width: 280px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1016.1px;top:233.66px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid3" value="<?php echo $name;?>" name="sname"  style="border: none;font-size: 17px;width: 280px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:80.00px;top:266.06px" class="cls_003"><span class="cls_003">Class<input type="text" name="sclass" id="classid1"value="<?php echo $class;?>" placeholder="Enter" style="border: none;font-size: 17px;width: 65px;text-align:center;text-decoration: underline" onchange="changeclass()" ></span></div>
<div style="position:absolute;left:182.54px;top:266.06px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid1"value="<?php echo $roll;?>" placeholder="Enter" style="border: none;font-size: 17px;width: 130px;text-align:center;text-decoration: underline" onchange="changeroll()"></span></div>
<div style="position:absolute;left:363.08px;top:266.06px" class="cls_003"><span class="cls_003">Branch<input type="text" name="sbranch" id="branchid1" value="<?php echo $branch;?>"placeholder="Enter" style="border: none;font-size: 17px;width: 65px;text-align:center;text-decoration: underline" onchange="changebranch()" ></span></div>
<div style="position:absolute;left:548.05px;top:266.06px" class="cls_003"><span class="cls_003">Class <input type="text" name="sclass" id="classid2" value="<?php echo $class;?>"style="border: none;font-size: 17px;width: 65px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:654.21px;top:266.06px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid2" value="<?php echo $roll;?>"style="border: none;font-size: 17px;width: 130px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:834.56px;top:266.06px" class="cls_003"><span class="cls_003">Branch<input type="text" name="sbranch" id="branchid2"value="<?php echo $branch;?>"style="border: none;font-size: 17px;width: 65px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1016.1px;top:266.06px" class="cls_003"><span class="cls_003">Class  <input type="text" name="sclass" id="classid3"value="<?php echo $class;?>"style="border: none;font-size: 17px;width: 65px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1122.26px;top:266.06px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid3" value="<?php echo $roll;?>"style="border: none;font-size: 17px;width: 130px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1302.84px;top:266.06px" class="cls_003"><span class="cls_003">Branch <input type="text" name="sbranch" id="branchid3"value="<?php echo $branch;?>" style="border: none;font-size: 17px;width: 65px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:80.00px;top:298.61px" class="cls_003"><span class="cls_003"><?php echo $first?></span></div>
<div style="position:absolute;left:548.05px;top:298.61px" class="cls_003"><span class="cls_003"><?php echo $first?></span></div>
<div style="position:absolute;left:1016.1px;top:298.61px" class="cls_003"><span class="cls_003"><?php echo $first?></span></div>
<div style="position:absolute;left:80.00px;top:331.01px" class="cls_003"><span class="cls_003"><?php echo $second?></span></div>
<div style="position:absolute;left:548.05px;top:331.01px" class="cls_003"><span class="cls_003"><?php echo $second?></span></div>
<div style="position:absolute;left:1016.1px;top:331.01px" class="cls_003"><span class="cls_003"><?php echo $second?></span></div>
<div style="position:absolute;left:80.00px;top:363.53px" class="cls_003"><span class="cls_003"><?php echo $third?></span></div>
<div style="position:absolute;left:548.05px;top:363.53px" class="cls_003"><span class="cls_003"><?php echo $third?></span></div>
<div style="position:absolute;left:1016.1px;top:363.53px" class="cls_003"><span class="cls_003"><?php echo $third?></span></div>
<div style="position:absolute;left:80.00px;top:396.05px" class="cls_003"><span class="cls_003"><?php echo $fourth?></span></div>
<div style="position:absolute;left:548.05px;top:396.05px" class="cls_003"><span class="cls_003"><?php echo $fourth?></span></div>
<div style="position:absolute;left:1016.1px;top:396.05px" class="cls_003"><span class="cls_003"><?php echo $fourth?></span></div>
<div style="position:absolute;left:360.02px;top:430.85px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:432.05px;top:430.85px" class="cls_003"><span class="cls_003">Ps.</span></div>
<div style="position:absolute;left:828.07px;top:430.85px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:900.07px;top:430.85px" class="cls_003"><span class="cls_003">Ps.</span></div>
<div style="position:absolute;left:1296.12px;top:430.85px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:1368.12px;top:430.85px" class="cls_003"><span class="cls_003">Ps.</span></div>
<div style="position:absolute;left:80.00px;top:463.39px" class="cls_003"><span class="cls_003">l</span></div>
<div style="position:absolute;left:108.00px;top:463.39px" class="cls_003"><span class="cls_003">UNIVERSITY FEE DUE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid1"  value="<?php echo $univ?>" placeholder="Enter" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:548.05px;top:463.39px" class="cls_003"><span class="cls_003">l</span></div> 
<div style="position:absolute;left:576.05px;top:463.39px" class="cls_003"><span class="cls_003">UNIVERSITY FEE DUE  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid2" value="<?php echo $univ?>" placeholder="Enter" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1016.1px;top:463.39px" class="cls_003"><span class="cls_003">l</span></div>
<div style="position:absolute;left:1044.10px;top:463.39px" class="cls_003"><span class="cls_003">UNIVERSITY FEE DUE &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid3" value="<?php echo $univ?>" placeholder="Enter" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:80.00px;top:495.79px" class="cls_003"><span class="cls_003">l l</span></div>
<div style="position:absolute;left:108.00px;top:495.79px" class="cls_003"><span class="cls_003">LATE FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="late" id="ltfid1" value="<?php echo $late;?>" placeholder="Enter" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:548.05px;top:495.79px" class="cls_003"><span class="cls_003">l l</span></div>
<div style="position:absolute;left:576.05px;top:495.79px" class="cls_003"><span class="cls_003">LATE FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="late" id="ltfid2" value="<?php echo $late;?>" placeholder="Enter" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1016.1px;top:495.79px" class="cls_003"><span class="cls_003">l l</span></div>
<div style="position:absolute;left:1044.10px;top:495.79px" class="cls_003"><span class="cls_003">LATE FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="late" id="ltfid3" value="<?php echo $late;?>" placeholder="Enter" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:80.00px;top:528.31px" class="cls_003"><span class="cls_003">l l l</span></div>
<div style="position:absolute;left:108.00px;top:528.31px" class="cls_003"><span class="cls_003">ANY OTHER FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="misc" id="miscid1" value="<?php echo $misc;?>" placeholder="Enter" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:548.05px;top:528.31px" class="cls_003"><span class="cls_003">l l l</span></div>
<div style="position:absolute;left:576.05px;top:528.31px" class="cls_003"><span class="cls_003">ANY OTHER FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="misc" id="miscid2" value="<?php echo $misc;?>" placeholder="Enter" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1016.1px;top:528.31px" class="cls_003"><span class="cls_003">l l l</span></div>
<div style="position:absolute;left:1044.10px;top:528.31px" class="cls_003"><span class="cls_003">ANY OTHER FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="misc" id="miscid3" value="<?php echo $misc;?>" placeholder="Enter" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:80.00px;top:563.35px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid1" value="<?php echo $total;?>" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:548.05px;top:563.35px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid2" value="<?php echo $total;?>" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1016.1px;top:563.35px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid3" value="<?php echo $total;?>" style="border: none;font-size: 17px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:80.00px;top:630.67px" class="cls_003"><span class="cls_003">In Words Rupees <br> <input type="text" id="wrdid1" value="<?php echo $wrd;?>" name="wrd" style="border: none;font-size: 16px;width: 430px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:548.05px;top:630.67px" class="cls_003"><span class="cls_003">In Words Rupees <br> <input type="text" id="wrdid2" name="wrd" value="<?php echo $wrd;?>" style="border: none;font-size: 16px;width: 430px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:1016.1px;top:630.67px" class="cls_003"><span class="cls_003">In Words Rupees <br> <input type="text" id="wrdid3" name="wrd" value="<?php echo $wrd;?>" style="border: none;font-size: 16px;width: 430px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:342.02px;top:728.26px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:810.07px;top:728.26px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:1278.12px;top:728.26px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:80.00px;top:763.06px" class="cls_003"><span class="cls_003">-------------------------FOR THE USE OF BANK STAFF-------------------------</span></div>
<div style="position:absolute;left:548.05px;top:763.06px" class="cls_003"><span class="cls_003">-------------------------FOR THE USE OF BANK STAFF-------------------------</span></div>
<div style="position:absolute;left:1016.1px;top:763.06px" class="cls_003"><span class="cls_003">-------------------------FOR THE USE OF BANK STAFF-------------------------</span></div>
<div style="position:absolute;left:80.00px;top:860.64px" class="cls_003"><span class="cls_003">Cashier</span></div>
<div style="position:absolute;left:360.02px;top:860.64px" class="cls_003"><span class="cls_003">Manager/Accountant</span></div>
<div style="position:absolute;left:548.05px;top:860.64px" class="cls_003"><span class="cls_003">Cashier</span></div>
<div style="position:absolute;left:828.07px;top:860.64px" class="cls_003"><span class="cls_003">Manager/Accountant</span></div>
<div style="position:absolute;left:1016.1px;top:860.64px" class="cls_003"><span class="cls_003">Cashier</span></div>
<div style="position:absolute;left:1274.52px;top:860.64px" class="cls_003"><span class="cls_003">Manager/Accountant</span></div>
<div style="position:absolute;left:80.00px;top:895.44px" class="cls_003"><span class="cls_003">The Challan will be accepted in Andhra Bank, Kokapet Branch Only</span></div>
<div style="position:absolute;left:548.05px;top:895.44px" class="cls_003"><span class="cls_003">The Challan will be accepted in Andhra Bank, Kokapet Branch Only</span></div>
<div style="position:absolute;left:1016.1px;top:895.44px" class="cls_003"><span class="cls_003">The Challan will be accepted in Andhra Bank, Kokapet Branch Only</span></div>
<div style="position:absolute;left:80.00px;top:920.44px" class="cls_003"><span class="cls_003"><input type="button" value="Print" onClick="x()" id="print"></span></div>
<div style="position:absolute;left:250.00px;top:920.44px" class="cls_003"><span class="cls_003"><input type="button" value="back" onclick="window.location='dashboard.php'" id="back"></span></div>
</div>
</form>
</body>
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