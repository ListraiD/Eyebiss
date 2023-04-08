<?php
include "connect.php";
session_start();
$query = mysqli_query($con, "SELECT * FROM zayavki ");
?>
<?php
    for($i=0;$i<mysqli_num_rows($query);$i++){
        $stroka = $query->fetch_assoc();
?>
<?php }?>