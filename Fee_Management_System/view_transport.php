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
    if($role=='admin'){
		if(isset($_REQUEST['view'])){
		$date=$_REQUEST['dateFrom'];
		$newdate=date("d-m-Y", strtotime($date)); 
		$sql="select * from feepaid_transport where date='$date'";
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
	<div align="center"><h2>Transport Transaction History </h2></div>

						<table id="myTable" border="1px solid" cellspacing="0" width="100%" class="table2excel" data-tableName="Test Table 1">
								
								<tr><th>Chalan No. </th><th>TRG No. </th><th>Date</th><th>Roll No. </th><th>Route No.</th><th>Boarding Point</th><th>Fee Paid</th></tr>
								
<?php 
		while($row=mysql_fetch_array($query)) { ?>
	
		<tr>
			<td><?php echo $row['chalanno']; ?></td>
			<td><?php echo $row['trg']; ?></td>
			<td><?php echo $newdate; ?></td>
			<td><?php echo $row['roll']; ?></td>
			<td><?php echo $row['routeno']; ?></td>
			<td><?php echo $row['boarding']; ?></td>
			<td><?php echo $row['feepaid']; ?></td>
		</tr>
	
	 <?php }}
			}?>
								</table> 
						</div>
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
					filename: "Transport History",
					fileext: ".xls",
					exclude_img: true,
					exclude_links: true,
					exclude_inputs: true
				});
			});
</script>


</html>