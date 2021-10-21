<?php
session_start();
$usuario=isset($_GET["usuario"])?$_GET["usuario"]:null;
echo "Usuario actual $usuario";
echo "<h3>Lista de mensajes de $usuario</h3>";
?>
<div>
<h3>Fecha Texto</h3>
</div>
Uno 
Dos
<br/>
<a href="listaUsuarios.php">Volver a lista de usuarios</a>