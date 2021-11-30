<?php 
$conn = mysqli_connect("localhost","root","","sallys");
$custname = $_POST['customer'];
$contactno = $_POST['phone'];
$add = $_POST['add'];
$mop = $_POST['mop'];
$part = $_POST['part'];
$kilo = $_POST['kiloweight'];
$total = $_POST['total'];
$msg = $_POST['message'];
$stock = mysqli_query($conn, "SELECT Quantity FROM list WHERE MeatType = $part");

if($kilo >= $stock)
{
    echo "<script>alert('Order must not be greater than the current stock.')</script>";
}

$prod = 0;

switch($part)
{
    case "Whole Chicken":
        $prod = 1;
        break;
    case "Breast":
        $prod = 2;
        break;
    case "Thigh":
        $prod = 3;
        break;
    case "Legs":
        $prod = 4;
        break;
    case "Wings":
        $prod = 5;
        break;
    case "Neck":
        $prod = 6;
        break;
    case "Feet":
        $prod = 7;
        break;
    case "Liver":
        $prod = 8;
        break;
    case "Gizzard":
        $prod = 9;
        break;
    case "Intestines":
        $prod = 10;
        break;
    case "Bones":
        $prod = 11;
        break;

}

$sql = "INSERT INTO orders (`CustomerName`, `ContactNo`, `Address`, `ModeOfPayment`, `ProductID`,`Part`, `Kilos`, `Total` , `Message`) VALUES ('$custname', '$contactno', '$add', '$mop', '$prod','$part', '$kilo', '$total', '$msg');
        UPDATE list SET Quantity = Quantity - $kilo WHERE MeatType = '$part'";
$insert = mysqli_multi_query($conn, $sql);
if(!$insert){
   header("Location: 500.php");
}
else{
    header("Location: orderlist.php");
}
?>