<!DOCTYPE html>
<html>
<head>
	
	<link href="./css/normalize.css" rel="stylesheet">
	<link href="./css/global.css" rel="stylesheet">
	<title></title>
</head>
<body>


<?php
require_once 'php/connection.php'; // подключаем скрипт
 echo " require_once";
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
    echo "all right"; 
// закрываем подключение
mysqli_close($link);
?>






</body>
</html>






