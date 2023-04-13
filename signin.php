<?php
include 'connection.php';

if(isset($_POST['submit'])){

	$fname=$_POST['fname'];

$password=$_POST['password']; 

// $sql = "SELECT * FROM user WHERE name='$fname' OR password='$password'";

// $result=mysqli_query($conn,$sql);


$dee=mysqli_query($conn, "SELECT * FROM user WHERE name='$fname' AND password='$password'");
if(mysqli_num_rows($dee)>0){
	header('location:index.php');
} 

else{
	echo"<script> alert('user unknown');</script>";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form method="post">
     	<h2>SIGN IN</h2>
     	<br>
		Enter your first name

		<input type="text" name="fname"  required>

		Enter password

		<input type="text" name="password"  required>

     	<button type="submit" name="submit">LOGIN</button>
     </form>
	
</body>
</html>