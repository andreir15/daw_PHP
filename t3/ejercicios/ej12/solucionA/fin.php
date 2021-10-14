<?php

function suma($sumandos) {
    $suma=0;
    foreach ($sumandos as $s){
        $suma+=$s;
    }
    return $suma;
}
$sumandos=isset($_COOKIE["sumandosArray"])?unserialize($_COOKIE["sumandosArray"]):[];
echo "<h1>";
foreach ($sumandos as $k =>$sumando) {
    $simbolo=($k==sizeof($sumandos-1))?"=":"+";
    echo $sumando.$simbolo;
}
echo suma($sumandos)."</h1>";
echo "<a href='solucionA.php'>Volver</a>";
?>
