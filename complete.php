<?php
$conn = mysqli_connect("sql6.freemysqlhosting.net","sql6455215","XcE9smjsAe","sql6455215");
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

<!--
$server = "sql6.freemysqlhosting.net";
$user = "sql6455215";
$pass = "XcE9smjsAe";
$database = "sql6455215";
-->