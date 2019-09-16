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
		$i=0;
		$c=0;
		$tcount=0;
		$year=$_REQUEST['year'];
		$fee=0;
		$tfee=0;
		$due=0;
		$tdue=0;
		$sql="select * from student where year='$year' order by branch";
		$query=mysql_query($sql);
		$count=mysql_num_rows($query);
		if($count==0){
?>
<script>
	alert("No Record Found in the database!");
	window.location="co.php";
</script>			
<?php
		}
		else{	
?>
	<div align="center"><h2>MAHATMA GANDHI INSTITUTE OF TECHNOLOGY </h2></div>						
<table id="myTable" border="1px solid" cellspacing="0" width="100%" class="table2excel" data-tableName="Test Table 1">
	 <tr>
	<th colspan="13" align="center"><h2><?php echo $year . " year";?><h2></th>
	</tr> 						
  <tr>
    <th class="tg-yw4l" rowspan="2">Department</th>
    <th class="tg-yw4l" rowspan="2">No. Of Students</th>
    <th class="tg-yw4l" colspan="3">Tuition Fee (Rs)</th>
    <th class="tg-yw4l" rowspan="2">Remarks</th>
  </tr>
  <tr>
    <th class="tg-yw4l">Demand</th>
    <th class="tg-yw4l">Collection</th>
    <th class="tg-yw4l">Balance</th>
  </tr>							
<?php 
		while($row=mysql_fetch_array($query)) { 
			if($i==0){
				$branch=$row['branch'];
				$fee=$fee+$row['fee'];
				$due=$due+$row['feedue'];
				$c=$c+1;
				$i++;
			}
			else{
				if($branch!=$row['branch']){
?>
			<tr>
				<td align="center"><?php echo $branch;?></td>
				<td align="center"><?php echo $c; ?></td>
				<td align="center"><?php echo $fee;?></td>
				<td align="center"><?php echo $fee-$due;?></td>
				<td align="center"><?php echo $due;?></td>
				<td> </td>
			</tr>
<?php				$tcount=$tcount+$c;
					$tfee=$tfee+$fee;
					$tdue=$tdue+$due;
					$branch=$row['branch'];
					$c=0;
					$fee=0;
					$due=0;
					$fee=$fee+$row['fee'];
					$due=$due+$row['feedue'];
					$c=$c+1;
					$i++;
				}
				else{
					$fee=$fee+$row['fee'];
					$due=$due+$row['feedue'];
					$c++;
					$i++;	
				}
			}
		}
		$tcount=$tcount+$c;
		$tfee=$tfee+$fee;
		$tdue=$tdue+$due;
?>
	
		<tr>
			<td align="center"><?php echo $branch;?></td>
			<td align="center"><?php echo $c; ?></td>
			<td align="center"><?php echo $fee;?></td>
			<td align="center"><?php echo $fee-$due;?></td>
			<td align="center"><?php echo $due;?></td>
			<td> </td>
		</tr>
<?php 
		}
	}
?>
							<tr>
								<td align="center" style="font-weight:bold">TOTAL</td>
								<td align="center"style="font-weight:bold"><?php echo $tcount;?></td>
								<td align="center"style="font-weight:bold"><?php echo $tfee;?></td>
								<td align="center"style="font-weight:bold"><?php echo $tfee-$tdue;?></td>
								<td align="center"style="font-weight:bold"><?php echo $tdue;?></td>
								<td> </td>
							</tr>
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
						<a href="co.php"><input type="button" id="back"  value="Back"> </a>


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