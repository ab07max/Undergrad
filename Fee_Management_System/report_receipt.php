<html>
	<head>
	<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
</style>	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="src/jquery.table2excel.js"></script>


	</head>
	<body>
<?php
	include('config.php');
    session_start();
    $role=$_SESSION['role'];
    if($role=='admin'){
		if(isset($_REQUEST['view'])){
		$date=$_REQUEST['dateFrom'];	
		$sql="select * from receipt where date='$date'";
		$query=mysql_query($sql);
		$count=mysql_num_rows($query);
		$total=0;
		if($count==0){
?>
<script>
	alert("No Record Found in the database!");
	window.location="report.php";
</script>			
<?php
		}
		else{	
?>
	<div align="center"><h2>MAHATMA GANDHI INSTITUTE OF TECHNOLOGY </h2></div>
	<div align="center"><h4>Daily Receipts Report on <?php echo date('d.m.Y',strtotime($date));?> <br/>A/c. No.064311011000201</h4></div>
<table id="myTable" border="1px solid" cellspacing="0" width="100%" class="table2excel" data-tableName="Test Table 1"> 						
  <tr>
	<th align="center">Date</th>
	<th align="center">Receipt No.</th>
	<th align="center">Type</th>
	<th align="center">Total Amt.(Rs.)</th>
	</tr>
<?php 
		while($row=mysql_fetch_array($query)) { 
?>
			<tr>
				<td align="center"><?php echo date('d.m.Y',strtotime($date));?></td>
				<td align="center"><?php echo $row['receiptno']; ?></td>
				<td align="center"><?php echo $row['type']; ?></td>
				<td align="center"><?php echo $row['amount'];?></td>
			</tr>
<?php 		$total=$total+$row['amount'];
		}
		}
		}
?>
							<tr>
								<td colspan="3" align="center" style="font-weight:bold">TOTAL</td>
								<td align="center"style="font-weight:bold"><?php echo $total;?></td>
							</tr>
							</table><br/>
							<br/>
							<h5><?php echo date('l, F d, Y')?></h5>
							<table border="0">
							<tr>
								An Amount of <b>Rs.<?php echo $total;?>/-</b> deposited in A/c.No. 064311011000201 on <b><?php echo date('d.m.Y',strtotime($date));?></b> vide Remittance slip No.4
							</tr><br/><br/>	
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
						<a href="dashboard.php"><input type="button" id="back"  value="Back"> </a>


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