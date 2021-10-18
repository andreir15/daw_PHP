<?php 
$num=rand(1,3);
function saludo($nombre) {
    $numRnd=rand(1,3);
    $saludo="";
    switch ($numRnd){
        case 1:$saludo="Hola $nombre";break;
        case 2:$saludo="Que tal estas $nombre";break;
        case 3:$saludo="¡Que pasa $nombre!";break;
    }
return $saludo;
}
?>
<h<?=$num ?>>
<?=saludo($_GET["nombre"]) ?>
</h<?=$num ?>>