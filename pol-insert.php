<?php 
//session_start();
include "connect.php";
$update=mysqli_query($con, "UPDATE zayavki SET imya = '{$_POST['imya']}', phone = '{$_POST['phone']}', problem = '{$_POST['problem']}', imyaadmina = '{$_POST['imyaadmina']}', otvet='{$_POST['otvet']}', useriid='{$_POST['useriid']}' WHERE useriid='{$_POST['useriid']}'");
header('location: admin-strategy.php');

?>