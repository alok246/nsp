<?php

$a = $_POST["Firstname"];
$b = $_POST["Lastname"];
$c = $_POST["Email"];
$d = $_POST["Messagesubject"];
$e = $_POST["Message"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO `contact`(`Firstname`, `Lastname`, `Email`, `Messagesubject`, `Message`) VALUES ('$a','$b','$c','$d','$e')";

if (mysqli_query($conn,$sql)) {
	echo "<script> alert('Account created Succesfully');
	window.location.assign('contact.html')</script>";
	# code...
}
else{
		echo " Account not created";
}
mysqli_close($conn);
?>


