<?php
	include('config.php');
	session_start();
	$roll=$_REQUEST['rollno'];
	$sql="select * from student where roll='$roll'";
	$ch="select * from chalanno";
	$q=mysql_query($ch);
	$r=mysql_fetch_array($q);
	$ch=$r['chalanno'];
	$ch=$ch+1;
	$s="update chalanno set chalanno='$ch'";
	mysql_query($s);
	$query=mysql_query($sql);
	$count=mysql_num_rows($query);
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


<form name="forms" method="POST" action="final.php">
<div style="position:absolute;left:350.00px;top:10px" class="cls_002"><span class="cls_002"><hr width="1" size="700" style="border: 1px dashed"></span></div>
<div style="position:absolute;left:700.00px;top:10px" class="cls_002"><span class="cls_002"><hr width="1" size="700" style="border: 1px dashed"></span></div>
<div style="position:absolute;left:10.00px;top:15px" class="cls_002"><span class="cls_002">Account No. 064311011000201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRIPLICATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account No. 064311011000201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DUPLICATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account No. 064311011000201&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORIGINAL</span></div> 
<div style="position:absolute;left:10px;top:42px" class="cls_003"><span class="cls_003">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE BANK)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE COLLEGE)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TO BE RETAINED BY THE STUDENT)</span></div>
<div style="position:absolute;left:10.00px;top:69px" class="cls_003"><span class="cls_003">Challan No. AF<input type="text" name="challan" id="cid1" value="<?php echo $r['chalanno'];?>" style="border: none;width: 50px;text-align:center" ></span></div>
<div style="position:absolute;left:162.9px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date"value="<?php echo $year;?>" id="dateid1" style="border: none;width: 150px;text-align:center" ></span></div>
<div style="position:absolute;left:360px;top:69px" class="cls_003"><span class="cls_003">Challan No. AF<input type="text" name="challan" id="cid2" value="<?php echo $r['chalanno'];?>" style="border: none;width: 50px;text-align:center" ></span></div>
<div style="position:absolute;left:510px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" id="dateid2" value="<?php echo $year;?>" style="border: none;width: 150px;text-align:center" ></span></div>
<div style="position:absolute;left:710px;top:69px" class="cls_003"><span class="cls_003">Challan No. AF<input type="text" name="challan"id="cid3" value="<?php echo $r['chalanno'];?>"style="border: none;width: 50px;text-align:center" ></span></div>
<div style="position:absolute;left:860px;top:69px" class="cls_003"><span class="cls_003">DATE:<input type="text" name="date" id="dateid3" value="<?php echo $year;?>"  style="border: none;width: 120px;text-align:center" ></span></div>
<div style="position:absolute;left:10px;top:96px" class="cls_006"><span class="cls_006">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:357px;top:96px" class="cls_006"><span class="cls_006">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:707px;top:96px" class="cls_006"><span class="cls_006">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</span></div>
<div style="position:absolute;left:10px;top:123px" class="cls_005"><span class="cls_005">&nbsp;&nbsp;&nbsp;Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:357px;top:123px" class="cls_005"><span class="cls_005">&nbsp;&nbsp;&nbsp;Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>
<div style="position:absolute;left:707px;top:123px" class="cls_005"><span class="cls_005">&nbsp;&nbsp;&nbsp;Chaitanya Bharathi P.O., Gandipet, Hyderabad-500075</span></div>

<div style="position:absolute;left:10.00px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid1" value="<?php echo $row['name'];?>" name="sname" placeholder="Enter" style="border: none;font-size: 15px;width: 200px;text-align:center;font-weight:bold" pattern="[a-zA-Z ]+"
    oninvalid="setCustomValidity('Plz enter on Alphabets ')"
    onchange="try{setCustomValidity('')}catch(e){}" style="border: none;font-size: 15px;width: 200px;text-align:center" onchange="changename()" ></span></div>
<div style="position:absolute;left:357.05px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid2" value="<?php echo $row['name'];?>" name="sname" style="border: none;font-size: 15px;width: 200px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:707px;top:150px" class="cls_003"><span class="cls_003">Name of the Student <input type="text" id="snameid3" value="<?php echo $row['name'];?>" name="sname"  style="border: none;font-size: 15px;width: 200px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:10.00px;top:177px" class="cls_003"><span class="cls_003">D.D:<input type="text" name="sclass" id="classid1" style="border: none;font-size: 15px;width: 50px;text-align:center;font-weight:bold" onchange="changeclass()" ></span></div>
<div style="position:absolute;left:100px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid1"value="<?php echo $row['roll'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 95px;text-align:center;font-weight:bold" onchange="changeroll()"></span></div>
<div style="position:absolute;left:245px;top:177px" class="cls_003"><span class="cls_003">Branch<input type="text" name="sbranch" id="branchid1" value="<?php echo $row['branch'];?>"placeholder="Enter" style="border: none;font-size: 15px;width: 55px;text-align:center;font-weight:bold" onchange="changebranch()" ></span></div>
<div style="position:absolute;left:357px;top:177px" class="cls_003"><span class="cls_003">D.D:<input type="text" name="sclass" id="classid2" style="border: none;font-size: 15px;width: 50px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:447px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid2" value="<?php echo $row['roll'];?>"style="border: none;font-size: 15px;width: 95px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:598px;top:177px" class="cls_003"><span class="cls_003">Branch<input type="text" name="sbranch" id="branchid2"value="<?php echo $row['branch'];?>"style="border: none;font-size: 15px;width: 55px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:707px;top:177px" class="cls_003"><span class="cls_003">D.D:<input type="text" name="sclass" id="classid3"style="border: none;font-size: 15px;width: 50px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:797px;top:177px" class="cls_003"><span class="cls_003">Roll No.<input type="text" name="sid" id="rollid3" value="<?php echo $row['roll'];?>"style="border: none;font-size: 15px;width: 95px;text-align:center;font-weight:bold"  ></span></div>
<div style="position:absolute;left:948px;top:177px" class="cls_003"><span class="cls_003">Branch <input type="text" name="sbranch" id="branchid3"value="<?php echo $row['branch'];?>" style="border: none;font-size: 15px;width: 55px;text-align:center;font-weight:bold" ></span></div>
<div style="position:absolute;left:10.00px;top:204px" class="cls_003"><span class="cls_003"><input type="radio" name="year1" value="I" id="yearid11"onChange="changeyear1()">I Year</span></div>
<div style="position:absolute;left:357px;top:204px" class="cls_003"><span class="cls_003"><input type="radio" name="year2" value="I"id="yearid12">I Year</span></div>
<div style="position:absolute;left:707px;top:204px" class="cls_003"><span class="cls_003"><input type="radio" name="year3" value="I"id="yearid13">I Year</span></div>
<div style="position:absolute;left:10px;top:231.01px" class="cls_003"><span class="cls_003"><input type="radio" name="year1" value="II"id="yearid21"onChange="changeyear2()">l l Year</span></div>
<div style="position:absolute;left:357px;top:231.01px" class="cls_003"><span class="cls_003"><input type="radio" name="year2" value="II"id="yearid22">l l Year</span></div>
<div style="position:absolute;left:707px;top:231.01px" class="cls_003"><span class="cls_003"><input type="radio" name="year3" value="II"id="yearid23">l l Year</span></div>
<div style="position:absolute;left:10px;top:258px" class="cls_003"><span class="cls_003"><input type="radio" name="year1" value="III"id="yearid31"onChange="changeyear3()">l l l   Year</span></div>
<div style="position:absolute;left:357px;top:258px" class="cls_003"><span class="cls_003"><input type="radio" name="year2" value="III"id="yearid32">l l l   Year</span></div>
<div style="position:absolute;left:707px;top:258px" class="cls_003"><span class="cls_003"><input type="radio" name="year3" value="III"id="yearid33">l l l   Year</span></div>
<div style="position:absolute;left:10.00px;top:285px" class="cls_003"><span class="cls_003"><input type="radio" name="year1" value="IV"id="yearid41"onChange="changeyear4()">l V  Year</span></div>
<div style="position:absolute;left:357px;top:285px" class="cls_003"><span class="cls_003"><input type="radio" name="year2"value="IV"id="yearid42">l V  Year</span></div>
<div style="position:absolute;left:707px;top:285px" class="cls_003"><span class="cls_003"><input type="radio" name="year3"value="IV"id="yearid43">l V  Year</span></div>
<div style="position:absolute;left:270.02px;top:300px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:613.07px;top:300px" class="cls_003"><span class="cls_003">Rs.</span></div>
<div style="position:absolute;left:966.12px;top:300px" class="cls_003"><span class="cls_003">Rs.</span></div>

<div style="position:absolute;left:10.00px;top:320px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUTION FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid1"  value="<?php echo $row['feedue'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:320px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUTION FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid2" value="<?php echo $row['feedue'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:320px" class="cls_003"><span class="cls_003">l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUTION FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="univ" id="univid3" value="<?php echo $row['feedue'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10px;top:340px" class="cls_003"><span class="cls_003">l l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCRED. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="acc" id="accid1"  value="<?php echo $row['accreddue'];?>"placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:340px" class="cls_003"><span class="cls_003">l l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCRED. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="acc" id="accid2" value="<?php echo $row['accreddue'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:340px" class="cls_003"><span class="cls_003">l l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCRED. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="acc" id="accid3" value="<?php echo $row['accreddue'];?>" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10px;top:360px" class="cls_003"><span class="cls_003">l l l&nbsp;&nbsp;&nbsp;MISC. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="misc" id="miscid1"value="<?php echo $row['miscdue'];?>"  placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:360px" class="cls_003"><span class="cls_003">l l l&nbsp;&nbsp;&nbsp;MISC. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="misc" id="miscid2"  value="<?php echo $row['miscdue'];?>"placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:360px" class="cls_003"><span class="cls_003">l l l&nbsp;&nbsp;&nbsp;MISC. FEE                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="misc" id="miscid3"  value="<?php echo $row['miscdue'];?>"placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10.00px;top:380px" class="cls_003"><span class="cls_003">l V &nbsp;&nbsp;LATE FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="late" id="ltfid1" value="0" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:380px" class="cls_003"><span class="cls_003">l V &nbsp;&nbsp;LATE FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="late" id="ltfid2" value="0" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:380px" class="cls_003"><span class="cls_003">l V &nbsp;&nbsp;&nbsp;LATE FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="late" id="ltfid3" value="0" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10.00px;top:400px" class="cls_003"><span class="cls_003">V&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RE-ADMN FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="readd" id="readid1" value="0" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357px;top:400px" class="cls_003"><span class="cls_003">V&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RE-ADMN FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="readd" id="readid2" value="0" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:400px" class="cls_003"><span class="cls_003">V&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RE-ADMN FEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="readd" id="readid3" value="0" placeholder="Enter" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10.00px;top:423px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid1" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357.00px;top:423px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid2" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:423px" class="cls_003"><span class="cls_003">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="total" id="totalid3" style="border: none;font-size: 15px;width: 100px;text-align:center;text-decoration: underline" ></span></div>

<div style="position:absolute;left:10.00px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid1" name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:357.05px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid2" name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:707px;top:450px" class="cls_003"><span class="cls_003">In Words Rupees:<br> <input type="text" id="wrdid3" name="wrd" style="border: none;font-size: 15px;width: 330px;text-align:center;text-decoration: underline" ></span></div>
<div style="position:absolute;left:180px;top:550px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:535px;top:550px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
<div style="position:absolute;left:890px;top:550px" class="cls_003"><span class="cls_003">Signature of the remitter</span></div>
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

var todayTime = new Date(); var month = format(todayTime.getMonth()); var day = format(todayTime.getDate()); var year = format(todayTime.getFullYear()); var now= day+ "/" + month + "/" + year; 

document.getElementById('dateid3').value=now;*/









document.getElementById("univid2").value=document.getElementById("univid1").value;
document.getElementById("univid3").value=document.getElementById("univid1").value;

document.getElementById("accid2").value=document.getElementById("accid1").value;
document.getElementById("accid3").value=document.getElementById("accid1").value;

document.getElementById("miscid2").value=document.getElementById("miscid1").value;
document.getElementById("miscid3").value=document.getElementById("miscid1").value;

document.getElementById("ltfid2").value=document.getElementById("ltfid1").value;
document.getElementById("ltfid3").value=document.getElementById("ltfid1").value;

document.getElementById("readid2").value=document.getElementById("readid1").value;
document.getElementById("readid3").value=document.getElementById("readid1").value;

var univfee=document.getElementById("univid1").value;
var accfee=document.getElementById("accid1").value;
var miscfee=document.getElementById("miscid1").value;
var latefee=document.getElementById("ltfid1").value;
var readd=document.getElementById("readid1").value;
univfee=parseInt(univfee,10);
accfee=parseInt(accfee,10);
miscfee=parseInt(miscfee,10);
latefee=parseInt(latefee,10);
readd=parseInt(readd,10);

total=univfee+accfee+miscfee+latefee+readd;

document.getElementById("totalid1").value=total;
document.getElementById("totalid2").value=total;
document.getElementById("totalid3").value=total;
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

}

function changename()
{
document.getElementById("snameid2").value=document.getElementById("snameid1").value;
document.getElementById("snameid3").value=document.getElementById("snameid1").value;
}
function changeclass()
{
document.getElementById("classid2").value=document.getElementById("classid1").value;
document.getElementById("classid3").value=document.getElementById("classid1").value;
}
function changeroll()
{
document.getElementById("rollid2").value=document.getElementById("rollid1").value;
document.getElementById("rollid3").value=document.getElementById("rollid1").value;
}
function changebranch()
{
document.getElementById("branchid2").value=document.getElementById("branchid1").value;
document.getElementById("branchid3").value=document.getElementById("branchid1").value;
}
function changeyear1()
{
	document.getElementById("yearid12").checked=document.getElementById("yearid11").checked;
	document.getElementById("yearid13").checked=document.getElementById("yearid11").checked;
}
function changeyear2()
{
	document.getElementById("yearid22").checked=document.getElementById("yearid21").checked;
	document.getElementById("yearid23").checked=document.getElementById("yearid21").checked;
}
function changeyear3()
{
	document.getElementById("yearid32").checked=document.getElementById("yearid31").checked;
	document.getElementById("yearid33").checked=document.getElementById("yearid31").checked;
}
function changeyear4()
{
	document.getElementById("yearid42").checked=document.getElementById("yearid41").checked;
	document.getElementById("yearid43").checked=document.getElementById("yearid41").checked;
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

    <?php } ?>
</html>