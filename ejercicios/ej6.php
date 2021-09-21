<?php
echo "Nombre?";
fscanf(STDIN, "%s\n", $nombre);
while($nombre!="fin"){
echo "Edad de $nombre?";
fscanf(STDIN, "%d\n", $edad);
$nArray [$nombre] = $edad;
echo "Nombre?";
fscanf(STDIN, "%s\n", $nombre);
}

foreach($nArray as $nombre=>$edad){
   
    echo "$nombre($edad), ";
    
    }


?>