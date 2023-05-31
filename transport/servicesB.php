<?php

$a = $_POST["pickuplocation"];
$b = $_POST["droplocation"];
$c = $_POST["Email"];
$d = $_POST["nearbyarea"];
$e = $_POST["Message"];




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO `services3`(`pickuplocation`, `droplocation`, `Email`,`nearbyarea`,`Message`) VALUES ('$a','$b','$c','$d','$e')";

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

