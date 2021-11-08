<?php
function conectar(){
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test','root','');
}
function desconectar(){
    R::close();
}
$pais=isset($_POST["pais"])?$_POST["pais"]: "España";
conectar();
echo "PAIS CREADO".PHP_EOL;

$pa=R::dispense('pais');
$pa->nombre=$pais;
R::store($pa);
desconectar();

header("Location:listaPaises.php");
?>