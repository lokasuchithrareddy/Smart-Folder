<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$n=0;
  $name = $_REQUEST["name"];
  $email = $_REQUEST["email"];
  $pwd =$_REQUEST["pwd"];
  $con=new mysqli('localhost','root','','myproject');
  $sql="select name,email,pwd from register";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
	{
		if($row["name"]==$name&&$row["email"]==$email&&$row["pwd"]==$pwd)
			$n=1;
	}
  }
   echo '<!DOCTYPE html>
<html>
<head>
	<title>Registration Success Page</title>
	<style type="text/css">
	body
	{
		 background-image: url("thankyou.jpg");
  background-repeat: no-repeat;
  background-size: auto;
  background-attachment: fixed;
  background-position: center;
  padding-top: 10px;
	}
		.c1
		{
			position: absolute; left: 50%; top:50%;margin-top:-185px;margin-left:-225px; width: 400px; height:380px; background:#686868; border:1px solid black;
		}
		.c
		{
			font-style:italic;
			font-size:25px;
			text-align:center;
			color:#C0C0C0;
		}
		.zoom {
  transition: transform .2s; /* Animation */
  text-align: center;
}
.zoom:hover {
  transform: scale(1.25);
}
	</style>
</head>
<body bgcolor="#696969">
<a href="top.html"><button class="zoom"><img src="back.jpg" height="40px" width="60px" align="padding-bottom" align="middle"></button></a>';
  if($n==0)
  {
$sql="insert into register values('$name','$email','$pwd')";
  if($con->query($sql)===true)
	  echo '<m class="c">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;Registration Done Successful!!!</m><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.html"><button class="zoom"><img src="login.jpg" height="40px" width="60px" align="padding-bottom" align="middle">
	<b>Login</b></button></a>';
else
  	echo '<m class="c">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;Error in Registration!!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;<br><a href="register.html"><button class="zoom"><img src="register.jpg" height="40px" width="60px" align="padding-bottom" align="middle">
	<b>Click here for Re-Register</b></button></a></m>';
  }
  else{
	  echo '<m class="c">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;Already Registered!!!<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.html"><button class="zoom"><img src="login.jpg" height="40px" width="60px" align="padding-bottom" align="middle">
	<b>Login</b></button></a></m>';
  }
echo '</body></html>';
}
?>