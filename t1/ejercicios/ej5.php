<?php
echo "Dime un numero n:";
fscanf(STDIN, "%d\n", $n);
$p="rey";
$f="";
for ($i = 1; $i <= $n; $i ++) {
    
    switch ($p) {
        case "rey":echo "as "; break;
        case "as":echo "dos "; break;
        case "dos":echo "tres "; break;
        case "tres":echo "cuatro "; break;
        case "cuatro":echo "cinco "; break;
        case "cinco":echo "seis "; break;
        case "seis":echo "siete "; break;
        case "siete":echo "sota "; break;
        case "sota":echo "caballo "; break;
        case "caballo":echo "rey "; break;
    }
    $f="$f $p";
}echo $f;

//forma con arrays
/*
 $a=["as","dos","tres","cuatro","cinco","seis","siete","sota","caballo","rey"];
 echo "Introduce n:";
 fscanf(STDIN,"%d\n", $n);
 
 for($i=0;$i<$n;$i++){
 echo $a[$i%10]." ";
 */
?>