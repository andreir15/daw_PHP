<?php
session_start();

echo "Usuario actual {$_SESSION["usuarioRegistro"]}";
echo "<h3>Lista de mensajes de  {$_SESSION["usuarioRegistro"]}</h3>";
?>



<br/>
<a href="listaUsuarios.php">Volver a lista de usuarios</a>