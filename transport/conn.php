<?php
//database connection
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbpass="test";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn)
{
echo "connected successfully";
}
else
{
//echo "not connected";
die('sorry,we are having some problems'.mysqli_connect_error());
}