<?php 
$esAjax=isset($_SERVER["HTTP_X_REQUESTED_WITH"])?
strtolower($_SERVER["HTTP_X_REQUESTED_WITH"])=="xmlhttprequest":false;
if($esAjax){
    $saludo=saludo($_GET["nombre"]);
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
echo <<<HTML
<h$num>
$saludo
</h$num>
HTML;
}

?>