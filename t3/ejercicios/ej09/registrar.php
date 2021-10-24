<?php
session_start();

?>
<form action="login.php">
<h1>NUEVO USUARIO</h1>
Usuario<input type="text" name="usuarioRegistro" />
<br/>
<br/>
Contraseña<input type="password" name="contraRegistro"/>
<br/>
<br/>
<input type="submit" value="Enviar"/>
</form>
<a href="login.php">Volver a login</a>