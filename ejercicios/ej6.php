<?php
$nArray[];//Acabar
$nombre="";

while($nombre!="fin"){
echo "Nombre?";
fscanf(STDIN, "%s\n", $nombre);
$nArray[]=$nombre;
//probar un for para guardar el nombre dentro del array
if($nombre!="fin"){
echo "Edad de $nombre?";
fscanf(STDIN, "%d\n", $edad);
$eArray[$nombre]=$edad;
}
}

?>