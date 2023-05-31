<?php

$a = $_POST["fname"];
$b = $_POST["lname"];
$c = $_POST["email"];
$d = $_POST["password"];
$e = $_POST["cpassword"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO `signup`(`fname`, `lname`, `email`, `password`, `cpassword`) VALUES ('$a','$b','$c','$d','$e')";

if (mysqli_query($conn,$sql)) {
	echo "<script> alert('Account created Succesfully');
	window.location.assign('signup.html')</script>";
	# code...
}
else{
		echo " Account not created";
}
mysqli_close($conn);
?>


