<?php
	include('configuration.php');
	session_start();
	$date=urlEncode(date("Y-m-d"));
	$month=$_SESSION['month'];
	$year=$_SESSION['year'];
	$count=1;
	$i=0;
	$s="select * from salary where (year='$year' and month='$month')";
	$q=mysqli_query($con,$s);
	$c=mysqli_num_rows($q);
	if($c==0){
?>	
<script>
	alert("Not updated in the database!");
	window.location="bank_statement.php";
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
<table  border=1  style="border-collapse:collapse;" class="table2excel">
<tr><th colspan=6 align="center"> Mahatma Gandhi Institute of Technology 
<tr><td colspan=6 align="center">Chaitanya Bharathi Post, Gandipet, Hyderabad.
<tr><td colspan=3 align="left">To<td colspan=3 align="left">DATE: <?php echo $date;?></h4>
<tr><td colspan=6 align="left">The Bank Manager
<tr><td colspan=6 align="left">Andhra Bank, Kokapet Branch
<tr><th colspan=6 align="center">Bank Statement of Salaries for the month of : &nbsp;&nbsp; <?php echo $month," , ",$year;?> </h4>
<tr><th>Sl.no<th width="200px">Name of the Employee<th width="100px">Designation<th width="70px">A/C No. <th width="70px"> Pan No.<th width="70px"> Netpay
<?php 
	while($r=mysqli_fetch_array($q,MYSQLI_ASSOC)){
		$fid=$r['fid'];
		$a="select max(sno) from salary where (fid='$fid' and year='$year' and month='$month')";
		$b=mysqli_query($con,$a);
		$c=mysqli_fetch_array($b,MYSQLI_ASSOC);
		$sql="select * from details where (fid='$fid')";
		$query=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
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
			$x="select * from salary where sno='$sno'";
			$y=mysqli_query($con,$x);
			$z=mysqli_fetch_array($y,MYSQLI_ASSOC);
?>
<tr><td><?php echo $count;?><td width="200px"><?php echo $row['name'];?><td width="100px"><?php echo $row['designation'];?><td width="70px"><?php echo $row['account'];?><td width="70px"><?php echo $row['pan'];?><td width="70px"><?php echo $z['netpay'];?>
<?php
			$count=$count+1;
			continue;
		}	
	}
?>
</table>
</center>
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