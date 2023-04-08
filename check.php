<?php
session_start();
?>
<?php
	include "connect.php";
	$query = mysqli_query($con, "SELECT * FROM users WHERE login='{$_POST['login']}' AND password ='{$_POST['password']}'");
	$stroka=$query->fetch_assoc();
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id']=$stroka['compid'];
        if($stroka['admin']==1){
            header('location: admin.php');
        }
        else{
            header('location: main.php');
        }
	}
	else{
		header('location: log.php');
	}
?>