<?php
function suma($sumandos) {
    $suma=0;
    foreach ($sumandos as $s){
        $suma+=$s;
    }
    return $suma;
}
echo "<h1>";
$sumandos=isset($_GET["sumandosArray"])?unserialize($_GET["sumandosArray"]):[];
foreach ($sumandos as $k =>$sumando) {
    $simbolo=($k==sizeof($sumandos-1))?"=":"+";
    echo $sumando.$simbolo;
}
echo suma($sumandos)."</h1>";
echo "<a href='parte1.php'>Volver</a>";
?>