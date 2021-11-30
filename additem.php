<!--
$server = "sql6.freemysqlhosting.net";
$user = "sql6455215";
$pass = "XcE9smjsAe";
$database = "sql6455215";
-->

<?php 
$conn = mysqli_connect("sql6.freemysqlhosting.net","sql6455215","XcE9smjsAe","sql6455215");
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