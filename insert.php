<?php 
$conn = mysqli_connect("localhost","root","","sallys");

$part = $_POST['part'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "UPDATE list SET Quantity = Quantity + $quantity, Price = $price WHERE MeatType = '$part'";
$insert = mysqli_query($conn, $sql);
if(!$insert){
   header("Location: 500.php");
}
else{
    header("Location: tables.php");
}
?>