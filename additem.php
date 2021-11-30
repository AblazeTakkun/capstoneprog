<?php 
$conn = mysqli_connect("localhost","root","","sallys");
$mtype = $_POST['meattype'];
$price= $_POST['price'];
$quant = $_POST['quantity'];



$sql = "INSERT INTO list (`MeatType`, `Price`, `Quantity`) VALUES ('$mtype', '$price', '$quant')"; 
$insert = mysqli_query($conn, $sql);
if(!$insert){
   header("Location: 500.php");
}
else{
    header("Location: tables.php");
}
?>