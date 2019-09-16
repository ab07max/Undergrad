<?php
include('configuration.php');
	session_start();
	$fid=$_SESSION['fid'];
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
	$row=$_SESSION['details'];
	$s="select * from earnings_nt where fid='$fid'";
	$q=mysqli_query($con,$s);
	while($r=mysqli_fetch_array($q,MYSQLI_ASSOC))
		if($r['month']==$month && $r['year']==$year){
				$basic=$r['basicpay'];
				$da=$r['da'];
				$hra=$r['hra'];
				$cca=$r['cca'];
				$personal=$r['personalpay'];
				$special=$r['special'];
				$buspass=$r['buspass'];
				$gross=$r['gross'];
		}
	$sq="select * from deductions_nt where fid='$fid'";
	$qr=mysqli_query($con,$sq);
	while($rw=mysqli_fetch_array($qr,MYSQLI_ASSOC))
		if($rw['month']==$month && $rw['year']==$year){
				$epf=$rw['epf'];
				$esic=$rw['esic'];
				$gis=$rw['gis'];
				$lic=$rw['lic'];
				$transport=$rw['transport'];
				$professional=$rw['professional'];
				$quarter=$rw['quartersrent'];
				$electricity=$rw['electricity'];
				$festival=$rw['festival'];
				$income=$rw['incometax'];
				$deduction=$rw['deductions'];
		}
	$sql="select * from salary where fid='$fid'";
	$query=mysqli_query($con,$sql);
	$a="select * from absent where (fid='$fid' && year='$year' && month='$month')";
	$b=mysqli_query($con,$a);
	$cou=mysqli_num_rows($b);
	if($cou==0){
		$casual=0;
		$medical=0;
		$maternity=0;
		$earned=0;
	}
	else{
		$c=mysqli_fetch_array($b,MYSQLI_ASSOC);
		$casual=$c['casual'];
		$medical=$c['medical'];
		$maternity=$c['maternity'];
		$earned=$c['earned'];
	}
	while($ro=mysqli_fetch_array($query,MYSQLI_ASSOC))
		if($ro['month']==$month && $ro['year']==$year)
			$net=$ro['netpay'];
?>
 <html>
    <head>


    </head>
    <body>
        <div id="old">
		<table align="center" style="border-collapse: collapse" border="1" cellpadding="4px" >
		
<tr><th colspan="2"  >Mahatma Gandhi Institute of Technology
<tr><td colspan="2" align="center">Chaitanya Bharati P.O., Gandipet, Hyderabad - 75
<tr><td colspan="2" align="center">Pay Slip for the month: &nbsp; <?php echo $month,", ",$year;?></td>
<tr>
		<td colspan="4" align="center">Faculty ID: <?php echo $fid;?></td>
<tr><td>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <?php echo $row['name'];?>

<td>Designation :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['designation'];?>
<tr><td>Category &nbsp; :&nbsp;&nbsp;<?php echo $row['type'];?>
<td>Department   :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['department'];?>
<tr><td align="center"><b>EARNINGS</b>
<td align="center"><b>DEDUCTIONS</b>
<tr><td>Basic Pay&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $basic;?>
<td>E.P.F. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <?php echo $epf;?>
<tr><td>DA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $da;?>
<td>ESIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $esic;?>
<tr><td>HRA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $hra;?>
<td>GIS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $gis;?>
<tr><td>CCA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $cca;?>
<td>LIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $lic;?>
<tr><td>Personal Pay Allowance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $personal;?>
<td>Transport Charges&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $transport;?>
<tr><td>Special Allowance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $special;?>
<td>Professional Tax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $professional;?>
<tr><td>Bus Pass Allowance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $buspass;?>
<td>Quarters Rent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $quarter;?>
<tr><td><td>Electricity Bill&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $electricity;?>
<tr><td><td>Festival Allowance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $festival;?>
<tr><td><td>Income Tax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $income;?>
<tr><td>Gross Pay&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $gross;?>
<td>Total Deductions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $deduction;?>
<tr align="center"><th colspan="2">Net Pay Rs:&nbsp; <?php echo $net;?>
<tr>
			<td colspan="4" align="center"><b>LEAVES</b></br>
			<?php 
				if($casual!=0)
					echo "Casual: ",$casual;
				echo " ";
				if($medical!=0)	
					echo "Medical: ",$medical;
				echo " ";
				if($earned!=0)	
					echo "Earned: ",$earned;
				echo " ";
				if($maternity!=0) 
					echo "Maternity: ",$maternity;
				echo " ";
				if($casual==0 && $medical==0 && $earned==0 && $maternity==0)
					echo "--ZERO--";
			?>
			</td>
</table>
<p align="center"><input type="button" id="print" value="print" onclick="x()">
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
	</br>
	</br>
        </div>
		       
		

       
        
        
    </body>
    </html>