<?php 

$server = "sql6.freemysqlhosting.net";
$user = "sql6455215";
$pass = "XcE9smjsAe";
$database = "sql6455215";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>