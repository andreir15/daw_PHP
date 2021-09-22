   
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
    echo "\n";
    echo "Quieres ordenar la info por nombre?";
    fscanf(STDIN, "%s\n", $ordenarN);
   
    if ($ordenarN=="si"){
        ksort($nArray);
        foreach($nArray as $nombre=>$edad){
       
        echo "$nombre($edad), ";
    }
    }
    echo "\n";
    echo "Quieres ordenar la info por edad?";
    fscanf(STDIN, "%s\n", $ordenarE);
    if ($ordenarE=="si"){
        asort($nArray);
        foreach($nArray as $nombre=>$edad){
            
            echo "$nombre($edad), ";
        }
    }

   
?>