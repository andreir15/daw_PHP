<?php
include ("Punto.php");
session_start();
$_SESSION;

$entero=1;
$real=3.15;
$texto="Hola que tal";
$fecha= date_create(2021-10-10);
$semaforo= [
    "r" => "rojo",
    "a" => "amarillo",
    "v" => "verde"
];
$punto=new Punto(1,-5);
$_SESSION["entero"]=$entero;
$_SESSION["real"]=$real;
$_SESSION["texto"]=$texto;
$_SESSION["fecha"]=$fecha;
$_SESSION["semaforo"]=$semaforo;
$_SESSION["punto"]=$punto;
echo "DATOS REGISTRADOS en la SESION","<br/>".PHP_EOL;
echo "<a href=\"recuperarSesion.php\">Recuperar datos</a>";

?>