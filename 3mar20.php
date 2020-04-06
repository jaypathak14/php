<?php
$con=mysqli_connect('localhost','root',',','tutorial');

$id=$_GET['i'];
$query="DELETE FROM PERSON WHERE ID='$id'";
$data=mysqli_query($con,$query);
if($data){
	echo "record deleted from table";
	?>
<META HTTP-EQUITY="Refresh" CONTENT="0";
URL=http://localhost:8080/display.php">
<?php
}
else{
	echo "sorry,deleted process failed";
}
