<?php
session_start();
unset($_SESSION['user']);

session_destroy();

echo "<h4>You have just been logged out</h4>";

header("refresh:3;url=login.php");

?>