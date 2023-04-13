<?php
include 'connection.php';

if(isset($_POST['submit'])){

	$fname=$_POST['fname'];

$password=$_POST['password']; 

$sql = "SELECT * FROM adminsi WHERE name='".$fname."' AND password='".$password."' limit 1";

$result=mysqli_query($conn,$sql);

if($result){
	header('location:admin.php');
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