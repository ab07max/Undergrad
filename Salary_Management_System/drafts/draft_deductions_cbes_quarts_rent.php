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
 <tr><th colspan="7" align="center" > Mahatma Gandhi Institute of Technology </th></tr>
 <tr><th colspan="7" align="center" >Statement of CBES deductions from the Salaries of Staff for the month of :&nbsp;<?php echo $month," , ",$year;?></th></tr>
 <tr><th>S.No</th><th>Name of the employee</th><th>Designation</th><th>Basic Pay</th> <th>Electricity Charges</th><th>Quarters Rent</th><th>Total</th></tr>
 
 <?php
 
	// **************************************************  this staement is generated for Non Teaching Staff only ******************
 
	$i=1;
	$fid=0;
	$total_electricity=0;
	$total_quarters=0;
	$grand_total=0;
	//$sql is for getting the deductions from the database Deductions Non Teaching
	$sql="select * from deductions_nt"; 
	$query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($query);
	
	
	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
	$fid=$row['fid'];
	
	//$s is for getting the name from the details database Deductions Non Teaching
	
	$s="select * from details where fid='$fid'";
	$que=mysqli_query($con,$s);
	$ro=mysqli_fetch_array($que,MYSQLI_ASSOC);


	//For getting the basic pay from earnings  Non Teaching
	$pay="select * from earnings_nt where fid='$fid'";
	$q=mysqli_query($con,$pay);
	$bas=mysqli_fetch_array($q,MYSQLI_ASSOC);

		
?>
<tr><td align="center"><?php echo $i;?></td><td><?php echo $ro['name'];?></td><td><?php echo $ro['designation'];?></td><td><?php echo $bas['basicpay'];?></td><td><?php echo $row['electricity'];?></td><td><?php echo $row['quartersrent'];?></td><td><?php echo $row['electricity']+$row['quartersrent'];?></td></tr>	
<?php
		$i=$i+1;
		$total_electricity=$total_electricity+$row['electricity'];
		$total_quarters=$total_quarters+$row['quartersrent'];
		$grand_total=$grand_total+$row['electricity']+$row['quartersrent'];
		
		
	}	

	
	
	
	
	
	$sql="select * from deductions_ant";
	$query=mysqli_query($con,$sql);
	$count=mysqli_num_rows($query);
	
	
	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
		
	//$s is for getting the name from the details database Earnings Non Teaching

		
	$fid=$row['fid'];
	$s="select * from details where fid='$fid'";
	$que=mysqli_query($con,$s);
	$ro=mysqli_fetch_array($que,MYSQLI_ASSOC);
	
	//For getting the basic pay from earnings  Adhoc Non Teaching
	$pay="select * from earnings_ant where fid='$fid'";
	$q=mysqli_query($con,$pay);
	$bas=mysqli_fetch_array($q,MYSQLI_ASSOC);
		
		
?>
<tr><td align="center"><?php echo $i;?></td><td><?php echo $ro['name'];?></td><td><?php echo $ro['designation'];?></td><td><?php echo $bas['basicpay'];?></td><td><?php echo $row['electrical'];?></td><td><?php echo $row['quarters'];?></td><td><?php echo $row['electrical']+$row['quarters'];?></td></tr>	

<?php
		$i=$i+1;
		$total_electricity=$total_electricity+$row['electrical'];
		$total_quarters=$total_quarters+$row['quarters'];
		$grand_total=$grand_total+$row['electrical']+$row['quarters'];
	}	

?>

<tr>
	<td colspan="4" align="right" style="font-weight:bold">Total</td>
	<td style="font-weight:bold"><input type="text"  id="" value="<?php echo $total_electricity; ?>" style="width:100px;border:none" readonly> </td>
	<td style="font-weight:bold"><input type="text"  id="" value="<?php echo $total_quarters; ?>" style="width:100px;border:none" readonly> </td>
	<td style="font-weight:bold"><input type="text"  id="total" value="<?php echo $grand_total; ?>" style="width:100px;border:none" readonly> </td>
	</tr>
<tr>
	<th colspan="7"><input type="text" id="totalwords" value="" style="width:500px;border:none;font-weight:bold" align="center" readonly> </th>
</tr>

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

var x=document.getElementById("total").value;
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
	
	document.getElementById("totalwords").value=str;

}
</script>
</body>
</html>
	
	
	