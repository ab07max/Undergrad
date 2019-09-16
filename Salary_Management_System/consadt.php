<?php 
	include('configuration.php');
	session_start();
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
	$i=0;
	$sql="select * from salary where (year='$year' and month='$month' and type='Adhoc' and stream='teaching')";
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
		$gross=0;
		$net=0;
		$deduction=0;
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
			$epf=$epf+$ro['epf'];
			$gis=$gis+$ro['gis'];
			$transport=$transport+$ro['transportcharges'];
			$income=$income+$ro['incometax'];
			$lic=$lic+$ro['lic'];
			$professional=$professional+$ro['professionaltax'];
			$gross=$gross+$row['grosspay'];
			$deduction=$deduction+$row['deductions'];
			$net=$net+$row['netpay'];
			$c1=$c1+1;
			continue;
			}
		}
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
<tr><th colspan=5> Salary Statement Consolidated for Adhoc-Teaching for the month of:&nbsp;<?php echo $month," , ",$year;?></th></tr>
<tr align="left"><td width="86"></td><td width="221"></td><th  width="184">Particulars<th width="162" align="left">Amount Rs:
<tr align="left"><td></td><td></td><td>E.P.F<td align="left"><?php echo $epf; ?><td width="154"></td>
<tr align="left"><td></td><td></td><td>ESIC<td align="left"><?php echo $esic; ?><td></td>
<tr align="left"><td></td><td></td><td>G.I.S<td align="left"><?php echo $gis;?><td></td>
<tr align="left"><td></td><td></td><td>Transport Charges<td align="left"><?php echo $transport;?><td></td>
<tr align="left"><td></td><td></td><td>Income Tax<td align="left"><?php echo $income;?><td></td>
<tr align="left"><td></td><td></td><td>L.I.C<td align="left"><?php echo $lic;?><td></td>
<tr align="left"><td></td><td></td><td>Professional Tax<td align="left"><?php echo $professional;?><td></td>
<tr align="left"><td></td><td></td><td>Quarters Rent<td align="left"><?php echo $quarters;?><td></td>
<tr align="left"><td></td><td></td><td>Electricity Charges<td align="left"><?php echo $electricity;?><td></td>
<tr align="left"><td></td><td></td><td>Festival Advance<td align="left"><?php echo $festival;?><td></td>
<tr align="left"><td></td><td></td><td>Medical Insurance<td align="left"><?php echo $medical;?><td></td>
<tr ><td></td><td></td><th align="left">Total:<th align="left"><?php echo $total;?><td></td>
<tr align="center"><th>SL. NO.<th>Particulars<th>Gross Salary<th>Deductions<th>Net Salary
<tr><td align="center">1<td>Contract Teaching Staff&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $c1;?>)<td><?php echo $gross;?><td> <?php echo $deduction;?><td> <?php echo $net;?>

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