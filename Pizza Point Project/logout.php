<?php
include("db_connect.php");
session_start();
unset($_SESSION['user']);

session_destroy();

$query="truncate table orders";
mysqli_query($conn, $query);

header("refresh:0;url=login.php");

?>