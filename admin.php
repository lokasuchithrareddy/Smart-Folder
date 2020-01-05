<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$n=0;
  $email = $_REQUEST["email"];
  $pwd =$_REQUEST["pwd"];
  $con=new mysqli('localhost','root','','myproject');
  
  if($email=='lokasuchithrareddy@gmail.com'&&$pwd=='9640780113')
    header("Location: upload.html");
  else
  	header("Location: index.html");

}
?>