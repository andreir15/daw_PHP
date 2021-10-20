<?php
session_start();
$usuario=isset($_GET["usuario"])?$_GET["usuario"]:null;

echo "<h1>Lista de mensajes de $usuario</h1>";
?>
<div>
<h1>Fecha</h1>
<h1>Texto</h1>
</div>
Uno 
Dos
<a href="listaUsuarios.php">Volver a lista de usuarios</a>