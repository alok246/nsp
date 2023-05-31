<?php 

$a=$_POST['email'];
$b=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$conn=mysqli_connect($servername,$username,$password,$dbname);

$sql="select * from signup where email='$a' && password='$b'";
$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)) {
		$row=mysqli_fetch_assoc($result);
	 	header('location:login.html');
        echo "<script>alert('login successfully');</script>";
	}
	else
		echo "<script>alert('Invalid id or password');</script>";
echo "<script>window.location.assign('login.html')</script>";
 ?>