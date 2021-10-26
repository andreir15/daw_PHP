<?php
session_start();

echo "Usuario actual ".$_SESSION["activo"];
echo "<br/>";
echo "<h3>Lista de mensajes de  {$_SESSION["usuarioRegistro"]}</h3>";
print_r($_SESSION["usuarios"][$_SESSION["activo"]]["mensajes"]);
?>


<br/>
<a href="listaUsuarios.php">Volver a lista de usuarios</a>