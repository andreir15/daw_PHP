<?php
$lineas= <<<QUIJOTE
En un lugar de la Mancha
de cuyo nombre no me acuerdo
no ha mucho que vivia un hidalgo
de los de lanza de astillero

QUIJOTE;
file_put_contents("quijote.txt", $lineas);
file_get_contents("quijote.txt",$lineas);
echo $lineas;
?>