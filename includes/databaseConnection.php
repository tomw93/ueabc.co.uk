<?php
	$dbusername = 'root'; // Your MySQL Username
	$dbpassword = 'password'; // Your MySQL Password
	$name = 'ueabc'; // Your MySQL Database
	$host = 'localhost'; // MySQL Host (Remote or Local)
	$stepone = mysql_connect($host, $dbusername, $dbpassword);
	$connect = mysql_select_db($name, $stepone);
if (!$connect) {
   die('Could not connect: ' . mysql_error());
}

$con = mysqli_connect("localhost","root","password","ueabc");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>