<?php 
$nombre=$_POST["nombre"];
$nombreArchivo=$_FILES["foto"]["name"];
echo "<h1>Hola $nombre. RECIBIDO el archivo $nombreArchivo</h1>";
$carpeta="/tmp/";
copy  ($_FILES ["foto"]["tmp_name"],$carpeta. $nombreArchivo);
echo "Archivo copiado";
?>