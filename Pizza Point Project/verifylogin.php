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
    $_SESSION['user']=$u;
    $_SESSION['role']='1';
    header("refresh:1;url=index.php");
}
else
{
    echo '<script>
        alert("Login failed. Make sure to insert all credentials correctly or try again later");
    </script>';
    header("refresh:0;url=login.php");
}

?>