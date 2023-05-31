<?php

$a = $_POST["sname"];
$b = $_POST["sreg"];
$c = $_POST["syear"];
$d = $_POST["sbranch"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO `services1`(`sname`, `sreg`, `syear`, `sbranch`) VALUES ('$a','$b','$c','$d')";

if (mysqli_query($conn,$sql)) {
	echo "<script> alert('data end Succesfully');
	window.location.assign('services.html')</script>";
	# code...
}
else{
		echo " data not send ";
}
mysqli_close($conn);
?>


