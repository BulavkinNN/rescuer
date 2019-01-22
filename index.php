<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="./css/normalize.css" rel="stylesheet">
	<link href="./css/global.css" rel="stylesheet">
	<title>Электрикам</title>
</head>
<body>
	<h5>Введи пароль:</h5>
<form action=index.php method=POST>
<input type=text name=pas>
<input type=submit>
</form>
</body>
</html>




<?PHP 
if (isset($_POST['pas']))
{
 if ($_POST['pas'] == 'smm')
   {
     include("index1.php");
   }
   else
   {
     echo "пароль неверен";
   } 
}
?>