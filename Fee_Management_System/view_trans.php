<html>
	<head>
		

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="src/jquery.table2excel.js"></script>


	</head>
	<body>
<?php
	include('config.php');
    session_start();
    $role=$_SESSION['role'];
	$sno=1;
	$ttut=0;
	$tacc=0;
	$tmisc=0;
	$tlate=0;
	$tread=0;
	$ttot=0;
    if($role=='admin'){
		if(isset($_REQUEST['view'])){
		$date=$_REQUEST['dateFrom'];
		$newdate=date("d-m-Y", strtotime($date)); 
		$sql="select * from feepaid where date='$date'";
		$query=mysql_query($sql);
		$count=mysql_num_rows($query);
		if($count==0){
?>
<script>
	alert("No Record Found in the database!");
	window.location="viewtr.php";
</script>			
<?php
		}
		else{	
?>
	<div align="center"><h2>MAHATMA GANDHI INSTITUTE OF TECHNOLOGY </h2>
						<h4>Day Wise Fee Collection Register-A/c. No:201 for the year 2016-2017</h4></div>

						<table id="myTable" border="1px solid" cellspacing="0" width="100%" class="table2excel" data-tableName="Test Table 1">
								
								<tr><th>S.No</th><th>Roll No. </th><th>Student Name</th><th>Challan<br/> No. </th><th>Date</th><th>Tution Fee<br/>(Rs)</th><th>Accred. Fee<br/>(Rs)</th><th>Misc Fee<br/>(Rs)</th><th>Late Fee<br/>(Rs)</th><th>Re-Admn Fee<br/>(Rs)</th><th>Total Fee<br/>(Rs)</th><th>Ddno</th><th>Remarks</th></tr>
								
<?php 
		while($row=mysql_fetch_array($query)) { ?>
	
		<tr>
			<td><?php echo $sno;?></td>
			<td><?php echo $row['rollno']; ?></td>
<?php
	$roll=$row['rollno'];
	$a="select * from student where roll='$roll'";
	$b=mysql_query($a);
	$c=mysql_fetch_array($b);
?>	
			<td><?php echo $c['name'];?></td>
			<td><?php echo $row['chalanno']; ?></td>
			<td><?php echo $newdate; ?></td>
			
			<td><?php echo $row['feedue']; ?></td>
			<td><?php echo $row['accred']; ?></td>
			<td><?php echo $row['anyother']; ?></td>
			<td><?php echo $row['late']; ?></td>			
			<td><?php echo $row['readd']; ?></td>			
			<td><?php echo $row['amount']; ?></td>
			<td><?php echo $row['ddno']; ?></td>
			<td> </td>
		</tr>
	
	 <?php 
			$sno++;
			$ttut=$ttut+$row['feedue'];
			$tacc=$tacc+$row['accred'];
			$tmisc=$tmisc+$row['anyother'];
			$tlate=$tlate+$row['late'];
			$tread=$tread+$row['readd'];
			$ttot=$ttot+$row['amount'];
			}
			}
			}?>
							<tr>	
								<td colspan=5> </td>
								<td style="font-weight:bold"><?php echo $ttut;?></td>
								<td style="font-weight:bold"><?php echo $tacc;?></td>
								<td style="font-weight:bold"><?php echo $tmisc;?></td>
								<td style="font-weight:bold"><?php echo $tlate;?></td>
								<td style="font-weight:bold"><?php echo $tread;?></td>
								<td style="font-weight:bold"><?php echo $ttot;?></td>
							</tr>
							</table><br/>
							<br/>
							<table border="0">
							<tr>
							<td>Prepared by&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<td>Verified by&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<td>Accounts Officer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<td>AO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<td>PRINCIPAL
							</tr>
							</table>	 
						</div><p>
						<input type="button" id="print" value="Print" onclick="x()">
						<input type="button" id="button" align="center" value="Export">
						<a href="viewtr.php"><input type="button" id="back"  value="Back"> </a>


	</body>


    <?php } 
    else {
        ?>
        <script>
            alert("You are not Authorized to visit this page ");
            window.location="index.php";
        </script>

    <?php }?>
<script>
	function x(){
		var y=document.getElementById("print");
		var z=document.getElementById("button");
		var a=document.getElementById("back");
		y.style.visibility="hidden";
		z.style.visibility="hidden";
		a.style.visibility="hidden";

		window.print();
		y.style.visibility="visible";
		z.style.visibility="visible";
		a.style.visibility="visible";

	}
	
</script>
<script>
			$("#button").click(function() {
				$(".table2excel").table2excel({
					exclude: ".noExl",
					name: "Excel Document Name",
					filename: "Academic History",
					fileext: ".xls",
					exclude_img: true,
					exclude_links: true,
					exclude_inputs: true
				});
			});
</script>


</html>