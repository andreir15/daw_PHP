<?php
$cadena="La palabra tonto esta censurada, gilipollas, seras nazi estupido";
$palabrasP=["tonto","estupido","gilipollas","nazi"];
echo $cadena;
echo "\n";
echo str_replace($palabrasP,"*****",$cadena);
?>