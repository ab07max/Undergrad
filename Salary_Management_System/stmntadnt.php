<?php 
	include('configuration.php');
	session_start();
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
	$sql="select * from salary where (year='$year' and month='$month' and type='Adhoc' and stream='nonteaching')";
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
<table border=1 style="border-collapse:collapse;" class="table2excel">
<tr><th colspan=25>Mahatma Gandhi Institute of Technology </th></tr>
<tr><th colspan=25>Salary Statement Adhoc/Contract Teaching Staff for the month of :&nbsp;<?php echo $month," , ",$year;?></th></tr>
<tr><th><th colspan=5>Details<th colspan=6>Earnings<th colspan=12>Deductions<th>
<tr align="center"><th>Sl. No<th>Emp ID<th style="width:100px;">Name of the</br>Employee<th>Contract</br>Period<th>Designation<th>Dept<th>Basic</br>Pay<th width="55px;">DA<th width="55px;">HRA<th width="55px;">CCA<th>Other</br>Allowances<th>Gross</br>Salary<th width="50px;">EPF<th width="55px;">ESIC<th>Transport</br>Charges<th>L.I.C<th width="55px;">IT<th>PTax<th>Qrtrs</br>Rent<th>Elec.</br>charg<th>Fest.</br>Adv.<th>PRC-</br>15 DA<th>MI<th>Total</br> Deductions<th>Net Pay
<?php 
	$basic=0;
	$da=0;
	$hra=0;
	$cca=0;
	$other=0;
	$gross=0;
	$i=1;
	$epf=0;
	$esic=0;
	$transport=0;
	$lic=0;
	$income=0;
	$professional=0;
	$quarters=0;
	$electrical=0;
	$festival=0;
	$prc=0;
	$mi=0;
    $deduction=0;
	$net=0;
	$countt=0;
	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
		$fid=$row['fid'];
		$s="select * from details where fid='$fid'";
		$q=mysqli_query($con,$s);
		$r=mysqli_fetch_array($q,MYSQLI_ASSOC);
		$sq="select * from earnings_ant where fid='$fid'";
		$qu=mysqli_query($con,$sq);
		$ro=mysqli_fetch_array($qu,MYSQLI_ASSOC);
		$sl="select * from deductions_ant where fid='$fid'";
		$qr=mysqli_query($con,$sl);
		$rw=mysqli_fetch_array($qr,MYSQLI_ASSOC);
		$basic=$basic+$ro['basicpay'];
		$da=$da+$ro['da'];
		$hra=$hra+$ro['hra'];
		$cca=$cca+$ro['cca'];
		$other=$other+$ro['special'];
		$gross=$gross+$ro['gross'];
		$epf=$epf+$rw['epf'];
		$esic=$esic+$rw['esic'];
		$transport=$transport+$rw['transport'];
		$lic=$lic+$rw['lic'];
		$income=$income+$rw['incometax'];
		$professional=$professional+$rw['professional'];
		$quarters=$quarters+$rw['quarters'];
		$electrical=$electrical+$rw['electrical'];
		$festival=$festival+$rw['festival'];
		$prc1=0;
		$mi=0;
		$deduction=$deduction+$rw['deductions'];
		$net=$net+$row['netpay'];
?>
	<tr><td align="center"><?php echo $i;?><td><?php echo $r['fid'];?><td><?php echo $r['name'];?><td> <td><?php echo $r['designation'];?><td><?php echo $r['department'];?><td><?php echo $ro['basicpay'];?><td><?php echo $ro['da'];?><td><?php echo $ro['hra'];?><td><?php echo $ro['cca'];?><td><?php echo $ro['special'];?><td><?php echo $ro['gross'];?><td><?php echo $rw['epf'];?><td><?php echo $rw['esic'];?><td><?php echo $rw['transport'];?><td><?php echo $rw['lic'];?><td><?php echo $rw['incometax'];?><td><?php echo $rw['professional'];?><td><?php echo $rw['quarters'];?><td><?php echo $rw['electrical'];?><td><?php echo $rw['festival'];?><td><?php echo $prc;?><td><?php echo $mi;?><td><?php echo $rw['deductions'];?><td><?php echo $row['netpay'];?>	
<?php
		$i=$i+1;
		$countt=$countt+1;
		if($countt==24){
?>
<tr align="left"><td height=40px  align="center" colspan=6 >C/F<td><?php echo $basic;?><td><?php echo $da;?><td><?php echo $hra;?><td><?php echo $cca;?><td><?php echo $other;?><td><?php echo $gross;?><td><?php echo $epf;?><td><?php echo $esic;?><td><?php echo $transport;?><td><?php echo $lic;?><td><?php echo $income;?><td><?php echo $professional;?><td><?php echo $quarters;?><td><?php echo $electrical;?><td><?php echo $festival;?><td><?php echo $prc1;?><td><?php echo $mi;?><td><?php echo $deduction;?><td><?php echo $net;?>
<tr><td colspan="25"  height=120px ></td></tr>
<tr align="center"><th>Sl. No<th>Emp ID<th style="width:100px;">Name of the</br>Employee<th>Contract</br>Period<th>Designation<th>Dept<th>Basic</br>Pay<th width="55px;">DA<th width="55px;">HRA<th width="55px;">CCA<th>Other</br>Allowances<th>Gross</br>Salary<th width="50px;">EPF<th width="55px;">ESIC<th>Transport</br>Charges<th>L.I.C<th width="55px;">IT<th>PTax<th>Qrtrs</br>Rent<th>Elec.</br>charg<th>Fest.</br>Adv.<th>PRC-</br>15 DA<th>MI<th>Total</br> Deductions<th>Net Pay
<tr align="left"><td height=40px  align="center" colspan=6 >B/F<td><?php echo $basic;?><td><?php echo $da;?><td><?php echo $hra;?><td><?php echo $cca;?><td><?php echo $other;?><td><?php echo $gross;?><td><?php echo $epf;?><td><?php echo $esic;?><td><?php echo $transport;?><td><?php echo $lic;?><td><?php echo $income;?><td><?php echo $professional;?><td><?php echo $quarters;?><td><?php echo $electrical;?><td><?php echo $festival;?><td><?php echo $prc1;?><td><?php echo $mi;?><td><?php echo $deduction;?><td><?php echo $net;?>
<?php		$countt=0;	
		}
	}	
?>
<tr><th align="center" colspan=6>Total<th><?php echo $basic;?><th><?php echo $da;?><th><?php echo $hra;?><th><?php echo $cca;?><th><?php echo $other;?><th><?php echo $gross;?><th><?php echo $epf;?><th><?php echo $esic;?><th><?php echo $transport;?><th><?php echo $lic;?><th><?php echo $income;?><th><?php echo $professional;?><th><?php echo $quarters;?><th><?php echo $electrical;?><th><?php echo $festival;?><th><?php echo $prc;?><th><?php echo $mi;?><th><?php echo $deduction;?><th><?php echo $net;?>

</table>
<p align="center">
<input type="button" id="print" value="print" onclick="x()">
<input type="button" id="button" value="Export" >
</p>
</center>

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