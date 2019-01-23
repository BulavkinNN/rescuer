<?php
if (isset($_POST['need'])){
     $str="    ".strip_tags($_POST['need'])."  ";
     $fd = fopen("../public/need.txt", 'a') or die("не удалось открыть файл");
     fwrite($fd, $str);
     fclose($fd); 
     echo "Запись добавлена!"; 
}

?>


