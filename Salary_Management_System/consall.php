<?php 
	include('configuration.php');
	session_start();
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
	$it=0;
	$sql="select * from salary where (year='$year' and month='$month' and (type='Adhoc' or type='Regular'))";
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
		$cat=0;
		$cant=0;
		$crt=0;
		$crnt=0;
		$epfat=0;
		$epfant=0;
		$epfrt=0;
		$epfrnt=0;
		$esicat=0;
		$esicant=0;
		$esicrt=0;
		$esicrnt=0;
		$gisat=0;
		$gisant=0;
		$gisrt=0;
		$gisrnt=0;
		$transportat=0;
		$transportant=0;
		$transportrt=0;
		$transportrnt=0;
		$incomeat=0;
		$incomeant=0;
		$incomernt=0;
		$incomert=0;
		$licat=0;
		$licant=0;
		$licrt=0;
		$licrnt=0;
		$professionalat=0;
		$professionalant=0;
		$professionalrt=0;
		$professionalrnt=0;
		$quartersat=0;
		$quartersant=0;
		$quartersrt=0;
		$quartersrnt=0;
		$electricityat=0;
		$electricityant=0;
		$electricityrt=0;
		$electricityrnt=0;
		$festivalat=0;
		$festivalant=0;
		$festivalrt=0;
		$festivalrnt=0;
		$medicalat=0;
		$medicalant=0;
		$medicalrt=0;
		$medicalrnt=0;
		$grossat=0;
		$grossant=0;
		$grossrt=0;
		$grossrnt=0;
		$netat=0;
		$netant=0;
		$netrt=0;
		$netrnt=0;
		$deductionat=0;
		$deductionant=0;
		$deductionrt=0;
		$deductionrnt=0;
		
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
			$fid=$row['fid'];
			$a="select max(sno) from salary where (fid='$fid' and year='$year' and month='$month')";
			$b=mysqli_query($con,$a);
			$c=mysqli_fetch_array($b,MYSQLI_ASSOC);
			$sno=$c['max(sno)'];
			if($it==0){
				$id[$it]=$fid;
				$arr[$it]=$sno;
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
				$id[$it]=$fid;
				$arr[$it]=$sno;
				$it++;
			$a="select * from deductions_at where (fid='$fid' and month='$month' and year='$year')";
			$b=mysqli_query($con,$a);
			$c=mysqli_fetch_array($b,MYSQLI_ASSOC);
			$d="select * from deductions_ant where (fid='$fid' and month='$month' and year='$year')";
			$e=mysqli_query($con,$d);
			$f=mysqli_fetch_array($e,MYSQLI_ASSOC);
			$g="select * from deductions_t where (fid='$fid' and month='$month' and year='$year')";
			$h=mysqli_query($con,$g);
			$i=mysqli_fetch_array($h,MYSQLI_ASSOC);
			$j="select * from deductions_nt where (fid='$fid' and month='$month' and year='$year')";
			$k=mysqli_query($con,$j);
			$l=mysqli_fetch_array($k,MYSQLI_ASSOC);
			if($row['type']=='Adhoc' && $row['month']=="$month" && $row['year']=="$year"){
				if($row['stream']=='teaching'){
					$epfat=$epfat+$c['epf'];
					$gisat=$gisat+$c['gis'];
					$transportat=$transportat+$c['transportcharges'];
					$incomeat=$incomeat+$c['incometax'];
					$licat=$licat+$c['lic'];
					$professionalat=$professionalat+$c['professionaltax'];
					$grossat=$grossat+$row['grosspay'];
					$deductionat=$deductionat+$row['deductions'];
					$netat=$netat+$row['netpay'];
					$cat=$cat+1;
				}
				else{
					$epfant=$epfant+$f['epf'];
					$esicant=$esicant+$f['esic'];
					$transportant=$transportant+$f['transport'];
					$incomeant=$incomeant+$f['incometax'];
					$licant=$licant+$f['lic'];
					$professionalant=$professionalant+$f['professional'];
					$grossant=$grossant+$row['grosspay'];
					$quartersant=$quartersant+$f['quarters'];
					$festivalant=$festivalant+$f['festival'];
					$electricityant=$electricityant+$f['electrical'];
					$medicalant=$medicalant+$f['medical'];
					$deductionant=$deductionant+$row['deductions'];
					$netant=$netant+$row['netpay'];
					$cant=$cant+1;
				}
			}
			else if($row['type']=='Regular' && $row['month']=="$month" && $row['year']=="$year"){
				if($row['stream']=='teaching'){
					$epfrt=$epfrt+$i['epf'];
					$gisrt=$gisrt+$i['gis'];
					$transportrt=$transportrt+$i['transportcharges'];
					$incomert=$incomert+$i['incometax'];
					$licrt=$licrt+$i['lic'];
					$professionalrt=$professionalrt+$i['professionaltax'];
					$medicalrt=$medicalrt+$i['medicalinsurance'];
					$grossrt=$grossrt+$row['grosspay'];
					$deductionrt=$deductionrt+$row['deductions'];
					$netrt=$netrt+$row['netpay'];
					$crt=$crt+1;
				}
				else{
					$epfrnt=$epfrnt+$l['epf'];
					$gisrnt=$gisrnt+$l['gis'];
					$transportrnt=$transportrnt+$l['transport'];
					$incomernt=$incomernt+$l['incometax'];
					$licrnt=$licrnt+$l['lic'];
					$professionalrnt=$professionalrnt+$l['professional'];
					$grossrnt=$grossrnt+$row['grosspay'];
					$quartersrnt=$quartersrnt+$l['quartersrent'];
					$festivalrnt=$festivalrnt+$l['festival'];
					$electricityrnt=$electricityrnt+$l['electricity'];
					$deductionrnt=$deductionrnt+$row['deductions'];
					$netrnt=$netrnt+$row['netpay'];
					$crnt=$crnt+1;
				}
			}
			continue;
			}
		}
		if($cat==0 && $cant==0 && $crt==0 && $crnt==0){
?>
<script>
	alert("No Records Found for that Month and Year!");
	window.location="monthly.php";
</script>
<?php
				die();
		}
		else{
			$totalr=$epfrt+$gisrt+$transportrt+$incomert+$licrt+$professionalrt+$medicalrt+$epfrnt+$gisrnt+$transportrnt+$incomernt+$licrnt+$professionalrnt+$quartersrnt+$festivalrnt+$electricityrnt;
			$totala=$epfat+$gisat+$transportat+$incomeat+$licat+$professionalat+$epfant+$esicant+$transportant+$incomeant+$licant+$professionalant+$quartersant+$festivalant+$electricityant+$medicalant;
			$totalt=$totalr+$totala;
		}
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
<tr><th colspan=5> Salary Statement Consolidated for the month of:&nbsp;<?php echo $month," , ",$year;?> </th></tr>
<tr align="left"><td></td><th  width="150">Particulars<th align="left">Regular<th align="left">Adhoc<th align="left"> Total
<tr align="left"><td></td><td>E.P.F<td align="left"><?php echo $epfrt+$epfrnt;?><td align="left"><?php echo $epfat+$epfant;?><td align="left"><?php echo $epfat+$epfant+$epfrt+$epfrnt;?>
<tr align="left"><td></td><td>ESIC<td align="left"><?php echo $esicrt+$esicrnt;?><td align="left"><?php echo $esicat+$esicant;?><td align="left"><?php echo $esicat+$esicant+$esicrt+$esicrnt;?>
<tr align="left"><td></td><td>G.I.S<td align="left"><?php echo $gisrt+$gisrnt;?><td align="left"><?php echo $gisat+$gisant;?><td align="left"><?php echo $gisat+$gisant+$gisrt+$gisrnt;?>
<tr align="left"><td></td><td>Transport Charges<td align="left"><?php echo $transportrt+$transportrnt;?><td align="left"><?php echo $transportat+$transportant;?><td align="left"><?php echo $transportat+$transportant+$transportrt+$transportrnt;?>
<tr align="left"><td></td><td>Income Tax<td align="left"><?php echo $incomert+$incomernt;?><td align="left"><?php echo $incomeat+$incomeant;?><td align="left"><?php echo $incomeat+$incomeant+$incomert+$incomernt;?>
<tr align="left"><td></td><td>L.I.C<td align="left"><?php echo $licrt+$licrnt;?><td align="left"><?php echo $licat+$licant;?><td align="left"><?php echo $licat+$licant+$licrt+$licrnt;?>
<tr align="left"><td></td><td>Professional Tax<td align="left"><?php echo $professionalrt+$professionalrnt;?><td align="left"><?php echo $professionalat+$professionalant;?><td align="left"><?php echo $professionalat+$professionalant+$professionalrt+$professionalrnt;?>
<tr align="left"><td></td><td>Quarters Rent<td align="left"><?php echo $quartersrt+$quartersrnt;?><td align="left"><?php echo $quartersat+$quartersant;?><td align="left"><?php echo $quartersat+$quartersant+$quartersrt+$quartersrnt;?>
<tr align="left"><td></td><td>Electricity Charges<td align="left"><?php echo $electricityrt+$electricityrnt;?><td align="left"><?php echo $electricityat+$electricityant;?><td align="left"><?php echo $electricityat+$electricityant+$electricityrt+$electricityrnt;?>
<tr align="left"><td></td><td>Festival Advance<td align="left"><?php echo $festivalrt+$festivalrnt;?><td align="left"><?php echo $festivalat+$festivalant;?><td align="left"><?php echo $festivalat+$festivalant+$festivalrt+$festivalrnt;?>
<tr align="left"><td></td><td>Medical Insurance<td align="left"><?php echo $medicalrt+$medicalrnt;?><td align="left"><?php echo $medicalat+$medicalant;?><td align="left"><?php echo $medicalrt+$medicalrnt+$medicalat+$medicalant;?>  	 		
<tr ><td></td><th align="left">Total:<th align="left" ><?php echo $totalr;?><th align="left" ><?php echo $totala;?><th align="left" ><?php echo $totalt;?>
<tr align="center"><th>SL. NO.<th>Particulars<th>Gross Salary<th>Deductions<th>Net Salary
<tr><td align="center">1<td>Regular Teaching Staff&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $crt;?>)<td align="center"><?php echo $grossrt;?><td align="center"><?php echo $deductionrt;?><td align="center"><?php echo $netrt;?>
<tr><td align="center">2<td>Regular Non Teaching Staff&nbsp;&nbsp;&nbsp;(<?php echo $crnt;?>)<td align="center"><?php echo $grossrnt;?><td align="center"><?php echo $deductionrnt;?><td align="center"><?php echo $netrnt;?>
<tr><td align="center">3<td>Contract Teaching Staff&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $cat;?>)<td align="center"><?php echo $grossat;?><td align="center"><?php echo $deductionat;?><td align="center"><?php echo $netat;?>
<tr><td align="center">4<td>Contract Non Teaching Staff&nbsp;&nbsp;(<?php echo $cant;?>)<td align="center"><?php echo $grossant;?><td align="center"><?php echo $deductionant;?><td align="center"><?php echo $netant;?>
<tr><td><th align="left">Total<td align="center"><?php echo $grossrt+$grossrnt+$grossat+$grossant;?><td align="center"><?php echo $deductionrt+$deductionrnt+$deductionat+$deductionant;?><td align="center"><?php echo $netrt+$netrnt+$netat+$netant;?>
</table>
</center>
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