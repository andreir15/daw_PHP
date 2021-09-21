<?php
echo "Dame un numero (0 para terminar):";
fscanf (STDIN, "%d\n",$n);
$numeros =[];

while ($n!=0){
    $numeros[]=$n;
  
    echo "Dame un numero (0 para terminar):";
    fscanf (STDIN, "%d\n",$n);
      
}
echo in_array(10,$numeros)? "Aleluya":"Muy mal";
echo "\n";
foreach ($numeros as $k => $numero){
    echo array_shift($numeros);
    echo " ";
}
print_r($numeros);
?>