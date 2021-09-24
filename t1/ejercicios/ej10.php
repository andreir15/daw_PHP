<?php

$num=[
    "nombre" =>["uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez"],
    "romano"=>["i","ii","iii","iv","v","vi","vii","viii","ix","x"]
];
echo "Dime un numero entre 1 y 10:";
fscanf(STDIN, "%d\n", $n);
while(0>=$n||$n>=11){
echo "Dime un numero entre 1 y 10:";
fscanf(STDIN, "%d\n", $n);
}
do{
echo "Que formato quieres usar?";
fscanf(STDIN, "%s\n", $formato);}
while(!array_key_exists($formato, $num));




for($i=0;$i<$n;$i++){
    echo $num[$formato][$i]." ";
    
}



?>
