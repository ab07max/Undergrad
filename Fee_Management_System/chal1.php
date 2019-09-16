<?php
	include('config.php');
	session_start();
	$class=$_SESSION['class'];
	$roll=$_SESSION['roll'];
	$ch=$_SESSION['ch'];
	$date=$_SESSION['date'];
	$name=$_SESSION['name'];
	$branch=$_SESSION['branch'];
	$univ=$_SESSION['univ'];
	$accred=$_SESSION['acc'];
	$misc=$_SESSION['misc'];
	$late=$_SESSION['late'];
	$readd=$_SESSION['readd'];
	$total=$_SESSION['total'];
	$wrd=$_SESSION['wrd'];
	$first=$_SESSION['first'];
	$second=$_SESSION['second'];
	$third=$_SESSION['third'];
	$fourth=$_SESSION['fourth'];
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
	span.cls_003{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	div.cls_003{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	span.cls_004{font-family:"Calibri Bold",serif;font-size:15.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	div.cls_004{font-family:"Calibri Bold",serif;font-size:15.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	span.cls_005{font-family:"Calibri",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	div.cls_005{font-family:"Calibri",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	span.cls_006{font-family:"Calibri Bold",serif;font-size:13.9px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	div.cls_006{font-family:"Calibri Bold",serif;font-size:13.9px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	span.cls_007{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	div.cls_007{font-family:"Calibri",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
	</head>
<body onChange="myfunc()">
	<?php 
                $role=$_SESSION['role'];
                if($role=='admin'){ ?>


<form name="forms" method="POSR" action="">
<div>
<div style="position:absolute;left:350.00px;top:10px" class="cls_002"><span class="cls_002"><hr width="1" size="700" style="border: 1px dashed"></span></div>
<div style="position:absolute;left:700.00px;top:10px" class="cls_002"><span class="cls_002"><hr width="1" size="700" style="border: 1px dashed"></span></div>
<div style="position:absolute;left:10.00px;top:15px" class="cls_002"><span class="cls_002">Account No. 064311011000201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRIPLICATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account No. 064311011000201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DUPLICATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Account No. 064311011000201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORIGINAL</span></div> 
<div style="position:absolute;left:10px;top:42px" class="cls_003"><span class="cls_003">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE BANK)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE COLLEGE)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE STUDENT)</span></div>
<div style="position:absolute;left:10.00px;top:69px" class="cls_003"><span class="cls_003">Challan No. AF<input type="text" readonly name="challan" id="cid1" value="<?php echo $ch;?>" style="border: none;width: 100px;text-align:center" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE:<input type="text" name="date"readonly value="<?php echo $date;?>"id="dateid2" style="border: none;width: 80px;text-align:center" ></span></div>
<div style="position:absolute;left:357.00px;top:69px" class="cls_003"><span class="cls_003">Challan No. AF<input type="text" readonly name="challan" id="cid2" value="<?php echo $ch;?>" style="border: none;width: 100px;text-align:center" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE:<input type="text" name="date"readonly value="<?php echo $date;?>"id="dateid2" style="border: none;width: 80px;text-align:center" ></span></div>
<div style="position:absolute;left:707.00px;top:69px" class="cls_003"><span class="cls_003">Challan No. AF<input type="text" readonly name="challan" id="cid3" value="<?php echo $ch;?>" style="border: none;width: 100px;text-align:center" >&nbsp;&nbsp;&nbsp;DATE:<input type="text" name="date"readonly value="<?php echo $date;?>"id="dateid2" style="border: none;width: 80px;text-align:center" ></span></div>
<div style="position:absolute;left:10px;top:96px" class="cls_006"><span class="cls_006">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:357px;top:96px" class="cls_006"><span class="cls_006">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:704px;top:96px" class="cls_006"><span class="cls_006">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:10px;top:123px" class="cls_005"><span class="cls_005">&nbsp;&nbsp;&nbsp;Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:357px;top:123px" class="cls_005"><span class="cls_005">&nbsp;&nbsp;&nbsp;Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:707px;top:123px" class="cls_005"><span class="cls_005">&nbsp;&nbsp;&nbsp;Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:10.00px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid1" value="<?php echo $name;?>" name="sname"readonly placeholder="Enter" style="border: none;font-size: 15px;width: 200px;text-align:center;font-weight:bold" pattern="[a-zA-Z ]+"
    oninvalid="setCustomValidity('Plz enter on Alphabets ')"
    onchange="try{setCustomValidity('')}catch(e){}" style="border: none;font-size: 15px;width: 200px;text-align:center" onchange="changename()" ></span></div>
<div style="position:absolute;left:357.05px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid2" value="<?php echo $name;?>"readonly name="sname" style="border: none;font-size: 15px;width: 200px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:707px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid3" value="<?php echo $name;?>"readonly name="sname"  style="border: none;font-size: 15px;width: 200px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:10.00px;top:177px" class="cls_003"><span class="cls_003">D.D:<input type="text" name="sclass" readonly value="<?php echo $class;?>"id="classid1" style="border: none;font-size: 15px;width: 50px;text-align:center;font-weight:bold" onchange="changeclass()" ></span></div>
<div style="position:absolute;left:100px;top:177px" class="cls_003"><span class="cls_003">Roll No:<input type="text"readonly name="sid"value="<?php echo $roll;?>" id="rollid1" style="border: none;font-size: 15px;width: 95px;text-align:center;font-weight:bold" onchange="changeroll()"></span></div>
<div style="position:absolute;left:245px;top:177px" class="cls_003"><span class="cls_003">Branch:<input type="text"readonly name="sbranch" id="branchid1"value="<?php echo $branch;?>" style="border: none;font-size: 15px;width: 45px;text-align:center;font-weight:bold" onchange="changebranch()" ></span></div>
<div style="position:absolute;left:357px;top:177px" class="cls_003"><span class="cls_003">D.D: <input type="text"readonly name="sclass" value="<?php echo $class;?>"id="classid2" style="border: none;font-size: 15px;width: 50px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:447px;top:177px" class="cls_003"><span class="cls_003">Roll No:<input type="text"readonly name="sid"value="<?php echo $roll;?>" id="rollid2" style="border: none;font-size: 15px;width: 95px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:598px;top:177px" class="cls_003"><span class="cls_003">Branch:<input type="text" readonly name="sbranch" id="branchid2"value="<?php echo $branch;?>"style="border: none;font-size: 15px;width: 45px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:707px;top:177px" class="cls_003"><span class="cls_003">D.D:  <input type="text"readonly name="sclass" value="<?php echo $class;?>"id="classid3"style="border: none;font-size: 15px;width: 50px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:797px;top:177px" class="cls_003"><span class="cls_003">Roll No:<input type="text"readonly name="sid" value="<?php echo $roll;?>"id="rollid3" style="border: none;font-size: 15px;width: 95px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:948px;top:177px" class="cls_003"><span class="cls_003">Branch: <input type="text"readonly name="sbranch" id="branchid3" value="<?php echo $branch;?>"style="border: none;font-size: 15px;width: 35px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:10.00px;top:204px" class="cls_003"><span class="cls_003"><?php echo $first?></span></div>
<div style="position:absolute;left:357px;top:204px" class="cls_003"><span class="cls_003"><?php echo $first?></span></div>
<div style="position:absolute;left:707px;top:204px" class="cls_003"><span class="cls_003"><?php echo $first?></span></div>
<div style="position:absolute;left:10px;top:231.01px" class="cls_003"><span class="cls_003"><?php echo $second?></span></div>
<div style="position:absolute;left:357px;top:231.01px" class="cls_003"><span class="cls_003"><?php echo $second?></span></div>
<div style="position:absolute;left:707px;top:231.01px" class="cls_003"><span class="cls_003"><?php echo $second?></span></div>
<div style="position:absolute;left:10px;top:258px" class="cls_003"><span class="cls_003"><?php echo $third?></span></div>
<div style="position:absolute;left:357px;top:258px" class="cls_003"><span class="cls_003"><?php echo $third?></span></div>
<div style="position:absolute;left:707px;top:258px" class="cls_003"><span class="cls_003"><?php echo $third?></span></div>
<div style="position:absolute;left:10.00px;top:285px" class="cls_003"><span class="cls_003"><?php echo $fourth?></span></div>
<div style="position:absolute;left:357px;top:285px" class="cls_003"><span class="cls_003"><?php echo $fourth?></span></div>
<div style="position:absolute;left:707px;top:285px" class="cls_003"><span class="cls_003"><?php echo $fourth?></span></div>
<div style="position:absolute;left:270.02px;top:300px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:613.07px;top:300px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:966.12px;top:300px" class="cls_003"><span class="cls_003">Rs.</span></div>

<div style="position:absolute;left:10.00px;top:320px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUTION FEE                 DUE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid1"  readonly value="<?php echo $univ;?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:320px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUTION FEE                 DUE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid2" readonly value="<?php echo $univ;?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:320px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUTION FEE                 DUE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid3"readonly value="<?php echo $univ;?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10px;top:340px" class="cls_003"><span class="cls_003">l l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCRED. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="acc" id="accid1"readonly  value="<?php echo $accred;?>"placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:340px" class="cls_003"><span class="cls_003">l l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCRED. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="acc" id="accid2"readonly value="<?php echo $accred;?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:340px" class="cls_003"><span class="cls_003">l l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCRED. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="acc" id="accid3"readonly value="<?php echo $accred;?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10px;top:360px" class="cls_003"><span class="cls_003">l l l&nbsp;&nbsp;&nbsp;MISC. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="misc" id="miscid1"value="<?php echo $misc;?>" readonly placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:360px" class="cls_003"><span class="cls_003">l l l&nbsp;&nbsp;&nbsp;MISC. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="misc" id="miscid2"  value="<?php echo $misc;?>"readonly placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:360px" class="cls_003"><span class="cls_003">l l l&nbsp;&nbsp;&nbsp;MISC. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="misc" id="miscid3"  value="<?php echo $misc;?>"readonly placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10.00px;top:380px" class="cls_003"><span class="cls_003">l V &nbsp;LATE FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="late" id="ltfid1" value="<?php echo $late;?>"readonly placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:380px" class="cls_003"><span class="cls_003">l V &nbsp;&nbsp;LATE FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="late" id="ltfid2" value="<?php echo $late;?>"readonly placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:380px" class="cls_003"><span class="cls_003">l V &nbsp;&nbsp;&nbsp;LATE FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="late" id="ltfid3" value="<?php echo $late;?>"readonly placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10.00px;top:400px" class="cls_003"><span class="cls_003">V RE-ADMN FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="readd" id="readid1" value="<?php echo $readd;?>"readonly placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:400px" class="cls_003"><span class="cls_003">V RE-ADMN FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="readd" id="readid2" value="<?php echo $readd;?>"readonly placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:400px" class="cls_003"><span class="cls_003">V RE-ADMN FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="readd" id="readid3" value="<?php echo $readd;?>"readonly placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10.00px;top:423px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number"readonly name="total" id="totalid1" value="<?php echo $total;?>"style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357.00px;top:423px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number"readonly name="total" id="totalid2" value="<?php echo $total;?>"style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:423px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number"readonly name="total" id="totalid3" value="<?php echo $total;?>"style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:10.00px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text"readonly id="wrdid1" value="<?php echo $wrd;?>"name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357.05px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text"readonly id="wrdid2" value="<?php echo $wrd;?>"name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text"readonly value="<?php echo $wrd;?>"id="wrdid3" name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:180px;top:550px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:535px;top:550px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:870px;top:550px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:10.00px;top:577px" class="cls_003"><span class="cls_003">---------------FOR THE USE OF BANK STAFF---------------</span></div>
<div style="position:absolute;left:357px;top:577px" class="cls_003"><span class="cls_003">---------------FOR THE USE OF BANK STAFF---------------</span></div>
<div style="position:absolute;left:707px;top:577px" class="cls_003"><span class="cls_003">---------------FOR THE USE OF BANK STAFF---------------</span></div>
<div style="position:absolute;left:10.00px;top:631px" class="cls_003"><span class="cls_003">Cashier</span></div>
<div style="position:absolute;left:200.02px;top:631px" class="cls_003"><span class="cls_003">Manager/Accountant</span></div>
<div style="position:absolute;left:357px;top:631px" class="cls_003"><span class="cls_003">Cashier</span></div>
<div style="position:absolute;left:547px;top:631px" class="cls_003"><span class="cls_003">Manager/Accountant</span></div>
<div style="position:absolute;left:707px;top:631px" class="cls_003"><span class="cls_003">Cashier</span></div>
<div style="position:absolute;left:897px;top:631px" class="cls_003"><span class="cls_003">Manager/Accountant</span></div>
<div style="position:absolute;left:10.00px;top:658px" class="cls_003"><span class="cls_003">This Challan will be accepted in Andhra Bank,</span></div>
<div style="position:absolute;left:10.00px;top:678px" class="cls_003"><span class="cls_003">Kokapet Branch Only.</span></div>
<div style="position:absolute;left:357px;top:658px" class="cls_003"><span class="cls_003">This Challan will be accepted in Andhra Bank,</span></div>
<div style="position:absolute;left:357.00px;top:678px" class="cls_003"><span class="cls_003">Kokapet Branch Only.</span></div>
<div style="position:absolute;left:707px;top:658px" class="cls_003"><span class="cls_003">This Challan will be accepted in Andhra Bank,</span></div>
<div style="position:absolute;left:707.00px;top:678px" class="cls_003"><span class="cls_003">Kokapet Branch Only.</span></div>
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