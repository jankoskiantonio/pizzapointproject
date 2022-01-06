<?php
session_start();
include("db_connect.php");

$u=$_POST['username'];
$p=$_POST['password'];

$ep=md5($p);

$query="select * from user where userName='$u' and userPassword='$ep'";

$result=mysqli_query($conn,$query);

$nr=mysqli_num_rows($result);

if($nr==1)
{
    echo "You have been logged in";
    $_SESSION['user']=$u;
    $_SESSION['role']='1';
    header("refresh:1;url=index.php");
}
else
{
    echo "Go away. Wrong password or username";
    header("refresh:2;url=login.php");
}

?>