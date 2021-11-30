<?php
$conn = mysqli_connect("localhost","root","","sallys");
$id = $_GET['id'];
$sql = "DELETE FROM list WHERE ProductID = '$id'";
$del = mysqli_multi_query($conn, $sql);
if($del)
{
    mysqli_close($conn);
    header("Location: tables.php");
    exit;
}
?>