<?php
$con=mysqli_connect('localhost','root','tutorial');
$sql="truncate table employee";
if (mysqli_query($con,$sql)){
	echo "table is truncated";
}
else{
	echo "error in truncate: ";
}
?>
