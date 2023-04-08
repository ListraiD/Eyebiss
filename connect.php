<?php 
	$con = mysqli_connect('localhost', 'u1612727_default','81Tk2OkkhWWNzY0g','u1612727_default');
	$charset = "utf8";
	if(!mysqli_set_charset($con,$charset)){
	    print('Ошибка кодировки');
	}
 ?>