
<?php
$palabra=$_GET["palabra"];
$f1=fopen("ej01.txt", "a");
fputs($f1, "<b><u>".$palabra."</u></b>");
fclose($f1);
echo $palabra;
?>