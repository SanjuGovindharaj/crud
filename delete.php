<!DOCTYPE html>
<html>
<head>
</head>
<body align="center">
<div class="container">
<form align="Center" method="post">
<label> Name</label><br>
<input type="text" name="name"><br><br>
<button name="delete">Delete</button>


<?php
if(isset($_POST['delete']))
	{
	$server = "localhost";
	$user = "root";
	$database="crud";
	
// Create connection

$conn =mysqli_connect($server, $user,"", $database);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
	}
$name=$_POST['name'];
$query ="delete from entry where name='$name'";
$run_query=mysqli_query($conn,$query);

if($run_query) 
{

    echo "<script> alert('Record deleted successfully')</script>";
}
 else {
    echo "Error deleting record: ";
}
	}
?>
</form>
</body>
</html>