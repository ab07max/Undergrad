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
	$i=0;
	$ttut=0;
	$tacc=0;
	$tmisc=0;
	$tlate=0;
	$tread=0;
	$ttot=0;
	$tttut=0;
	$ttacc=0;
	$ttmisc=0;
	$ttlate=0;
	$ttread=0;
    if($role=='admin'){
		if(isset($_REQUEST['view'])){
		$month=$_REQUEST['month'];
		$m=date('m',strtotime($month));
		$y=date('Y',strtotime($month));
		$date = $y . '-' . $m . '%';
		//$newdate=date("d-m-Y", strtotime($date)); 
		$sql="select * from feepaid where date like '$date' order by date";
		$query=mysql_query($sql);
		$count=mysql_num_rows($query);
		if($count==0){
?>
<script>
	alert("No Record Found in the database!");
	window.location="viewtrm.php";
</script>			
<?php
		}
		else{	
?>
	<div align="center"><h2>MAHATMA GANDHI INSTITUTE OF TECHNOLOGY </h2>
						<h4>B.Tech Tution Fee Summary Sheet for month of <?php echo date('F Y',strtotime($month));?></h4></div>
						<table id="myTable" border="1px solid" cellspacing="0" width="100%" class="table2excel" data-tableName="Test Table 1">
								
								<tr><th>Date</th><th>Tution Fee<br/>(Rs)</th><th>Accred. Fee<br/>(Rs)</th><th>Misc Fee<br/>(Rs)</th><th>Late Fee<br/>(Rs)</th><th>Re-Admn Fee<br/>(Rs)</th><th>Total Fee<br/>(Rs)</th></tr>
								
<?php 
			while($row=mysql_fetch_array($query)) {
				//echo $row['date'];
				//continue;
				if($i==0){
					$d=$row['date'];
					$ttut=$ttut+$row['feedue'];
					$tacc=$tacc+$row['accred'];
					$tmisc=$tmisc+$row['anyother'];
					$tlate=$tlate+$row['late'];
					$tread=$tread+$row['readd'];
					
					$tttut=$tttut+$row['feedue'];
					$ttacc=$ttacc+$row['accred'];
					$ttmisc=$ttmisc+$row['anyother'];
					$ttlate=$ttlate+$row['late'];
					$ttread=$ttread+$row['readd'];
					//$tttot=$tttot+$tttut+$ttacc+$ttmisc+$ttlate+$ttread;
					/*$tttut=$tttut+$ttut;
					$ttacc=$ttacc+$tacc;
					$ttmisc=$ttmisc+$tmisc;
					$ttlate=$ttlate+$tlate;
					$ttread=$ttread+$tread;
					$tttot=$tttot+$ttot;*/
					$i++;
				}	
				else{
					if($d!=$row['date']){
						$ttot=$ttut+$tacc+$tmisc+$tlate+$tread;
?>
				<tr>
					<td align="center"><?php echo date('d-m-y',strtotime($d)); ?></td>	
					<td align="center"><?php echo $ttut; ?></td>
					<td align="center"><?php echo $tacc; ?></td>
					<td align="center"><?php echo $tmisc; ?></td>
					<td align="center"><?php echo $tlate; ?></td>			
					<td align="center"><?php echo $tread; ?></td>			
					<td align="center"><?php echo $ttot; ?></td>
				</tr>
<?php						
						$d=$row['date'];
						$ttut=0;
						$tacc=0;
						$tmisc=0;
						$tlate=0;
						$tread=0;
						$ttot=0;
						$ttut=$ttut+$row['feedue'];
						$tacc=$tacc+$row['accred'];
						$tmisc=$tmisc+$row['anyother'];
						$tlate=$tlate+$row['late'];
						$tread=$tread+$row['readd'];
						//$ttot=$ttot+$ttut+$tacc+$tmisc+$tlate+$tread;
						$tttut=$tttut+$row['feedue'];
						$ttacc=$ttacc+$row['accred'];
						$ttmisc=$ttmisc+$row['anyother'];
						$ttlate=$ttlate+$row['late'];
						$ttread=$ttread+$row['readd'];
						//$tttot=$tttot+$tttut+$ttacc+$ttmisc+$ttlate+$ttread;
						/*$tttut=$tttut+$ttut;
						$ttacc=$ttacc+$tacc;
						$ttmisc=$ttmisc+$tmisc;
						$ttlate=$ttlate+$tlate;
						$ttread=$ttread+$tread;
						$tttot=$tttot+$ttot;*/
						$i++;
					}
					else{
						/*$ttut=0;
						$tacc=0;
						$tmisc=0;
						$tlate=0;
						$tread=0;
						$ttot=0;*/
						$ttut=$ttut+$row['feedue'];
						$tacc=$tacc+$row['accred'];
						$tmisc=$tmisc+$row['anyother'];
						$tlate=$tlate+$row['late'];
						$tread=$tread+$row['readd'];
						//$ttot=$ttot+$ttut+$tacc+$tmisc+$tlate+$tread;
						$tttut=$tttut+$row['feedue'];
						$ttacc=$ttacc+$row['accred'];
						$ttmisc=$ttmisc+$row['anyother'];
						$ttlate=$ttlate+$row['late'];
						$ttread=$ttread+$row['readd'];
						//$tttot=$tttot+$tttut+$ttacc+$ttmisc+$ttlate+$ttread;
						/*$tttut=$tttut+$ttut;
						$ttacc=$ttacc+$tacc;
						$ttmisc=$ttmisc+$tmisc;
						$ttlate=$ttlate+$tlate;
						$ttread=$ttread+$tread;
						$tttot=$tttot+$ttot;*/
						$i++;
					}
				}
			}
			$ttot=$ttut+$tacc+$tmisc+$tlate+$tread;
?>
			<tr>
					<td align="center"><?php echo date('d-m-y',strtotime($d)); ?></td>	
					<td align="center"><?php echo $ttut; ?></td>
					<td align="center"><?php echo $tacc; ?></td>
					<td align="center"><?php echo $tmisc; ?></td>
					<td align="center"><?php echo $tlate; ?></td>			
					<td align="center"><?php echo $tread; ?></td>			
					<td align="center"><?php echo $ttot; ?></td>
				</tr>
<?php			
		}
	}	
?>
							<tr>
								<td> </td>
								<td align="center" style="font-weight:bold"><?php echo $tttut;?></td>
								<td align="center"style="font-weight:bold"><?php echo $ttacc;?></td>
								<td align="center"style="font-weight:bold"><?php echo $ttmisc;?></td>
								<td align="center"style="font-weight:bold"><?php echo $ttlate;?></td>
								<td align="center"style="font-weight:bold"><?php echo $ttread;?></td>
								<td align="center"style="font-weight:bold"><?php echo $tttut+$ttacc+$ttmisc+$ttlate+$ttread;?></td>
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
						<a href="viewtrm.php"><input type="button" id="back"  value="Back"> </a>


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