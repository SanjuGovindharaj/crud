<?php
$servername ="localhost";
$username ="root";
password="";
database= "database";

//Create connection

$conn = new mysqli($servername, $username, "", $database);

// Check connection

if ($conn->connect_error)  
{
	echo " connected";
die("connection failed: " . $conn->connect_error);
}
echo "connected sucessfully";
?>