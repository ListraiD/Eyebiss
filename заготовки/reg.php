<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO users  (fio, num, password, gradeOfClass, class, id) VALUES ('{$_POST['fio']}', '{$_POST['num']}', '{$_POST['password']}', '{$_POST['gradeOfClass']}','{$_POST['class']}', NULL)");
header('location: test.php');
 ?>