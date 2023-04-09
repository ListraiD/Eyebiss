<?php 
session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO zayavki (imya, phone, problem, imyaadmina, otvet, useriid) VALUES ('{$_POST['imya']}', '{$_POST['phone']}', '{$_POST['problem']}', '{$_POST['imyaadmina']}', '{$_POST['otvet']}', '{$_SESSION['id']}')");
header('location: kons.php');

?>