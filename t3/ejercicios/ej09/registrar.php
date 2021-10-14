<?php
session_start();
$usuario=isset($_SESSION["usuarioRegistro"])?$_SESSION["usuarioRegistro"]:null;
$contra=isset($_SESSION["contraRegistro"])?$_SESSION["contraRegistro"]:null;
if($usuario!=null){
    $_SESSION["usuarioRegistro"]=$usuario;
    $_SESSION["contraRegistro"]=$contra;
}

?>
<form>
<h1>NUEVO USUARIO</h1>
Usuario<input type="text" name="usuarioRegistro"/>
<br/>
<br/>
Contraseña<input type="password" name="contraRegistro"/>
<br/>
<br/>
<input type="submit"/>
</form>