<?php
	include('config.php');
	session_start();
	



	
                $role=$_SESSION['role'];
                if($role=='admin'){ 




	if(isset($_REQUEST['save'])){
		if($_REQUEST['year1'] || $_REQUEST['year2']|| $_REQUEST['year3']){
			$select1=$_REQUEST['year1'];
			$select2=$_REQUEST['year2'];
			$select3=$_REQUEST['year3'];
			if($select1=='I' || $select2=='I' || $select3=='I'){
				$first="I year";
				$_SESSION['first']=$first;
			}
			else
				$_SESSION['first']=" ";
			if($select1=='II' || $select2=='II' ||$select3=='II'){
				$second="II year";
				$_SESSION['second']=$second;
			}
			else
				$_SESSION['second']=" ";
			if($select1=='III'|| $select2=='III'||$select3=='III'){
				$third="III year";
				$_SESSION['third']=$third;
			}
			else
				$_SESSION['third']=" ";
			if($select1=='IV'||$select2=='IV'||$select3=='IV'){
				$fourth="IV year";
				$_SESSION['fourth']=$fourth;
			}
			else
				$_SESSION['fourth']=" ";
		}	
	$name=$_REQUEST['sname'];
	$_SESSION['name']=$name;
	$branch=$_REQUEST['sbranch'];
	$_SESSION['branch']=$branch;
	$roll=$_REQUEST['sid'];
	$_SESSION['roll']=$roll;
	$class=$_REQUEST['sclass'];
	$accred=$_REQUEST['acc'];
	$readd=$_REQUEST['readd'];
	$amount=$_REQUEST['total'];
	$dte=$_REQUEST['date'];
	$ch=$_REQUEST['challan'];
	$_SESSION['ch']=$ch;
	$roll=$_REQUEST['sid'];
	$_SESSION['date']=$dte;
	$date=date("Y-m-d",strtotime($dte));
	$_SESSION['class']=$class;
	$univ=$_REQUEST['univ'];
	$_SESSION['univ']=$univ;
	$late=$_REQUEST['late'];
	$_SESSION['late']=$late;
	$misc=$_REQUEST['misc'];
	$_SESSION['misc']=$misc;
	$_SESSION['acc']=$accred;
	$_SESSION['readd']=$readd;
	$total=$_REQUEST['total'];
	$_SESSION['total']=$total;
	$wrd=$_REQUEST['wrd'];
	$_SESSION['wrd']=$wrd;
	$sql="INSERT INTO `chalan`(`chalanno`, `ddno`, `rollno`, `day`, `amount`, `due`, `accred`, `anyother`, `late`, `readd`) VALUES ('$ch','$class','$roll','$date','$amount','$univ','$accred','$misc','$late','$readd')";
	mysql_query($sql);
	/*$ch=$ch+1;
	$s="update chalanno set chalanno='$ch'";
	mysql_query($s);*/
?>
<script>
	alert('Updated the Databases!');
	window.location = "chal1.php";
</script>
<?php
	}?>	









		<?php } 
	else {
		?>
		<script>
			alert("You are not Authorized to visit this page ");
			window.location="index.php";
		</script>

	<?php }	?>
