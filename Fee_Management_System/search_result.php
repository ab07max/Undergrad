}//end of our letter search script
if(isset($_GET['id'])){
$contactid=$_GET['id'];
//connect  to the database
$db=mysql_connect  ("localhost", "root",  "billdb") or die ('I cannot connect to the database  because: ' . mysql_error());
//-select  the database to use
$mydb=mysql_select_db("billdb");
//-query  the database table
$sql="SELECT  * FROM tenant WHERE tenant_id=" . $contactid;
//-run  the query against the mysql query function
$result=mysql_query($sql);
//-create  while loop and loop through result set
while($row=mysql_fetch_array($result)){
  $fname=$row['fname'];
            $lname=$row['lname'];
            $contact=$row['contact'];
            $room_id=$row['room_id'];
//-display  the result of the array
echo  "<ul>\n";
echo  "<li>" . $fname . " " . $lname .  "</li>\n";
echo  "<li>" . $contact . "</li>\n";
echo  "<li>" . "<a href=mailto:" . $room_id .  ">" . $room_id . "</a></li>\n";
echo  "</ul>";
}
}