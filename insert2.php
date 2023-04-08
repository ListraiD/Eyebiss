<?php 
session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO zayavki (imya, phone, problem, useriid) VALUES ('{$_POST['imya']}', '{$_POST['phone']}', '{$_POST['problem']}', '{$_SESSION['id']}')");
header('location: kons.php');

?>