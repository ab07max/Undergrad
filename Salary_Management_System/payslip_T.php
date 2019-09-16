<?php
	include('configuration.php');
	session_start();
	$fid=$_SESSION['fid'];
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
	$row=$_SESSION['details'];
	$s="select * from earnings_t where fid='$fid'";
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
	$sq="select * from deductions_t where fid='$fid'";
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
    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="src/jquery.table2excel.js"></script>

    </head>
    <body>
        <div id="old">
	<table align="center" style="border-collapse: collapse" border="1" cellpadding="4px" id="tableID" class="table2excel" data-tableName="Test Table 1">
		
<tr>
  		<td colspan="4" align="center"><b> Mahatma Gandhi Institute of Technology  </b> </td>
<tr>
		<td colspan="4" align="center">Chaitanya Bharati P.O., Gandipet, Hyderabad - 75</td>
<tr>
		<td colspan="4" align="center">Pay Slip for the month: <?php echo $month,", ",$year;?></td>
<tr>
		<td colspan="4" align="center">Faculty ID: <?php echo $fid;?></td>
<tr>
		<td width="75">Name :</td> 
  		<td width="165" align="center"><?php echo $row['name'];?></td>
  		<td width="113">Designation :</td>
  		<td width="124" align="center"><?php echo $row['designation'];?></td>  
<tr>
  		<td>Category  :&nbsp;&nbsp;  </td>
  		<td align="center"><?php echo $row['type'];?>    </td>
  		<td>Department  : </td>
  		<td align="center"><?php echo $row['department'];?> </td>   
<tr>
		<td align="center" colspan="2"><b>EARNINGS</b> </td>
  		
  		<td align="center" colspan="2"><b>DEDUCTIONS</b></td>
  		
<tr>
  		<td>Pay Band</td>
  		<td align="center"><?php echo $payband;?></td>
  		<td>E.P.F.</td>
  		<td align="center"><?php echo $epf;?>  </td>
<tr>
  		<td>AGP</td>
  		<td align="center"><?php echo $agp;?></td>    
  		<td>GIS</td>
  		<td align="center"><?php echo $gis;?></td>    
<tr>
		<td>DA</td>
		<td align="center"><?php echo $da;?></td>  
		<td>LIC</td>
		<td align="center"><?php echo $lic;?></td>  
<tr>
		<td>HRA</td>
		<td align="center"><?php echo $hra;?></td>  
		<td>Transport Charges</td>
		<td align="center"><?php echo $transport;?></td>  
<tr>
		<td>S.Pay</td>
		<td align="center"><?php echo $spay;?> </td> 
		<td>Professional Tax</td>
		<td align="center"><?php echo $professional;?> </td> 
<tr>
		<td>P.Pay</td>
		<td align="center"><?php echo $ppay;?></td>  
		<td>Income Tax</td>
		<td align="center"><?php echo $income;?></td>  
<tr>
		<td></td>
		<td></td>
		<td>Medical Insurance
		<td align="center"><?php echo $medical;?></td>  
<tr>
		<td>Gross Pay</td>
		<td align="center"><?php echo $gross;?></td>  
		<td>Total Deductions</td>
		<td align="center"><?php echo $deduction;?></td>  
<tr align="center">
  		<td colspan="4" align="center"><b>Net Pay Rs:<?php echo $net;?></b></td>			
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
	</br>
	</br>
        </div>   
    </body>
</html>