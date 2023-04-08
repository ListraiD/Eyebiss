<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "UPDATE users SET gradeOfClass = '{$_POST['gradeOfClass']}' WHERE num='{$_POST['num']}'");
header('location: test.php');
 ?>