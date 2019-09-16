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
		$sno=1;
		$branch=$_REQUEST['branch'];
		$year=$_REQUEST['year'];
		$sql="select * from student where (branch='$branch' and year='$year')";
		$query=mysql_query($sql);
		$count=mysql_num_rows($query);
		if($count==0){
?>
<script>
	alert("No Record Found in the database!");
	window.location="ex.php";
</script>			
<?php
		}
		else{	
?>
	<div align="center"><h2>MAHATMA GANDHI INSTITUTE OF TECHNOLOGY </h2></div>						
<table id="myTable" border="1px solid" cellspacing="0" width="100%" class="table2excel" data-tableName="Test Table 1">
						
  <tr>
    <th class="tg-yw4l" rowspan="2">SNo</th>
    <th class="tg-yw4l" rowspan="2">Roll No</th>
    <th class="tg-yw4l" rowspan="2">Name of the Student</th>
    <th class="tg-yw4l" rowspan="2">Category</th>
    <th class="tg-yw4l" rowspan="2"> Mode<br/>of<br/>Payment</th>
    <th class="tg-yw4l" colspan="3">Tuition Fee (Rs)</th>
    <th class="tg-yw4l" colspan="3">Miscellaneous Fee (Rs)</th>
    <th class="tg-yw4l" rowspan="2">Remarks</th>
  </tr>
  <tr>
    <th class="tg-yw4l">Demand</th>
    <th class="tg-yw4l">Collection</th>
    <th class="tg-yw4l">Balance</th>
    <th class="tg-yw4l">Demand</th>
    <th class="tg-yw4l">Collection</th>
    <th class="tg-yw4l">Balance</th>
  </tr>
  <tr>
	<th colspan="13" align="center"><?php echo $year . " year";?></th>
	</tr>
	<tr>
		<th colspan="13" align="center"><?php echo $branch;?></th>
	</tr> 								
<?php 
		while($row=mysql_fetch_array($query)) { ?>
	
		<tr>
			<td align="center"><?php echo $sno;?></td>
			<td align="center"><?php echo $row['roll']; ?></td>
			<td align="center"><?php echo $row['name'];?></td>
			<td align="center"><?php echo $row['fee_category'];?></td>
			<td align="center"><?php echo $row['mode'];?></td>
			<td align="center"><?php echo $row['fee']; ?></td>			
			<td align="center"><?php echo ($row['fee']-$row['feedue']); ?></td>			
			<td align="center"><?php echo $row['feedue']; ?></td>
			<td align="center"><?php echo $row['misc']; ?></td>
			<td align="center"><?php echo $row['misc']-$row['miscdue']; ?></td>
			<td align="center"><?php echo $row['miscdue']; ?></td>
			<td align="center"> </td>
		</tr>
	
	 <?php 
			$sno++;
		}
		}
	}?>
							</table><br/>
							<br/>
							<h5><?php echo date('l, F d, Y')?></h5>
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
						<a href="ex.php"><input type="button" id="back"  value="Back"> </a>


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