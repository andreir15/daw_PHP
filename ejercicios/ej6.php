<?php
$x=0;

$nombre="";
$nArray[$x]=$nombre;
$edad=0;


while($nombre!="fin"){
echo "Nombre?";
fscanf(STDIN, "%s\n", $nombre);
for($i=0;$i=$x;$i++){
    $nArray[$i]=$nombre;
}

if($nombre!="fin"){
echo "Edad de $nombre?";
fscanf(STDIN, "%d\n", $edad);
$eArray[$nombre]=$edad;
for($i=0;$i=$x;$i++){
    $eArray[$i]=$edad;
}
}
if($nombre=="fin"){
   
    echo "$nArray[$x]($eArray[$nombre]), ";
    
    }
}

?>