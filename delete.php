<?php
$conn = mysqli_connect("sql6.freemysqlhosting.net","sql6455215","XcE9smjsAe","sql6455215");
$id = $_GET['id'];
$sql = "DELETE FROM orders WHERE id = '$id'";
$del = mysqli_multi_query($conn, $sql);
if($del)
{
    mysqli_close($conn);
    header("Location: orderlist.php");
    exit;
}
?>