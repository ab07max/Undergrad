<?php
	include('configuration.php');
	session_start();
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
	$sql="select * from salary where (year='$year' and month='$month')";
	$query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($query);
	$i=0;
	if($count==0){
?>
<script>
	alert("Records of that Year and Month doesn't exist in DB!");
	window.location="payslip.php";
</script>		
<?php
		die();
	}
	else
	?>
<html>	
<head>
	<!--<style type="text/css">
  table, tr, td {border: 1px solid black; }
  tr.noBorder td {border: none; }
</style>-->
	<!--<style>
     .noborder
      {
        border:none;
      }
    </style>-->


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="src/jquery.table2excel.js"></script>

</head>	
<body>
<div id="old" align="center">

<table  style="border-collapse: collapse;align:left" border="1" cellpadding="4px"  id="table" class="table2excel">
<?php
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
			$fid=$row['fid'];
			$a="select * from absent where (fid='$fid' && year='$year' && month='$month')";
			$b=mysqli_query($con,$a);
			$cou=mysqli_num_rows($b);
			if($cou==0){
				$casual=0;
				$medicalleave=0;
				$maternity=0;
				$earned=0;
			}
			else{
				$c=mysqli_fetch_array($b,MYSQLI_ASSOC);
				$casual=$c['casual'];
				$medicalleave=$c['medical'];
				$maternity=$c['maternity'];
				$earned=$c['earned'];
			}
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
			//echo $sno;
			$id[$i]=$fid;
			$arr[$i]=$sno;
			$i++;
			$se="select * from details where fid='$fid'";
			$qe=mysqli_query($con,$se);
			$o=mysqli_fetch_array($qe,MYSQLI_ASSOC);
			if($o['type']=='Regular' && $o['stream']=='teaching'){
				$s="select * from earnings_t where (fid='$fid' and year='$year' and month='$month')";
				$q=mysqli_query($con,$s);
				while($r=mysqli_fetch_array($q,MYSQLI_ASSOC))
					if($r['month']==$month && $r['year']==$year){
						$payband=$r['payband'];
						$agp=$r['agp'];
						$da=$r['da'];
						$hra=$r['hra'];
						$spay=$r['spay'];
						$ppay=$r['ppay'];
						$gross=$r['gross'];
					}
				$sq="select * from deductions_t where (fid='$fid' and year='$year' and month='$month')";
				$qr=mysqli_query($con,$sq);
				while($rw=mysqli_fetch_array($qr,MYSQLI_ASSOC))
					if($rw['month']==$month && $rw['year']==$year){
						$epf=$rw['epf'];
						$gis=$rw['gis'];
						$lic=$rw['lic'];
						$transport=$rw['transportcharges'];
						$professional=$rw['professionaltax'];
						$income=$rw['incometax'];
						$medical=$rw['medicalinsurance'];
						$deduction=$rw['deductions'];
					}		
				$sl="select * from salary where (fid='$fid' and year='$year' and month='$month')";
				$qu=mysqli_query($con,$sl);
				while($ro=mysqli_fetch_array($qu,MYSQLI_ASSOC)){
					if($ro['month']==$month && $ro['year']==$year)
						$net=$ro['netpay'];
				}		
?>

		
<tr>
  		<td colspan="4" align="center"><b> Mahatma Gandhi Institute of Technology  </b> </td>
<tr>
		<td colspan="4" align="center">Chaitanya Bharati P.O., Gandipet, Hyderabad - 75</td>
<tr>
		<td colspan="4" align="center">Pay Slip for the month: <?php echo $month,", ",$year;?></td>
<tr>
		<td colspan="4" align="center">Faculty ID: <?php echo $fid;?></td>		
<tr>
		<td>Name :</td> 
  		<td align="left"><?php echo $o['name'];?></td>
  		<td>Designation :</td>
  		<td align="left"><?php echo $o['designation'];?></td>  
<tr>
  		<td>Category  : </td>
  		<td align="left"><?php echo $o['type'];?>    </td>
  		<td>Department  : </td>
  		<td align="left"><?php echo $o['department'];?> </td>   
<tr>
		<td align="center" colspan="2"><b>EARNINGS</b></td>
  		<td align="center" colspan="2"><b>DEDUCTIONS</b></td>
  		
<tr>
  		<td>Pay Band</td>
  		<td align="left"><?php echo $payband;?></td>
  		<td>E.P.F.</td>
  		<td align="left"><?php echo $epf;?>  </td>
<tr>
  		<td>AGP</td>
  		<td align="left"><?php echo $agp;?></td>    
  		<td>GIS</td>
  		<td align="left"><?php echo $gis;?></td>    
<tr>
		<td>DA</td>
		<td align="left"><?php echo $da;?></td>  
		<td>LIC</td>
		<td align="left"><?php echo $lic;?></td>  
<tr>
		<td>HRA</td>
		<td align="left"><?php echo $hra;?></td>  
		<td>Transport Charges</td>
		<td align="left"><?php echo $transport;?></td>  
<tr>
		<td>S.Pay</td>
		<td align="left"><?php echo $spay;?> </td> 
		<td>Professional Tax</td>
		<td align="left"><?php echo $professional;?> </td> 
<tr>
		<td>P.Pay</td>
		<td align="left"><?php echo $ppay;?></td>  
		<td>Income Tax</td>
		<td align="left"><?php echo $income;?></td>  
<tr>
		<td></td>
		<td></td>
		<td>Medical Insurance</td>
		<td align="left"><?php echo $medical;?></td>  
<tr>
		<td>Gross Pay</td>
		<td align="left"><?php echo $gross;?></td>  
		<td>Total Deductions</td>
		<td align="left"><?php echo $deduction;?></td>  
<tr align="left">
  		<td colspan="4" align="center"><b>Net Pay Rs:<?php echo $net;?></b></td>
		<tr>
			<td colspan="4" align="center"><b>LEAVES</b></br>
			<?php 
				if($casual!=0)
					echo "Casual: ",$casual;
				echo " ";
				if($medicalleave!=0)	
					echo "Medical: ",$medicalleave;
				echo " ";
				if($earned!=0)	
					echo "Earned: ",$earned;
				echo " ";
				if($maternity!=0) 
					echo "Maternity: ",$maternity;
				echo " ";
				if($casual==0 && $medicalleave==0 && $earned==0 && $maternity==0)
					echo "--ZERO--";
			?>
			</td>

<tr><td colspan="4"> </td>
<tr><td colspan="4"> </td>



<?php					
			}
			else if($o['stream']=='teaching' && $o['type']=='Adhoc'){
				$s="select * from earnings_at where fid='$fid'";
				$q=mysqli_query($con,$s);
				while($r=mysqli_fetch_array($q,MYSQLI_ASSOC))
					if($r['month']==$month && $r['year']==$year){
						$basic=$r['basicpay'];
						$b=$r['50%bp'];
						$da=$r['da'];
						$hra=$r['hra'];
						$other=$r['otherallowances'];
						$gross=$r['gross'];
					}
				$sq="select * from deductions_at where fid='$fid'";
				$qr=mysqli_query($con,$sq);
				while($rw=mysqli_fetch_array($qr,MYSQLI_ASSOC))
					if($rw['month']==$month && $rw['year']==$year){
						$epf=$rw['epf'];
						$gis=$rw['gis'];
						$lic=$rw['lic'];
						$transport=$rw['transportcharges'];
						$professional=$rw['professionaltax'];
						$income=$rw['incometax'];
						$deduction=$rw['deductions'];
					}
				$sl="select * from salary where fid='$fid'";
				$qu=mysqli_query($con,$sl);
				while($ro=mysqli_fetch_array($qu,MYSQLI_ASSOC))
					if($ro['month']==$month && $ro['year']==$year)
						$net=$ro['netpay'];
?>
<tr>
  		<td colspan="4" align="center"><b> Mahatma Gandhi Institute of Technology  </b> </td>
<tr>
		<td colspan="4" align="center">Chaitanya Bharati P.O., Gandipet, Hyderabad - 75</td>
<tr>
		<td colspan="4" align="center">Pay Slip for the month: <?php echo $month,", ",$year;?></td>
<tr>
		<td colspan="4" align="center">Faculty ID: <?php echo $fid;?></td>				
<tr>
		<td align="left">Name </td>
		<td align="left"><?php echo $o['name'];?></td>
		<td align="left">Designation</td>
		<td align="left"><?php echo $o['designation'];?></td>
<tr>
		<td align="left">Category</td>
		<td align="left"><?php echo $o['type'];?></td>
		<td align="left">Department  </td>
		<td align="left"><?php echo $o['department'];?></td>
<tr>
		<td align="center" colspan="2"><b>EARNINGS</b></td>
		<td align="center" colspan="2"><b>DEDUCTIONS</b></td>
<tr>
		<td align="left">Basic Pay</td>
		<td align="left"><?php echo $basic;?></td>
		<td align="left">Transport Charges</td>
		<td align="left"><?php echo $transport;?></td>
<tr>
		<td align="left">50 % BP </td>
	<td align="left"><?php echo $b;?></td>
		<td align="left">EPF</td>
		<td align="left"><?php echo $epf;?></td>
<tr>
		<td align="left">DA</td>
		<td align="left"><?php echo $da;?></td>
		<td align="left">Professional Tax</td>
		<td align="left"><?php echo $professional;?></td>
<tr>
		<td align="left">HRA</td>
		<td align="left"><?php echo $hra;?></td>
		<td align="left">Income Ta</td>
		<td align="left"><?php echo $income;?></td>
<tr>
		<td align="left">Other Allowances</td>
	<td align="left"><?php echo $other;?></td>
		<td align="left">GIS</td>
		<td align="left"><?php echo $gis;?></td>
<tr>
		<td></td>
        <td></td>
		<td align="left">LIC</td>
		<td align="left"><?php echo $lic;?></td>
<tr>
		<td align="left">Gross Pay</td>
		<td align="left"><?php echo $gross;?></td>
		<td align="left">Total Deduction</td>
		<td align="left"><?php echo $deduction;?></td>
<tr align="center">
		<td colspan="4"><b>Net Pay Rs:<?php echo $net;?></b></td>

		<tr>
			<td colspan="4" align="center"><b>LEAVES</b></br>
			<?php 
				if($casual!=0)
					echo "Casual: ",$casual;
				echo " ";
				if($medicalleave!=0)	
					echo "Medical: ",$medicalleave;
				echo " ";
				if($earned!=0)	
					echo "Earned: ",$earned;
				echo " ";
				if($maternity!=0) 
					echo "Maternity: ",$maternity;
				echo " ";
				if($casual==0 && $medicalleave==0 && $earned==0 && $maternity==0)
					echo "--ZERO--";
			?>
			</td>

<tr>
		<td colspan="4"> </td>
<tr>
		<td colspan="4"> </td>		
<?php		
				
			}
			else if($o['stream']=='nonteaching' && $o['type']=='Regular'){
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
				$sl="select * from salary where fid='$fid'";
				$qu=mysqli_query($con,$sl);
				while($ro=mysqli_fetch_array($qu,MYSQLI_ASSOC))
					if($ro['month']==$month && $ro['year']==$year)
						$net=$ro['netpay'];
?>
<tr>
  		<td colspan="4" align="center"><b> Mahatma Gandhi Institute of Technology  </b> </td>
<tr>
		<td colspan="4" align="center">Chaitanya Bharati P.O., Gandipet, Hyderabad - 75</td>
<tr>
		<td colspan="4" align="center">Pay Slip for the month: <?php echo $month,", ",$year;?></td>
<tr>
		<td colspan="4" align="center">Faculty ID: <?php echo $fid;?></td>		
<tr align="left">
		<td>Name</td>
		<td><?php echo $o['name'];?></td>
        <td>Designation :</td>
		<td><?php echo $o['designation'];?></td>
<tr align="left">
		<td>Category </td>
		<td><?php echo $o['type'];?></td>
		<td>Department   :</td>
		<td><?php echo $o['department'];?></td>
<tr align="left">
		<td colspan="2"><b>EARNINGS</b></td>
		<td colspan="2"><b>DEDUCTIONS</b></td>
<tr align="left">
		<td>Basic Pay</td>
        <td><?php echo $basic;?></td>
		<td>E.P.F.</td>
		<td><?php echo $epf;?></td>
<tr align="left">
		<td>DA </td>
		<td><?php echo $da;?></td>
		<td>ESIC</td>
		<td><?php echo $esic;?></td>
<tr align="left">
		<td>HRA</td>
		<td><?php echo $hra;?></td>
		<td>GIS</td>
		<td><?php echo $gis;?></td>
<tr align="left">
		<td>CCA</td>
		<td><?php echo $cca;?></td>
		<td>LIC</td>
		<td><?php echo $lic;?></td>
<tr align="left">
		<td>Personal Pay Allowance</td>
	<td><?php echo $personal;?></td>
		<td>Transport Charges</td>
		<td><?php echo $transport;?></td>
<tr align="left">
		<td>Special Allowance</td>
		<td><?php echo $special;?></td>
		<td>Professional Tax</td>
		<td><?php echo $professional;?></td>
<tr align="left">
		<td>Bus Pass Allowance</td>
	<td><?php echo $buspass;?></td>
		<td>Quarters Rent</td>
	<td><?php echo $quarter;?></td>
<tr align="left">
		<td></td>
        <td></td>
        <td>Electricity Bill</td>
		<td><?php echo $electricity;?></td>
<tr align="left">
		<td></td>
        <td></td>
        <td>Festival Allowance</td>
		<td><?php echo $festival;?></td>
<tr align="left">
		<td></td>
        <td></td>
        <td>Income Tax</td>
		<td><?php echo $income;?></td>
<tr align="left">
		<td>Gross Pay</td>
		<td><?php echo $gross;?></td>
		<td>Total Deductions</td>
		<td><?php echo $deduction;?></td>
<tr align="center">
		<td colspan="4"><b>Net Pay Rs:<?php echo $net;?></b></td>

		<tr>
			<td colspan="4" align="center"><b>LEAVES</b></br>
			<?php 
				if($casual!=0)
					echo "Casual: ",$casual;
				echo " ";
				if($medicalleave!=0)	
					echo "Medical: ",$medicalleave;
				echo " ";
				if($earned!=0)	
					echo "Earned: ",$earned;
				echo " ";
				if($maternity!=0) 
					echo "Maternity: ",$maternity;
				echo " ";
				if($casual==0 && $medicalleave==0 && $earned==0 && $maternity==0)
					echo "--ZERO--";
			?>
			</td>
 <tr>
 		<td height="3" colspan="4"></td>
 <tr>
 		<td colspan="4"></td>
<?php
			
			}
			else if($o['stream']=='nonteaching' && $o['type']=='Adhoc'){
				$s="select * from earnings_ant where fid='$fid'";
				$q=mysqli_query($con,$s);
				while($r=mysqli_fetch_array($q,MYSQLI_ASSOC))
					if($r['month']==$month && $r['year']==$year){
						$basic=$r['basicpay'];
						$da=$r['da'];
						$hra=$r['hra'];
						$cca=$r['cca'];
						$special=$r['special'];
						$interim=$r['interim'];
						$gross=$r['gross'];
					}
				$sq="select * from deductions_ant where fid='$fid'";
				$qr=mysqli_query($con,$sq);
				while($rw=mysqli_fetch_array($qr,MYSQLI_ASSOC))
					if($rw['month']==$month && $rw['year']==$year){
						$epf=$rw['epf'];
						$esic=$rw['esic'];
						$lic=$rw['lic'];
						$transport=$rw['transport'];
						$professional=$rw['professional'];
						$electricity=$rw['electrical'];
						$quarters=$rw['quarters'];
						$festival=$rw['festival'];
						$income=$rw['incometax'];
						$medical=$rw['medical'];
						$deduction=$rw['deductions'];
					}
				$sl="select * from salary where fid='$fid'";
				$qu=mysqli_query($con,$sl);
				while($ro=mysqli_fetch_array($qu,MYSQLI_ASSOC))
					if($ro['month']==$month && $ro['year']==$year)
						$net=$ro['netpay'];
?>
 
<tr>
  		<td colspan="4" align="center"><b> Mahatma Gandhi Institute of Technology  </b> </td>
<tr>
		<td colspan="4" align="center">Chaitanya Bharati P.O., Gandipet, Hyderabad - 75</td>
<tr>
		<td colspan="4" align="center">Pay Slip for the month: <?php echo $month,", ",$year;?></td>
<tr>
		<td colspan="4" align="center">Faculty ID: <?php echo $fid;?></td>		
<tr>
		<td>Name </td>
		<td><?php echo $o['name'];?></td>
		<td>Designation :</td>
		<td><?php echo $o['designation'];?></td>
<tr>
		<td>Category</td>
        <td><?php echo $o['type'];?></td>
		<td>Department   :</td>
		<td><?php echo $o['department'];?></td>
<tr>
		<td colspan=2><b>EARNINGS</b>
		<td colspan=2><b>DEDUCTIONS</b>
<tr>
		<td>Basic Pay</td>
		<td><?php echo $basic;?></td>
		<td>E.P.F. </td>
		<td><?php echo $epf;?></td>
<tr>
		<td>DA </td>
		<td><?php echo $da;?></td>
		<td>ESIC</td>
		<td><?php echo $esic;?></td>
<tr>
		<td>HRA</td>
		<td><?php echo $hra;?></td>
		<td>LIC</td>
		<td><?php echo $lic;?></td>
<tr>
		<td>CCA and Other Allowances</td>
		<td><?php echo $cca;?></td>
		<td>Transport Charges</td>
		<td><?php echo $transport;?></td>
<tr>
		<td>Special Allowances</td>
		<td><?php echo $special;?></td>
		<td>Professional Tax</td>
		<td><?php echo $professional;?></td>
<tr>
		<td>Interim Relief</td>
		<td><?php echo $interim;?></td>
		<td>Income Tax</td>
		<td><?php echo $income;?></td>
<tr>
		<td></td>
        <td></td>
        <td>Festival Advance</td>
		<td><?php echo $festival;?></td>
<tr>
		<td></td>
        <td></td>
        <td>Quarters Rent</td>
	<td><?php echo $quarters;?></td>
<tr>
		<td></td>
		<td></td>
        <td>Electrical Charges</td>
		<td><?php echo $electricity;?></td>
<tr>
		<td></td>
        <td></td>
        <td>Medical Insurance</td>
		<td><?php echo $medical;?></td>
<tr>
		<td>Gross Pay</td>
		<td><?php echo $gross;?></td>
		<td>Total Deductions</td>
		<td><?php echo $deduction;?></td>
<tr align="center">
		<td colspan="4"><b>Net Pay Rs:<?php echo $net;?></b></td>

		<tr>
			<td colspan="4" align="center"><b>LEAVES</b></br>
			<?php 
				if($casual!=0)
					echo "Casual: ",$casual;
				echo " ";
				if($medicalleave!=0)	
					echo "Medical: ",$medicalleave;
				echo " ";
				if($earned!=0)	
					echo "Earned: ",$earned;
				echo " ";
				if($maternity!=0) 
					echo "Maternity: ",$maternity;
				echo " ";
				if($casual==0 && $medicalleave==0 && $earned==0 && $maternity==0)
					echo "--ZERO--";
			?>
			</td>

 <tr>
 		<td colspan="4"></td>
 <tr>
 		<td colspan="4"></td>		
<?php			continue;
			}
			}
		}	
?>
</table>
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
      </div>  
    </body>
</html> 