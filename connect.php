<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'gis2-hackathon');
	$charset = "utf8";
	if(!mysqli_set_charset($con,$charset)){
	    print('Ошибка кодировки');
	}
 ?>