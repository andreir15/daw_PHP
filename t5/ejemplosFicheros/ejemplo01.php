<?php
$f1=fopen("prueba.txt","r");
$f2=fopen("copia.txt","w");

echo "Fichero abierto\n";

while(!feof
    ($f1)){
    $linea=fgets($f1);
    
    fputs($f2,implode("<b>un</b>",explode("un",$linea)));
}

$linea1="En un lugar de La Mancha ";
$linea2="de cuyo nombre no quiero acordarme";
fputs($f1,$linea1);//añade al fichero la linea puesta
fputs($f1,$linea2);
fclose($f1);
fclose($f2);
echo "Fichero cerrado";
?>