<?php
session_start();
function suma($sumandos) {
    $suma=0;
    foreach ($sumandos as $s){
        $suma+=$s;
    }
    return $suma;
}
echo "<h1>";
foreach ($_SESSION["sumandosArray"]as $k =>$sumando) {
   $simbolo=($k==sizeof($_SESSION["sumandosArray"])-1)?"=":"+";
    echo $sumando.$simbolo;
}
echo suma($_SESSION["sumandosArray"])."</h1>";
echo "<a href='solucionB.php'>Volver</a>";
?>
