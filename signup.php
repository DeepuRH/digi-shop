<?php
include 'connection.php';
// function str_openssl_enc($str){
// 	$key="deepu";
//     $chiper="AES-128-CTR";//inbuilt method
//     $ivLen=openssl_cipher_iv_length($chiper);
//     $iv=openssl_random_pseudo_bytes(16);
//     // $iv=1234567891234567;//depending on method it is used
//     $option=0;
// 	$str=openssl_encrypt($str,$chiper,$key,$option,$iv);
// 	return $str;
// }
if(isset($_POST['submit'])){

	$fname=$_POST['fname'];
$phone=$_POST['phone']; 
$password=$_POST['password']; 

$dee=mysqli_query($conn, "SELECT * FROM user WHERE name='$fname' OR password='$password'");
if(mysqli_num_rows($dee)>0){
	echo"<script> alert('user exists');</script>";
} 

else{
$sql = "INSERT INTO user (name, phone, password)
VALUES ('$fname', '$phone', '$password')";

$result=mysqli_query($conn,$sql);

if($result){
	header('location:signin.php');
}

}
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>user</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form method="post">
     	<h2>SIGN UP</h2>
     	<br>
		Enter your first name

		<input type="text" name="fname"  required>

		Enter your phone number

		<input type="text" name="phone"  required>

		Enter password

		<input type="text" name="password"  required>

     	<button type="submit" name="submit">SIGN UP</button>
     </form>
	
</body>
</html>