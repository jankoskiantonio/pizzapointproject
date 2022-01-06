<?php
include("session.php");
include("db_connect.php");

$productid=$_POST['productid'];
$quantity=$_POST['quantity'];
$session=session_id();
$date=date("Y-m-d H:i:s");

$query="insert into tmp values(NULL,$productid,'$session',$quantity,'$date')";
mysqli_query($conn,$query);
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>