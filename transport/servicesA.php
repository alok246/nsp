<?php

$a = $_POST["fname"];
$b = $_POST["femail"];
$c = $_POST["fdept"];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO `services2`(`fname`, `femail`, `fdept`) VALUES ('$a','$b','$c')";

if (mysqli_query($conn,$sql)) {
	echo "<script> alert('faculty data send successfully');
	window.location.assign('services.html')</script>";
	# code...
}
else{
		echo " data not send ";
}
mysqli_close($conn);
?>
