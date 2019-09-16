<?php
	include('config.php');
	session_start();
	$roll=$_REQUEST['rollno'];
	$mode=$_REQUEST['mode'];
	$_SESSION['roll']=$roll;
	
	$sql="select * from student where roll='$roll'";
	$re="select * from receiptno";
	$q=mysql_query($re);
	$r=mysql_fetch_array($q);
	$_SESSION['re']=$r['receiptno'];
	$query=mysql_query($sql);
	$count=mysql_num_rows($query);
	if($count==1)
	{
		$row=mysql_fetch_array($query);
		$_SESSION['stuname']=$row['name'];
	}
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
<style>
*:focus {
outline: none;
}
input{
	
	border: none;
	font-size:15px;
	font-weight:bold;
	text-align:center;
}

</style>
</head>
<body oninput="x()">
<?php 
    $role=$_SESSION['role'];
    if($role=='admin'){ ?>
</br>
<center>
<form action="receipt_final.php" method="POST">
<div style="font-size:15px;font-weight:bold">
<div						 style="position:absolute;left:230px;top:10px;font-size:20px;font-weight:bold">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</div>
<div 						 style="position:absolute;left:290px;top:30px;font-size:20px;font-weight:bold">GANDIPET, HYDERABAD - 5000 075., T.S.</div>
<div class="received with "  style="position:absolute;left:240.00px;top:60px" class="cls_002"> Received with thanks from:</div>
<div class="received textboid"style="position:absolute;left:415.00px;top:58px" class="cls_002"><input name="stuid" id="stuid" type="text" value="<?php echo $row['roll']?>" style="border:none;text-align:center"></input></div>
<div class="received line"	 style="position:absolute;left:415.00px;top:70px" class="cls_002"><hr width="165" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></input></div>
<div class="Received with"	 style="position:absolute;left:240.00px;top:85px" class="cls_002"><span class="cls_002"><input id="stuname"  name="stuname" type="text" style="width:340px" value="<?php echo $row['name']?>" style="border:none"></input></span></div>

<div class="Second Line"	 style="position:absolute;left:240.00px;top:100px" class="cls_002"><span class="cls_002"><hr width="340" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="sum of rs"		 style="position:absolute;left:240.00px;top:120px" class="cls_002"><span class="cls_002">A sum of Rs:</span></div>
<div class="sum text box"	 style="position:absolute;left:360.00px;top:118px" class="cls_002"><span class="cls_002"><input name="wordsone" type="text" id="wordsone" required style="border:none" ></span></div>
<div class="sum in words"	 style="position:absolute;left:240.00px;top:158px" class="cls_002"><span class="cls_002"><input type="text" style="width:342px;" id="wordstwo" name="wordstwo" style="border:none" ></span></div><div class="Third Line"		 style="position:absolute;left:320.00px;top:130px" class="cls_002"><span class="cls_002"><hr width="260" length="20"  size="4" style="border-top:2px solid #000000;"></span></div>
<div class="Fourth Line"	 style="position:absolute;left:240.00px;top:170px" class="cls_002"><span class="cls_002"><hr width="340" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="By cash"		 style="position:absolute;left:240.00px;top:193px" class="cls_002"><span class="cls_002">By Cash/D.D No</span></div>
<div class="By cash textbox" style="position:absolute;left:350.00px;top:189px" class="cls_002"><span class="cls_002"><input type="text" style="width:90px;" id="mode" name="mode" style="border:none" ></span></div>
<div class="Bycash line "	 style="position:absolute;left:350.00px;top:200px" class="cls_002"><span class="cls_002"><hr width="90" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="drawn on"		 style="position:absolute;left:440.00px;top:193px" class="cls_002"><span class="cls_002">drawn on</span></div>
<div class="drawn ontextbox" style="position:absolute;left:500.00px;top:189px" class="cls_002"><span class="cls_002"><input type="text" id="drawn" name="drawn" style="width:90px;" style="border:none" ></span></div>
<div class="drawn on line"   style="position:absolute;left:500.00px;top:200px" class="cls_002"><span class="cls_002"><hr width="90" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="Bank Hyderaba"   style="position:absolute;left:600.00px;top:193px" class="cls_002"><span class="cls_002">Bank, Hyderabad.</span></div>
<div class="towards"		 style="position:absolute;left:240.00px;top:233px" class="cls_002"><span class="cls_002">towards</span></div>
<div class="toards type"	 style="position:absolute;left:300.00px;top:228px" class="cls_002"><span class="cls_002"><input type="text" name="type" id="type" style="width:400px" value="<?=$mode; ?>" required style="border:none" ></span></div>

<div class="towards line"	 style="position:absolute;left:290.00px;top:240px" class="cls_002"><span class="cls_002"><hr width="420" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>

<!-- Rs Box start -->
<div class="Rs Box topborder"		 style="position:absolute;left:240.00px;top:250px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="Rs Box leftborder"		 style="position:absolute;left:240.00px;top:250px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="42" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="Rs Box rightborder"	 style="position:absolute;left:352.00px;top:250px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="42" style="border-left:2px solid #000000;border-top:2px solid #000000;"></span></div>

<!--<div class="boxx" name="Rs Box text box"		style="position:absolute;left:445.00px;top:350px" class="cls_002"><span class="cls_002"><input type="number" min=0 step=1 style="width:100px"></span></div>
-->
<div class="Rs Boxbottomborder"	 style="position:absolute;left:240.00px;top:290px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="textbox for rupees" style="position:absolute;left:250.00px;top:265px" class="cls_002"><span class="cls_002"><input name="rupees" type="number" min=0 step=1 onchange="x()" id="rupees" required placeholder="enter " style="border:none;width:70px" ></input></div>


<!-- Rs Box end-->

<!-- Receipt box complete start -->
<div class="receipt top border" 			style="position:absolute;left:600.00px;top:50px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="receipt left border" 			style="position:absolute;left:600.00px;top:50px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="120" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="receipt right border" 			style="position:absolute;left:713.00px;top:50px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="120" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="receipt no."	 				style="position:absolute;left:602.00px;top:60px" class="cls_002">Receipt No.</div>
<div class="receipt bottom border" 			style="position:absolute;left:600.00px;top:170px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="receipt no text box"			style="position:absolute;left:602.00px;top:90px" class="cls_002"><span class="cls_002"><input name="receiptno" type="text" style="width:100px" value="<?= $r['receiptno']?>"  ></span></div>
<div class="date "	 						style="position:absolute;left:602.00px;top:120px" class="cls_002">Date:</div>
<div class="date textbox " id="date"	 	style="position:absolute;left:602.00px;top:155px" class="cls_002"><input type="text" name="date" style="width:100px" value="<?php echo date('d-m-Y');?>" ></div>
<!-- Receipt box end -->

<div class="top border" 				style="position:absolute;left:230.00px;top:0px" class="cls_002"><span class="cls_002"><hr width="495" length="20"  size="4" style="border-top:2px solid #000000"></span></div>
<div class="left border" 				style="position:absolute;left:225.00px;top:0px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="300" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="right border" 				style="position:absolute;left:725.00px;top:0px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="300" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="bottom border" 				style="position:absolute;left:228.00px;top:300px" class="cls_002"><span class="cls_002"><hr width="495" length="20"  size="4" style="border-top:2px solid #000000"></span></div>


<div class="Signature"	 style="position:absolute;left:640.00px;top:290px" class="cls_002"><span class="cls_002">Principal</span></div>
<div class="submit"		 style="position:absolute;left:640.00px;top:360px" class="cls_002"><span class="cls_002"><input type="submit" value="save" name="save"></input></form></span></div>

<div style="position:absolute;left:250px;top:678" class="cls_003"><span class="cls_003"><input type="button"  name="print" value="print" id="print" onclick="y()"></span></div>
</div>

</body>
</html>

<script>
function  x(){

//document.getElementById('date').value = new Date().toDateInputValue();

var x=document.getElementById("rupees").value;
var y=x;
var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];


    if ((x = x.toString()).length > 9) return 'overflow';
    var n = ('000000000' + x).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + '' : '';
	if(y==0){
		str +='Zero Only';
	}
	else
			str +='Only';

	//document.getElementById("words").value=str;
	var x=str;
	//alert(x.length);
if(x.length>20)
{
var one=x.slice(0,20);
var two=x.slice(20,x.length);
one=one+' -';
two=' -'+two;

document.getElementById("wordsone").value=one;
document.getElementById("wordstwo").value=two;
}
else{
document.getElementById("wordsone").value=str;	
	
}


}

	
function y(){
		var y=document.getElementById("print");
		var k=document.getElementById("save");
		y.style.visibility="hidden";
		k.style.visibility="hidden";
		window.print();
		y.style.visibility="visible";
		k.style.visibility="visible";
	}

</script>

<?php } 
    else {
        ?>
        <script>
            alert("You are not Authorized to visit this page ");
            window.location="index.php";
        </script>

    <?php } ?>