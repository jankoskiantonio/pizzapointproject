<?php
session_start();
include("db_connect.php");

$u=$_POST['newname'];
$p=$_POST['newpassword'];
$e=$_POST['newemail'];

$ep=md5($p);

$query="INSERT INTO `user` (`userID`, `userName`, `userPassword`, `userEmail`, `userSubLevel`) VALUES (NULL, '$u', '$ep', '$e', '0');";

if(mysqli_query($conn, $query))
{
    echo "Success";
    header("refresh:10;url=login.php");
}
else{
    echo "Registration failed.";
    header("refresh:10;url=register.php");
}


?>