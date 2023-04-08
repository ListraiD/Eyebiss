<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO users (login, password, admin) VALUES ('{$_POST['login']}', '{$_POST['password']}', '0')");
header('location: check.php');

?>