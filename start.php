<!DOCTYPE html>
<html>
<head>
	
	<link href="./css/normalize.css" rel="stylesheet">
	<link href="./css/global.css" rel="stylesheet">
	<title></title>
</head>
<body>
<?php
$str = htmlentities(file_get_contents("./public/need.txt"));
echo $str;
?>
<form action="php/addNeed.php" method="POST">
    Добавить в список: <input type="text" name="need" />
     <input type="submit" value="Ок!">
</form>


</body>
</html>






