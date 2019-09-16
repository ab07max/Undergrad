<?php
	include('config.php');
	session_start();
$receiptno=$_SESSION['receiptno'];
$date=$_SESSION['date'];
$stuid=$_SESSION['stuid'];
$amount=$_SESSION['amount'];
$amount_two=$amount."/-";
$type=$_SESSION['type'];
$wordsone=$_SESSION['wordsone'];
$wordstwo=$_SESSION['wordstwo'];
$mode=$_SESSION['mode'];
$drawn=$_SESSION['drawn'];
$stuname=$_SESSION['name'];
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
<form action="receipt_final.php">
<div style="font-size:15px;font-weight:bold">
<div						 style="position:absolute;left:230px;top:10px;font-size:20px;font-weight:bold">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</div>
<div 						 style="position:absolute;left:290px;top:30px;font-size:20px;font-weight:bold">GANDIPET, HYDERABAD - 5000 075., T.S.</div>
<div class="received with "  style="position:absolute;left:240.00px;top:60px" class="cls_002"> Received with thanks from:</div>
<div class="received textboid"style="position:absolute;left:415.00px;top:58px" class="cls_002"><input name="stuid" id="stuid" type="text" value="<?php echo $stuid?>" style="border:none;text-align:center" readonly ></input></div>
<div class="received line"	 style="position:absolute;left:415.00px;top:70px" class="cls_002"><hr width="165" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></input></div>
<div class="Received with"	 style="position:absolute;left:240.00px;top:85px" class="cls_002"><span class="cls_002"><input id="stuname"  name="stuname" type="text" style="width:340px" value="<?php echo $stuname;?>" style="border:none"></input></span></div>

<div class="Second Line"	 style="position:absolute;left:240.00px;top:100px" class="cls_002"><span class="cls_002"><hr width="340" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="sum of rs"		 style="position:absolute;left:240.00px;top:120px" class="cls_002"><span class="cls_002">A sum of Rs:</span></div>
<div class="sum text box"	 style="position:absolute;left:360.00px;top:118px" class="cls_002"><span class="cls_002"><input name="rupees" type="text" onchange="x()" id="rupees" required style="border:none" readonly value="<?php echo $wordsone;?>" ></span></div>
<div class="sum in words"	 style="position:absolute;left:240.00px;top:158px" class="cls_002"><span class="cls_002"><input type="text" style="width:342px;" id="words" style="border:none" value="<?php echo $wordstwo;?>" readonly ></span></div>
<div class="Third Line"		 style="position:absolute;left:320.00px;top:130px" class="cls_002"><span class="cls_002"><hr width="260" length="20"  size="4" style="border-top:2px solid #000000;"></span></div>
<div class="Fourth Line"	 style="position:absolute;left:240.00px;top:170px" class="cls_002"><span class="cls_002"><hr width="340" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="By cash"		 style="position:absolute;left:240.00px;top:193px" class="cls_002"><span class="cls_002">By Cash/D.D No</span></div>
<div class="By cash textbox" style="position:absolute;left:350.00px;top:189px" class="cls_002"><span class="cls_002"><input type="text" style="width:90px;" id="mode" name="mode" style="border:none" value="<?= $mode?>" readonly ></span></div>
<div class="Bycash line "	 style="position:absolute;left:350.00px;top:200px" class="cls_002"><span class="cls_002"><hr width="90" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="drawn on"		 style="position:absolute;left:440.00px;top:193px" class="cls_002"><span class="cls_002">drawn on</span></div>
<div class="drawn ontextbox" style="position:absolute;left:500.00px;top:189px" class="cls_002"><span class="cls_002"><input type="text" id="drawn" name="drawn" style="width:90px;" style="border:none" value="<?= $drawn?>" readonly ></span></div>
<div class="drawn on line"   style="position:absolute;left:500.00px;top:200px" class="cls_002"><span class="cls_002"><hr width="90" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="Bank Hyderaba"   style="position:absolute;left:600.00px;top:193px" class="cls_002"><span class="cls_002">Bank, Hyderabad.</span></div>
<div class="towards"		 style="position:absolute;left:240.00px;top:233px" class="cls_002"><span class="cls_002">towards</span></div>
<div class="toards type"	 style="position:absolute;left:300.00px;top:228px" class="cls_002"><span class="cls_002"><input type="text" name="type" id="type" style="width:400px" value="<?=$type; ?>" required style="border:none" readonly ></span></div>

<div class="towards line"	 style="position:absolute;left:290.00px;top:240px" class="cls_002"><span class="cls_002"><hr width="420" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>

<!-- Rs Box start -->
<div class="Rs Box topborder"		 style="position:absolute;left:240.00px;top:250px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="Rs Box leftborder"		 style="position:absolute;left:240.00px;top:250px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="42" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="Rs Box rightborder"	 style="position:absolute;left:352.00px;top:250px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="42" style="border-left:2px solid #000000;border-top:2px solid #000000;"></span></div>
<div class="rs textbox"				style="position:absolute;left:250.00px;top:270px"><input type="text" value="<?= $amount_two?>" style="width:50px" readonly> </div>

<div class="Rs Boxbottomborder"	 style="position:absolute;left:240.00px;top:290px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<!--<div class="boxx" name="Rs Box text box"		style="position:absolute;left:445.00px;top:350px" class="cls_002"><span class="cls_002"><input type="number" min=0 step=1 style="width:100px"></span></div>
-->

<!-- Rs Box end-->

<!-- Receipt box complete start -->
<div class="receipt top border" 			style="position:absolute;left:600.00px;top:50px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="receipt left border" 			style="position:absolute;left:600.00px;top:50px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="120" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="receipt right border" 			style="position:absolute;left:713.00px;top:50px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="120" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="receipt no."	 				style="position:absolute;left:602.00px;top:60px" class="cls_002">Receipt No.</div>
<div class="receipt bottom border" 			style="position:absolute;left:600.00px;top:170px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="receipt no text box"			style="position:absolute;left:602.00px;top:90px" class="cls_002"><span class="cls_002"><input name="receiptno" type="text" style="width:80px" value="<?= $receiptno?>" readonly  ></span></div>
<div class="date "	 						style="position:absolute;left:602.00px;top:120px" class="cls_002">Date:</div>
<div class="date textbox " id="date"	 	style="position:absolute;left:602.00px;top:155px" class="cls_002"><input type="text" name="date" style="width:80px" value="<?php echo date("d/m/y");?>" readonly ></div>
<!-- Receipt box end -->

<div class="top border" 				style="position:absolute;left:230.00px;top:0px" class="cls_002"><span class="cls_002"><hr width="495" length="20"  size="4" style="border-top:2px solid #000000"></span></div>
<div class="left border" 				style="position:absolute;left:225.00px;top:0px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="300" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="right border" 				style="position:absolute;left:725.00px;top:0px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="300" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="bottom border" 				style="position:absolute;left:228.00px;top:300px" class="cls_002"><span class="cls_002"><hr width="495" length="20"  size="4" style="border-top:2px solid #000000"></span></div>


<div class="Signature"	 style="position:absolute;left:640.00px;top:290px" class="cls_002"><span class="cls_002">Principal</span></div>

<!--------------------------------------------------------------- second receipt start ------------------------------------------------------------ -->

<div style="font-size:15px;font-weight:bold">
<div						 style="position:absolute;left:230px;top:350px;font-size:20px;font-weight:bold">MAHATMA GANDHI INSTITUTE OF TECHNOLOGY</div>
<div 						 style="position:absolute;left:290px;top:370px;font-size:20px;font-weight:bold">GANDIPET, HYDERABAD - 5000 075., T.S.</div>
<div class="received with "  style="position:absolute;left:240.00px;top:400px" class="cls_002"> Received with thanks from:</div>
<div class="received textboid"style="position:absolute;left:417.00px;top:398px" class="cls_002"><input name="stuid" id="stuid" type="text" value="<?php echo $stuid?>" style="border:none;text-align:center" readonly ></input></div>
<div class="received line"	 style="position:absolute;left:417.00px;top:410px" class="cls_002"><hr width="165" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000" readonly></input></div>
<div class="Received with"	 style="position:absolute;left:240.00px;top:425px" class="cls_002"><span class="cls_002"><input id="stuname"  name="stuname" type="text" style="width:340px" value="<?php echo $stuname;?>" style="border:none"></input></span></div>


<div class="Second Line"	 style="position:absolute;left:240.00px;top:440px" class="cls_002"><span class="cls_002"><hr width="340" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="sum of rs"		 style="position:absolute;left:240.00px;top:460px" class="cls_002"><span class="cls_002">A sum of Rs:</span></div>
<div class="sum text box"	 style="position:absolute;left:360.00px;top:458px" class="cls_002"><span class="cls_002"><input name="rupees" type="text" onchange="x()" id="rupees" required style="border:none" value="<?php echo $wordsone;?>" readonly ></span></div>
<div class="sum in words"	 style="position:absolute;left:240.00px;top:498px" class="cls_002"><span class="cls_002"><input type="text" style="width:342px;" id="words" style="border:none" value="<?php echo $wordstwo;?>" readonly ></span></div>
<div class="Third Line"		 style="position:absolute;left:320.00px;top:470px" class="cls_002"><span class="cls_002"><hr width="260" length="20"  size="4" style="border-top:2px solid #000000;"></span></div>
<div class="Fourth Line"	 style="position:absolute;left:240.00px;top:510px" class="cls_002"><span class="cls_002"><hr width="340" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="By cash"		 style="position:absolute;left:240.00px;top:533px" class="cls_002"><span class="cls_002">By Cash/D.D No</span></div>
<div class="By cash textbox" style="position:absolute;left:350.00px;top:529px" class="cls_002"><span class="cls_002"><input type="text" style="width:90px;" id="mode" name="mode" style="border:none" value="<?= $mode?>" readonly ></span></div>
<div class="Bycash line "	 style="position:absolute;left:350.00px;top:540px" class="cls_002"><span class="cls_002"><hr width="90" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="drawn on"		 style="position:absolute;left:440.00px;top:533px" class="cls_002"><span class="cls_002">drawn on</span></div>
<div class="drawn ontextbox" style="position:absolute;left:500.00px;top:529px" class="cls_002"><span class="cls_002"><input type="text" id="drawn" name="drawn" style="width:90px;" style="border:none" value="<?= $drawn?>" readonly ></span></div>
<div class="drawn on line"   style="position:absolute;left:500.00px;top:540px" class="cls_002"><span class="cls_002"><hr width="90" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="Bank Hyderaba"   style="position:absolute;left:600.00px;top:533px" class="cls_002"><span class="cls_002">Bank, Hyderabad.</span></div>
<div class="towards"		 style="position:absolute;left:240.00px;top:570px" class="cls_002"><span class="cls_002">towards</span></div>
<div class="toards type"	 style="position:absolute;left:300.00px;top:568px" class="cls_002"><span class="cls_002"><input type="text" name="type" id="type" style="width:400px" value="<?=$type; ?>" required style="border:none" readonly ></span></div>

<div class="towards line"	 style="position:absolute;left:290.00px;top:580px" class="cls_002"><span class="cls_002"><hr width="420" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>

<!-- Rs Box start -->
<div class="Rs Box topborder"		 style="position:absolute;left:240.00px;top:590px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="Rs Box leftborder"		 style="position:absolute;left:240.00px;top:590px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="42" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="Rs Box rightborder"	 style="position:absolute;left:352.00px;top:590px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="42" style="border-left:2px solid #000000;border-top:2px solid #000000;"></span></div>
<div class="rs textbox"				style="position:absolute;left:250.00px;top:610px"><input type="text" value="<?= $amount_two?>" style="width:50px" readonly> </div>

<div class="Rs Boxbottomborder"	 style="position:absolute;left:240.00px;top:630px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<!--<div class="boxx" name="Rs Box text box"		style="position:absolute;left:445.00px;top:350px" class="cls_002"><span class="cls_002"><input type="number" min=0 step=1 style="width:100px"></span></div>
-->

<!-- Rs Box end-->

<!-- Receipt box complete start -->
<div class="receipt top border" 			style="position:absolute;left:600.00px;top:390px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="receipt left border" 			style="position:absolute;left:600.00px;top:390px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="120" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="receipt right border" 			style="position:absolute;left:713.00px;top:390px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="120" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="receipt no."	 				style="position:absolute;left:602.00px;top:400px" class="cls_002">Receipt No.</div>
<div class="receipt bottom border" 			style="position:absolute;left:600.00px;top:510px" class="cls_002"><span class="cls_002"><hr width="110" length="20"  size="4" style="border-top:2px solid #000000;border-bottom:0px solid #000000"></span></div>
<div class="receipt no text box"			style="position:absolute;left:608.00px;top:430px" class="cls_002"><span class="cls_002"><input name="receiptno" type="text" style="width:80px" value="<?= $receiptno?>"  ></span></div>
<div class="date "	 						style="position:absolute;left:602.00px;top:460px" class="cls_002">Date:</div>
<div class="date textbox " id="date"	 	style="position:absolute;left:608.00px;top:495px" class="cls_002"><input type="text" name="date" style="width:100px" value="<?php echo date("d/m/y");?>" readonly></div>
<!-- Receipt box end -->

<div class="top border" 				style="position:absolute;left:230.00px;top:340px" class="cls_002"><span class="cls_002"><hr width="495" length="20"  size="4" style="border-top:2px solid #000000"></span></div>
<div class="left border" 				style="position:absolute;left:225.00px;top:340px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="300" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="right border" 				style="position:absolute;left:725.00px;top:340px" class="cls_002"><span class="cls_002"><hr width="1" class="style1" size="300" style="border-left:2px solid #000000;border-top:2px solid #000000"></span></div>
<div class="bottom border" 				style="position:absolute;left:228.00px;top:640px" class="cls_002"><span class="cls_002"><hr width="495" length="20"  size="4" style="border-top:2px solid #000000"></span></div>


<div class="Signature"	 style="position:absolute;left:640.00px;top:630px" class="cls_002"><span class="cls_002">Principal</span></div>

<!--------------------------------------------------------------- second receipt  end  ------------------------------------------------------------ -->


<div style="position:absolute;left:250px;top:678" class="cls_003"><span class="cls_003"><input type="button" name="print" value="PRINT" id="print" onClick="y()"></span></div>
<div style="position:absolute;left:450px;top:678" class="cls_003"><span class="cls_003"><input type="button" name="back" value="BACK" id="back" onClick="x()"></span></div>

</div>

</body>
</html>

<script>
function y(){
		
		var p=document.getElementById("print");
		var b=document.getElementById("back");
		p.style.visibility="hidden";
		b.style.visibility="hidden";
		window.print();
		p.style.visibility="visible";
		b.style.visibility="visible";
	
	
	
	
	
}
function x(){
	window.location="generate_receipt.php";
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