<?php
include "conn.php";
?>

<html>
<head>
	<title>Login Page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="index.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('Login page image.jpeg'); height: 500px;" >
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a>
    </div>

    <ul class="nav navbar-nav">  
      <li><a href="about.html">About Us</a>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="service.html"> Services <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="services.html">A</a></li>
          <li><a href="#">B</a></li>
          
        </ul>
      </li>


      <li><a href="#">FAQs</a></li>
      <li><a href="contact.html">Contact us</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <ul class="nav navbar-nav">

         <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>  
  </ul>
  </div>
</nav>
<div class="login-box">
  <h1>Login</h1>
  <form>
    <div class="textbox">
      <i class="fa fa-user" aria-hidden="true"></i>
      <input type="email" placeholder="Username" name="email" value="" required>
    </div>

    <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="password" placeholder="Password" name="password" value="" required>
    </div>

    <button class="btnn">Login</button>
  </form>
</div>


<?php
if($_GET["savedata")
{
    $un=$_GET['username'];
    $ps=$_GET['password'];

    if($un!="" && $ps!=""){
    $query="INSERT INTO login values('$un','$ps')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo "data inserted into database";
    }
}
}

else
{
    echo "all field are required";
}

?>
</body>
</html>