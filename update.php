<!DOCTYPE html>
<html>
<head>
</head>
<body align="center">
<div class="container">
<form align="Center" method="POST"">
Name:
<input type="text" name="name"><br><br>
Status:
<input type="text" name="status"> <br><br>
<button name="update">Update</button>


<?php
if(isset($_POST['update']))
	{
		
	$server = "localhost";
	$user = "root";
	$database="crud";
	
// Create connection

$conn = mysqli_connect($server, $user,"", $database);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " .$conn->connect_error);
	}
$name=$_POST['name'];
$status=$_POST['status'];
$query = "update entry SET name='$name' WHERE status='$status'";

$run_query=mysqli_query($conn,$query);

if($run_query) 
{

    echo "<script> alert('Record Updated successfully')</script>";
}
 else {
    echo "Error Updatings record: ";
}
	}
?>
</body>
</html>