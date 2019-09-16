<?php 
	include('configuration.php');
	session_start();
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
	$sql="select * from salary where (year='$year' and month='$month' and type='Regular' and stream='teaching')";
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
<script src="/src/jquery.table2excel.js"></script>
	</head>
<body>
<center>
<table border=1 style="border-collapse:collapse;" class="table2excel" >
 <tr><th colspan="20" align="center" > Mahatma Gandhi Institute of Technology </th></tr>
<tr><th colspan="20" align="center" >Salary Statement Regular Teaching Staff for the month of :&nbsp;<?php echo $month," , ",$year;?></th></tr>

<tr><th><th colspan=4>Details<th colspan=7>Earnings<th colspan=7>Deductions<th>
<tr align="center"><th>Sl. No<th>Emp ID<th style="width:100px;">Name of the</br>Employee<th>Designation<th>Dept<th>PayBand<th width="55px;">AGP<th width="55px;">DA<th width="55px;">HRA<th>Other</br>Allowances<th>PPay<th>Gross</br>Pay<th width="50px;">EPF<th width="55px;">GIS<th>Transport</br>Charges<th width="55px;">ITax<th>L.I.C<th>PTax<th>Total</br> Deductions<th>Net Pay
<?php 
	$payband=0;
	$agp=0;
	$da=0;
	$other=0;
	$hra=0;
	$ppay=0;
	$gross=0;
	$i=1;
	$epf=0;
	$gis=0;
	$transport=0;
	$income=0;
	$lic=0;
	$professional=0;
	$medical=0;
    $deduction=0;
	$net=0;
	$count=0;
	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
		$fid=$row['fid'];
		$s="select * from details where fid='$fid'";
		$q=mysqli_query($con,$s);
		$r=mysqli_fetch_array($q,MYSQLI_ASSOC);
		$sq="select * from earnings_t where fid='$fid'";
		$qu=mysqli_query($con,$sq);
		$ro=mysqli_fetch_array($qu,MYSQLI_ASSOC);
		$sl="select * from deductions_t where fid='$fid'";
		$qr=mysqli_query($con,$sl);
		$rw=mysqli_fetch_array($qr,MYSQLI_ASSOC);
		$payband=$payband+$ro['payband'];
		$agp=$agp+$ro['agp'];
		$da=$da+$ro['da'];
		$hra=$hra+$ro['hra'];
		$other=$other+$ro['spay'];
		$ppay=$ppay+$ro['ppay'];
		$gross=$gross+$ro['gross'];
		$epf=$epf+$rw['epf'];
		$gis=$gis+$rw['gis'];
		$transport=$transport+$rw['transportcharges'];
		$income=$income+$rw['incometax'];
		$lic=$lic+$rw['lic'];
		$professional=$professional+$rw['professionaltax'];
		$deduction=$deduction+$rw['deductions'];
		$net=$net+$row['netpay'];
?>
	<tr><td align="center"><?php echo $i;?><td><?php echo $r['fid'];?><td><?php echo $r['name'];?><td><?php echo $r['designation'];?><td><?php echo $r['department'];?><td><?php echo $ro['payband'];?><td><?php echo $ro['agp'];?><td><?php echo $ro['da'];?><td><?php echo $ro['hra'];?><td><?php echo $ro['spay'];?><td><?php echo $ro['ppay'];?><td><?php echo $ro['gross'];?><td><?php echo $rw['epf'];?><td><?php echo $rw['gis'];?><td><?php echo $rw['transportcharges'];?><td><?php echo $rw['incometax'];?><td><?php echo $rw['lic'];?><td><?php echo $rw['professionaltax'];?><td><?php echo $rw['deductions'];?><td><?php echo $row['netpay'];?>	
<?php
		$i=$i+1;
		$count=$count+1;
		if($count==24){
?>
<tr align="left"><td height=40px  align="center" colspan=5 >C/F<td><?php echo $payband;?><td><?php echo $agp;?><td><?php echo $da;?><td><?php echo $hra;?><td><?php echo $other;?><td><?php echo $ppay;?><td><?php echo $gross;?><td><?php echo $epf;?><td><?php echo $gis;?><td><?php echo $transport;?><td><?php echo $income;?><td><?php echo $lic;?><td><?php echo $professional;?><td><?php echo $deduction;?><td><?php echo $net;?>
<tr><td colspan="20"  height=120px ></td></tr>
<tr align="center" ><th>Sl. No<th>Emp ID<th style="width:100px;">Name of the</br>Employee<th>Designation<th>Dept<th>PayBand<th width="55px;">AGP<th width="55px;">DA<th width="55px;">HRA<th>Other</br>Allowances<th>PPay<th>Gross</br>Pay<th width="50px;">EPF<th width="55px;">GIS<th>Transport</br>Charges<th width="55px;">ITax<th>L.I.C<th>PTax<th>Total</br> Deductions<th>Net Pay
<tr align="left"><td height=40px  align="center" colspan=5 >B/F<td><?php echo $payband;?><td><?php echo $agp;?><td><?php echo $da;?><td><?php echo $hra;?><td><?php echo $other;?><td><?php echo $ppay;?><td><?php echo $gross;?><td><?php echo $epf;?><td><?php echo $gis;?><td><?php echo $transport;?><td><?php echo $income;?><td><?php echo $lic;?><td><?php echo $professional;?><td><?php echo $deduction;?><td><?php echo $net;?>

<?php		$count=0;	
		}
	}	
?>
<tr align="left"><th align="center" colspan=5 >Total<th><?php echo $payband;?><th><?php echo $agp;?><th><?php echo $da;?><th><?php echo $hra;?><th><?php echo $other;?><th><?php echo $ppay;?><th><?php echo $gross;?><th><?php echo $epf;?><th><?php echo $gis;?><th><?php echo $transport;?><th><?php echo $income;?><th><?php echo $lic;?><th><?php echo $professional;?><th><?php echo $deduction;?><th><?php echo $net;?>

</table>
</center>
<br>
<br>
<p align="center">
<input type="button" id="print" value="print" onclick="x()">
<input type="button" id="button" align="center" value="export">
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