<?php


include 'connection.php';

$id=$_GET['updateid'];

$sql="SELECT * from user where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$phone=$row['phone'];
$password=$row['password'];


if(isset($_POST['submit'])){

	$fname=$_POST['fname'];
$phone=$_POST['phone']; 
$password=$_POST['password']; 

$sql = "UPDATE  user set id=$id , name='$fname' , phone='$phone' , password='$password' where id=$id";

$result=mysqli_query($conn,$sql);

if($result){
	header('location:useradd.php');

}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form method="post">
     	<h2>LOGIN</h2>
     	<br>
		Enter your first name

		<input type="text" name="fname"   value=<?php echo $name; ?>>

		Enter your phone number

		<input type="text" name="phone"   value=<?php echo $phone; ?>>

		Enter password

		<input type="text" name="password"   value=<?php echo $password; ?>>

     	<button type="submit" name="submit">update</button>
     </form>
	
</body>
</html>
</body>
</html>