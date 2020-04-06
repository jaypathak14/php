<?php
$con=mysqli_connect('localhost','root','');  //third parameter is password
if(!$con)
{
	echo "not connected to server";
}
if(!mysqli_select_db($con,'tutorial')) //tutorial is name of database
{
echo "database not connected";
}

$Name=$POST['username'];    // in databse there is a table in which name aned email are fields
$Email=$POST['email'];
$sql="INSERT INTO person (Name,Email)
      VALUES('$Name','Email')";
if(!mysqli_query($con,$sql))
{
 echo "not inserted";
}
else{
	echo "inserted";
}
?>	

<?php
$con=mysqli_connect('localhost','root','');
function showData(){
	global $con;
	$query="SELECT * from person";
$run=mysqli_query($con,$query);

if ($run==TRUE) {
	$data=mysqli_fetch_assoc($run);
	echo "<pre>";
	print_r($data);
}
else{
	echo "error";3
}
}