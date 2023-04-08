<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "DELETE FROM history WHERE id='{$_POST['id']}'");
header('location: test.php');
 ?>