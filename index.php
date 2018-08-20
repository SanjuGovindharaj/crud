<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
.modal {
display: none; / Hidden by default /
position: fixed; / Stay in place /
z-index: 1; / Sit on top /
left: 0;
top: 0;
width: 100%; / Full width /
height: 100%; / Full height /
overflow: auto; / Enable scroll if needed /
background-color: rgb(0,0,0); / Fallback color /
background-color: rgba(0,0,0,0.4); / Black w/ opacity /
padding-top: 60px;
}
.modal-content {
background-color: #fefefe;
margin: 5% auto 15% auto; / 5% from the top, 15% from the bottom and centered /
border: 1px solid #888;
width: 80%; / Could be more or less, depending on screen size /
}
.close {
position: absolute;
right: 25px;
top: 0;
color: #000;
font-size: 35px;
font-weight: bold;
}
</style>
</head>
<body style="background-color:pink">
<a href="http://localhost/Crud/update.php"> Update </a><br>
<a href="http://localhost/Crud/delete.php"> Delete </a>
<center><br>
<h2>!!!!To-DO!!!!!!</h2><br>
<button onclick="document.getElementById('id11').style.display='block'" style="width:auto;">Create</button>

<div id="id11" class="modal">
<form class="modal-content" action="index.php" method="POST">
<div class="imgcontainer">
<span onclick="document.getElementById('id11').style.display='none'" class="close" title="Close Modal">&times;</span>
</div>
<div class="container"><br>
	<label for="name"><b> Name</b></label>
	<input type="text" name="name"><br>
	
	<br><label for="status"><b>Status </b></label>
	<input type="text" name="status"><br>
	
	<br><button type="submit" name="submit">Submit</button>
	<label>
	<?php 
	if(isset($_POST['submit']))
	{
	$host = "localhost";
	$port = "3307";
	$socket="";
	$user="root";
	$password="sanju";
	$database="crud";

	// Create connection
	
	$con= new mysqli($host, $user, $password);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "Connected successfully";	
    $name=$_POST['name'];
	$status=$_POST['status'];
	$query="insert into entry (Name,Status) values ('$name','$status')";
	$run_query=mysqli_query($con,$query);
	if($run_query)
	{
		echo "<script>alert('query is running')</script>";
	}
	else
	{
		echo "<script>alert('query is not running')</script>";
	}
	}
		?>
		</label>
</div>

	<div class="container" style="background-color:orange"><br>
	<button type="button" onclick="document.getElementById('id11').style.display='none'" class="cancelbtn"> Cancel </button>
	<span class="status">Forget <a href="#"></span>
		</div>
        </form>
<script>
var modal=document.getElementById('id11');
</script>
</body>
</center>
</html>