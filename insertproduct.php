<?php
include 'connection.php';

if(isset($_POST['submit'])){

	$fname=$_POST['product'];
$phone=$_POST['amount']; 
$password=$_POST['quantity']; 

$sql = "INSERT INTO product (name, amount, qnt)
VALUES ('$fname', '$phone', '$password')";

$result=mysqli_query($conn,$sql);

if($result){
	header('location:admin.php');
    echo "product added successfully";
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>insert product</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form method="post">
     	<h2>ADD PRODUCT</h2>
     	<br>
		Enter Product name

		<input type="text" name="product"  required>

		Enter amount of product

		<input type="text" name="amount"  required>

		Enter quantity

		<input type="text" name="quantity"  required>

     	<button type="submit" name="submit">ADD</button>
     </form>
	
</body>
</html>