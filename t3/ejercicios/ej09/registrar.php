<?php
session_start();
$usuarioR=isset($_SESSION["usuarioRegistro"])?$_SESSION["usuarioRegistro"]:null;
$contraR=isset($_SESSION["contraRegistro"])?$_SESSION["contraRegistro"]:null;
if($usuarioR!=null){
    $_SESSION["usuarioRegistro"]=$usuarioR;
    $_SESSION["contraRegistro"]=$contraR;
}

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