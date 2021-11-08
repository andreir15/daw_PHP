<?php
function conectar(){
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test','root','');
}
function desconectar(){
    R::close();
}
$persona=isset($_POST["persona"])?$_POST["persona"]: "Pepe";
conectar();
echo "PERSONA CREADA".PHP_EOL;

$pe=R::dispense('pais');
$pe->nombre=$persona;
R::store($pe);
desconectar();

header("Location:listaPersonas.php");
?>