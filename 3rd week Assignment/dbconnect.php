<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="testcheckbox";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) 
{
	echo"Connection Failed....!";
}

else
  {
	echo "Connect Successfully...";
  }
?>