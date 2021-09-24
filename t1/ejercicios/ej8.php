<?php

echo "Dia de nacimiento?";
fscanf(STDIN,"%d\n", $dia);
echo "Mes de nacimiento?";
fscanf(STDIN,"%d\n", $mes);
echo "Año de nacimiento?";
fscanf(STDIN,"%d\n", $anio);
$tiempo=time()-strtotime("$dia-$mes-$anio");
$tiempoY=(int)($tiempo/31536000);
$segundos=$tiempo%31536000;
$tiempoM=(int)($segundos/2592000);
$segundos=$segundos%2592000;
$tiempoD=(int)($segundos/86400);
$segundos=$segundos%86400;
$tiempoH=(int)($segundos/3600);
$segundos=$segundos%3600;
$tiempoMin=(int)($segundos/60);
$segundos=$segundos%60;

echo "Ha pasado $tiempoY años, $tiempoM meses, $tiempoD dias, $tiempoH horas, $tiempoMin minutos y $segundos segundos" ;
?>