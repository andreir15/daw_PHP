<?php
$c="En un lugar de la Mancha";
echo $c."\n";
$i=1;
foreach (explode(" ",$c)as $palabra){
    echo "$i: $palabra\n";
    $i++;
}
////////////////////////
$a=["Junta","esta","frase"];
echo implode("--",$a);

?>