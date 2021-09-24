<?php
echo "Dime un numero n:";
fscanf(STDIN, "%d\n", $n);
echo "Dime otro numero p:";
fscanf(STDIN, "%d\n", $p);
if ((0 < $p) && ($p < 11)) {
    for ($i = 0; $i <$n; $i ++) {
        for ($j = 0; $j <$p; $j ++) {
            
            echo "$j ";
        }
    }
} else {echo "P tiene que estar entre 1 y 10"; }

//otra forma de hacerlo por el profe
/*
 for ($i=0;$i<$n*$p;$i++){
 echo $i%$p;
 */
?>