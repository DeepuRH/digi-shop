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
$name=$_POST['product_name']; 
$qnt=$_POST['qnt']; 


$dee=mysqli_query($conn, "SELECT * FROM useradd WHERE useradd='$fname' OR mobile='$password'");
if(mysqli_num_rows($dee)>0){
	$sql = "INSERT INTO useradd (useradd, mobile ,product_name ,qnt)
VALUES ('$fname', '$phone' , '$name' ,'$qnt')";
} 

else{
$sql = "INSERT INTO useradd (useradd, mobile)
VALUES ('$fname', '$phone')";

$result=mysqli_query($conn,$sql);

if($result){
	header('location:empty.php');
}

}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>address</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form method="post">
     	<h2></h2>
     	<br>
		Enter your address

		<input type="text" name="fname"  required>

		Enter your phone number

		<input type="text" name="phone"  required>

		Enter your product name

		<input type="text" name="product_name"  required>

		Enter quantity

		<input type="text" name="qnt"  required>


     	<button type="submit" name="submit">SUBMIT</button>
     </form>
	
</body>
</html>