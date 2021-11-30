<?php
$conn = mysqli_connect("localhost","root","","sallys");
$id = $_GET['id'];
$sql = "INSERT INTO complete SELECT * FROM orders WHERE id = '$id'; 
        DELETE FROM orders WHERE id='" . $_GET["id"] . "'";
$del = mysqli_multi_query($conn, $sql);
if($del)
{
    mysqli_close($conn);
    header("Location: doneorders.php");
    exit;
}
?>