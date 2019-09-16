<?php 
	include('configuration_update.php');
	session_start();
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
?>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="src/jquery.table2excel.js"></script>
</head>
<body>
<center>
<table border=1 style="border-collapse:collapse;" class="table2excel" >
 <tr><th colspan="4" align="center" > Mahatma Gandhi Institute of Technology </th></tr>
 <tr><th colspan="4" align="center" >Statement of Income Tax deducted from the Salaries of Staff for the month of :&nbsp;<?php echo $month," , ",$year;?></th></tr>
 <tr><th>S.No</th><th>Name of the employee</th><th>Designation</th><th>Amount</th></tr>
 
 <?php
 
	$incometax=0;
	$i=1;
	$fid=0;
	$sql="select * from deductions_t";
	$query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($query);
	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
	$fid=$row['fid'];
	$incometax=$incometax+$row['incometax'];
	$s="select * from details where fid='$fid'";
	$que=mysqli_query($con,$s);
	$ro=mysqli_fetch_array($que,MYSQLI_ASSOC);
		
		
?>
<tr><td align="center"><?php echo $i;?><td><?php echo $ro['name'];?><td><?php echo $ro['designation'];?><td><?php echo $row['incometax'];?>	
<?php
		$i=$i+1;
	}	

	$sql="select * from deductions_nt";
	$query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($query);
	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
	$fid=$row['fid'];
	$incometax=$incometax+$row['incometax'];
	$s="select * from details where fid='$fid'";
	$que=mysqli_query($con,$s);
	$ro=mysqli_fetch_array($que,MYSQLI_ASSOC);
		
		
?>
<tr><td align="center"><?php echo $i;?><td><?php echo $ro['name'];?><td><?php echo $ro['designation'];?><td><?php echo $row['incometax'];?>	
<?php
		$i=$i+1;
	}	

	$sql="select * from deductions_at";
	$query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($query);
	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
	$fid=$row['fid'];
	$incometax=$incometax+$row['incometax'];
	$s="select * from details where fid='$fid'";
	$que=mysqli_query($con,$s);
	$ro=mysqli_fetch_array($que,MYSQLI_ASSOC);
		
		
?>
<tr><td align="center"><?php echo $i;?><td><?php echo $ro['name'];?><td><?php echo $ro['designation'];?><td><?php echo $row['incometax'];?>	
<?php
		$i=$i+1;
	}	

	$sql="select * from deductions_ant";
	$query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($query);
	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
	$fid=$row['fid'];
	$incometax=$incometax+$row['incometax'];
	$s="select * from details where fid='$fid'";
	$que=mysqli_query($con,$s);
	$ro=mysqli_fetch_array($que,MYSQLI_ASSOC);
		
		
?>
<tr><td align="center"><?php echo $i;?><td><?php echo $ro['name'];?><td><?php echo $ro['designation'];?></td><td> <?php echo $row['incometax'];?></td>	
<?php
		$i=$i+1;
	}	
?>

<tr><td colspan="3" align="right" style="font-weight:bold">Total</td><td style="font-weight:bold"><input type="text" onclick="y()" id="incometax" value="<?= $incometax; ?>" style="width:100px;border:none" readonly> </td></tr>
<tr align="center" ><th colspan="4"><input type="text" id="total" value="" style="width:500px;border:none;font-weight:bold" readonly> </th></tr>

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
<script>
window.onload=y();
function y(){

var x=document.getElementById("incometax").value;
var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];


    if ((x = x.toString()).length > 9) return 'overflow';
    var n = ('000000000' + x).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
	
	document.getElementById("total").value=str;

}
</script>
</body>
</html>
	
	
	