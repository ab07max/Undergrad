<?php 
	include('configuration.php');
	session_start();
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
	$sql="select * from salary where (year='$year' and month='$month' and type='Regular' and stream='nonteaching')";
	$query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($query);
	if($count==0){				
?>
<script>
	alert("Details Unavailable in the database");
	window.location="salary_statement.php";
</script>
<?php
		die();
	}
?>
<html>
	<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="src/jquery.table2excel.js"></script>
	</head>
<body>
<center>
<table border=1 style="border-collapse:collapse;" class="table2excel" >
<tr> <th colspan="25" align="center"> Mahatma Gandhi Institute of Technology </th> </tr>
<tr> <th colspan="25" align="center">Salary Statement of Regular NonTeaching Staff for the month of :&nbsp;<?php echo $month," , ",$year;?></th></tr>

<tr><th><th colspan=4>Details<th colspan=8>Earnings<th colspan=11>Deductions<th>
<tr align="center"><th>Sl. No<th>Emp ID<th style="width:100px;">Name of the</br>Employee<th>Designation<th>Dept<th>Basic Pay<th width="55px;">D.A<th width="55px;">H.R.A<th width="55px;">C.C.A<th>P.P<th>Bus Pass</br>Allow.<th>Other</br>Allow.<th>GROSS</br>TOTAL<th width="50px;">EPF<th width="55px;">GIS<th>TC<th width="55px;">I.T<th>L.I.C<th>Prof.</br>Tax<th>Q.R<th>E.Bill<th>Fest</br>Adv.<th>MI<th>TOTAL</br> Deductions<th>Net Pay
<?php 
	$basic=0;
	$da=0;
	$hra=0;
	$cca=0;
	$ppay=0;
	$bus=0;
	$prc1=0;
	$other=0;
	$gross=0;
	$i=1;
	$epf=0;
	$gis=0;
	$transport=0;
	$income=0;
	$lic=0;
	$professional=0;
	$quarter=0;
	$ebill=0;
	$festival=0;
	$prc2=0;
	$mi=0;
    $deduction=0;
	$net=0;
	$count=0;
	$total_mi=0;
	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
		$fid=$row['fid'];
		$s="select * from details where fid='$fid'";
		$q=mysqli_query($con,$s);
		$r=mysqli_fetch_array($q,MYSQLI_ASSOC);
		$sq="select * from earnings_nt where fid='$fid'";
		$qu=mysqli_query($con,$sq);
		$ro=mysqli_fetch_array($qu,MYSQLI_ASSOC);
		$sl="select * from deductions_nt where fid='$fid'";
		$qr=mysqli_query($con,$sl);
		$rw=mysqli_fetch_array($qr,MYSQLI_ASSOC);
		$basic=$basic+$ro['basicpay'];
		$da=$da+$ro['da'];
		$hra=$hra+$ro['hra'];
		$cca=$cca+$ro['cca'];
		$ppay=$ppay+$ro['personalpay'];
		$bus=$bus+$ro['buspass'];
		$other=$other+$ro['other'];
		$gross=$gross+$ro['gross'];
		$epf=$epf+$rw['epf'];
		$gis=$gis+$rw['gis'];
		$transport=$transport+$rw['transport'];
		$income=$income+$rw['incometax'];
		$lic=$lic+$rw['lic'];
		$professional=$professional+$rw['professional'];
		$quarter=$quarter+$rw['quartersrent'];
		$ebill=$ebill+$rw['electricity'];
		$festival=$festival+$rw['festival'];
		$deduction=$deduction+$rw['deductions'];
		$net=$net+$row['netpay'];
		//$mi=$rw['medicalinsurance'];
		//$total_mi=$total_mi+$rw['medicalinsurance'];
?>
	<tr><td align="center"><?php echo $i;?><td><?php echo $r['fid'];?><td><?php echo $r['name'];?><td><?php echo $r['designation'];?><td><?php echo $r['department'];?><td><?php echo $ro['basicpay'];?><td><?php echo $ro['da'];?><td><?php echo $ro['hra'];?><td><?php echo $ro['cca'];?><td><?php echo $ro['personalpay'];?><td><?php echo $ro['buspass'];?><td><?php echo $ro['other'];?><td><?php echo $ro['gross'];?><td><?php echo $rw['epf'];?><td><?php echo $rw['gis'];?><td><?php echo $rw['transport'];?><td><?php echo $rw['incometax'];?><td><?php echo $rw['lic'];?><td><?php echo $rw['professional'];?><td><?php echo $rw['quartersrent'];?><td><?php echo $rw['electricity'];?><td><?php echo $rw['festival'];?><td><?php echo $mi;?><td><?php echo $rw['deductions'];?><td><?php echo $row['netpay'];?>	
<?php
		$i=$i+1;
		$count=$count+1;
		if($count==24){
?>
<tr align="left"><td height=40px  align="center" colspan=5 >C/F<td><?php echo $basic;?><td><?php echo $da;?><td><?php echo $hra;?><td><?php echo $cca;?><td><?php echo $ppay;?><td><?php echo $bus;?><td><?php echo $other;?><td><?php echo $gross;?><td><?php echo $epf;?><td><?php echo $gis;?><td><?php echo $transport;?><td><?php echo $income;?><td><?php echo $lic;?><td><?php echo $professional;?><td><?php echo $quarter;?><td><?php echo $ebill;?><td><?php echo $festival;?><td><?php echo $total_mi;?><td><?php echo $deduction;?><td><?php echo $net;?>
<tr><td colspan="25"  height=120px ></td></tr>
<tr align="center"><th>Sl. No<th>Emp ID<th style="width:100px;">Name of the</br>Employee<th>Designation<th>Dept<th>Basic Pay<th width="55px;">D.A<th width="55px;">H.R.A<th width="55px;">C.C.A<th>P.P<th>Bus Pass</br>Allow.<th>Other</br>Allow.<th>GROSS</br>TOTAL<th width="50px;">EPF<th width="55px;">GIS<th>TC<th width="55px;">I.T<th>L.I.C<th>Prof.</br>Tax<th>Q.R<th>E.Bill<th>Fest</br>Adv.<th>MI<th>TOTAL</br> Deductions<th>Net Pay
<tr align="left"><td height=40px  align="center" colspan=5 >B/F<td><?php echo $basic;?><td><?php echo $da;?><td><?php echo $hra;?><td><?php echo $cca;?><td><?php echo $ppay;?><td><?php echo $bus;?><td><?php echo $other;?><td><?php echo $gross;?><td><?php echo $epf;?><td><?php echo $gis;?><td><?php echo $transport;?><td><?php echo $income;?><td><?php echo $lic;?><td><?php echo $professional;?><td><?php echo $quarter;?><td><?php echo $ebill;?><td><?php echo $festival;?><td><?php echo $total_mi;?><td><?php echo $deduction;?><td><?php echo $net;?>
<?php		$count=0;	
		}
	}	
?>
<tr align="left"><th align="center" colspan=5>Total<th><?php echo $basic;?><th><?php echo $da;?><th><?php echo $hra;?><th><?php echo $cca;?><th><?php echo $ppay;?><th><?php echo $bus;?><th><?php echo $other;?><th><?php echo $gross;?><th><?php echo $epf;?><th><?php echo $gis;?><th><?php echo $transport;?><th><?php echo $income;?><th><?php echo $lic;?><th><?php echo $professional;?><th><?php echo $quarter;?><th><?php echo $ebill;?><th><?php echo $festival;?><th><?php echo $mi;?><th><?php echo $deduction;?><th><?php echo $net;?>

</table>
</center>
<br>
<br>
<p align="center">
<input type="button" id="print" value="print" onclick="x()">
<input type="button" id="button" value="Export" >
</p>
<script>
	function x(){
		var y=document.getElementById("print");
		var z=document.getElementById("button");
		y.style.visibility="hidden";
		z.style.visibility="hidden"
		window.print();
		y.style.visibility="visible";
		z.style.visibility="visible";

	}
	
</script>
<script>
			$("#button").click(function() {
				$(".table2excel").table2excel({
					exclude: ".noExl",
					name: "Excel Document Name",
					filename: "myFileName",
					fileext: ".xls",
					exclude_img: true,
					exclude_links: true,
					exclude_inputs: true
				});
			});
</script>
</body>
</html>