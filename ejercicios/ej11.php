<?php
$cadena = "Alberto:Garay:913334455//Ana:Garcia:914445566";
$cArray=["Nombre","Apellido","Tel�fono","Nombre","Apellido","Tel�fono"];
$i=0;

$cArray=explode("//",$cadena);
foreach($cArray as $palabra){
    $x=explode(":",$cadena);
    echo "$x[$i]: $palabra\n";
    $i++;
  
}


?>