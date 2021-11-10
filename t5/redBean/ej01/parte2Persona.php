<?php
function conectar(){
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test','root','');
}
function desconectar(){
    R::close();
}
$persona=isset($_POST["persona"])?$_POST["persona"]: "Pepe";
$Npais=isset($_POST["pais"])?$_POST["pais"]:"España";
conectar();
echo "PERSONA CREADA".PHP_EOL;

$pe=R::dispense('persona');
$pe->nombre=$persona;
$pa=R::load('pais',$Npais);
$pe->pais=$pa;
R::store($pe);
desconectar();

header("Location:listaPersonas.php");
?>