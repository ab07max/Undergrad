<?php 
	include('configuration.php');
	session_start();
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
	$i=0;
	$sql="select * from salary where (year='$year' and month='$month' and type='Adhoc' and (stream='teaching' or stream='nonteaching'))";
	$query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($query);
	if($count==0){
?>
<script>
	alert("No records found with this month and year!");
	window.location="monthly.php";
</script>
<?php		
	}
	else{
		$c1=0;
		$c2=0;
		$epf=0;
		$esic=0;
		$gis=0;
		$transport=0;
		$income=0;
		$lic=0;
		$professional=0;
		$quarters=0;
		$electricity=0;
		$festival=0;
		$medical=0;
		$gross1=0;
		$gross2=0;
		$net1=0;
		$net2=0;
		$deduction1=0;
		$deduction2=0;
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
			$fid=$row['fid'];
			$a="select max(sno) from salary where (fid='$fid' and year='$year' and month='$month')";
			$b=mysqli_query($con,$a);
			$c=mysqli_fetch_array($b,MYSQLI_ASSOC);
			$sno=$c['max(sno)'];
			if($i==0){
				$id[$i]=$fid;
				$arr[$i]=$sno;
				goto a;
			}
			foreach($id as $x)
				foreach($arr as $y)
					if($x==$fid && $y==$sno)
						goto b;
			goto a;	
			b:{
				continue;
			}
			a:{
				$id[$i]=$fid;
				$arr[$i]=$sno;
				$i++;
			$sq="select * from deductions_at where (fid='$fid' and month='$month' and year='$year')";
			$qu=mysqli_query($con,$sq);
			$ro=mysqli_fetch_array($qu,MYSQLI_ASSOC);
			$sl="select * from deductions_ant where (fid='$fid' and month='$month' and year='$year')";
			$qr=mysqli_query($con,$sl);
			$rw=mysqli_fetch_array($qr,MYSQLI_ASSOC);
			if($row['stream']=='teaching' && $row['type']=='Adhoc' && $row['month']=="$month" && $row['year']=="$year"){
				$epf=$epf+$ro['epf'];
				$gis=$gis+$ro['gis'];
				$transport=$transport+$ro['transportcharges'];
				$income=$income+$ro['incometax'];
				$lic=$lic+$ro['lic'];
				$professional=$professional+$ro['professionaltax'];
				$gross1=$gross1+$row['grosspay'];
				$deduction1=$deduction1+$row['deductions'];
				$net1=$net1+$row['netpay'];
				$c1=$c1+1;
			}
			else if($row['stream']=='nonteaching' && $row['type']=='Adhoc' && $row['month']=="$month" && $row['year']=="$year"){
				$epf=$epf+$rw['epf'];
				$esic=$esic+$rw['esic'];
				$transport=$transport+$rw['transport'];
				$income=$income+$rw['incometax'];
				$lic=$lic+$rw['lic'];
				$professional=$professional+$rw['professional'];
				$gross2=$gross2+$row['grosspay'];
				$quarters=$quarters+$rw['quarters'];
				$festival=$festival+$rw['festival'];
				$electricity=$electricity+$rw['electrical'];
				$medical=$medical+$rw['medical'];
				$deduction2=$deduction2+$row['deductions'];
				$net2=$net2+$row['netpay'];
				$c2=$c2+1;
			}
			continue;
			}
		}
		if($c1==0 && $c2==0){
?>
<script>
	alert("No Records Found for that Month and Year!");
	window.location="monthly.php";
</script>
<?php			
		}
		else
			$total=$epf+$esic+$gis+$transport+$income+$lic+$professional+$quarters+$electricity+$festival+$medical;
	}	
?>
<html>
<head>
<style>
#table2{
border-spacing: 3px;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="src/jquery.table2excel.js"></script>
</head>
<body>
<center>
<table width="831"  style="empty-cells: hide" class="table2excel" >
<tr><th colspan=5> Mahatma Gandhi Institute of Technology </th></tr>
<tr><th colspan=5>Salary Statement Consolidated for Adhoc/Contract Teaching and Non-Teaching Staff for the month of :&nbsp;<?php echo $month," , ",$year;?></th></tr>
<tr align="left"><td width="83"></td><td width="231"></td><th  width="185">Particulars<th width="182" align="left">Amount Rs:<td width="126"></td>
<tr align="left"><td></td><td></td><td>E.P.F<td><?php echo $epf;?><td></td>
<tr align="left"><td></td><td></td><td>ESIC<td><?php echo $esic;?><td></td>
<tr align="left"><td></td><td></td><td>G.I.S<td><?php echo $gis;?><td></td>
<tr align="left"><td></td><td></td><td>Transport Charges<td><?php echo $transport;?><td></td>
<tr align="left"><td></td><td></td><td>Income Tax<td><?php echo $income;?><td></td>
<tr align="left"><td></td><td></td><td>L.I.C<td><?php echo $lic;?><td></td>
<tr align="left"><td></td><td></td><td>Professional Tax<td><?php echo $professional;?><td></td>
<tr align="left"><td></td><td></td><td>Quarters Rent<td><?php echo $quarters;?><td></td>
<tr align="left"><td></td><td></td><td>Electricity Charges<td><?php echo $electricity;?><td></td>
<tr align="left"><td></td><td></td><td>Festival Advance<td><?php echo $festival;?><td></td>
<tr align="left"><td></td><td></td><td>Medical Insurance<td><?php echo $medical;?><td></td>
<tr align="left"><td></td><td></td><th>Total:<td><?php echo $total;?><td></td>
<tr align="center"><th>SL. NO.<th>Particulars<th>Gross Salary<th>Deductions<th>Net Salary
<tr><td align="center">1<td>Contract Teaching Staff&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $c1;?>)<td><?php echo $gross1;?><td><?php echo $deduction1;?><td><?php echo $net1;?>
<tr><td align="center">2<td>Contract Non Teaching Staff&nbsp;&nbsp;(<?php echo $c2;?>)<td><?php echo $gross2;?><td><?php echo $deduction2;?><td><?php echo $net2;?>
<tr><td><th align="left">Total<td><?php echo $gross1+$gross2;?><td><?php echo $deduction1+$deduction2;?><td><?php echo $net1+$net2;?>
</table>
<p align="center"><input type="button" id="print" value="print" onclick="x()">
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