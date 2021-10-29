<?php
require_once '../ej01/util.php';
$tipo=isset($_GET["t"])?$_GET["t"]:"raiz";
$sustantivo=isset($_GET["s"])?$_GET["s"]:"perro";
if($tipo="raiz"){
    echo "<b>Raiz:".raiz($sustantivo)."</b>";
}
else{
    echo combinar($sustantivo);
}
?>