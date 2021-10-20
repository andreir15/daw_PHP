<form action="listaUsuarios.php">
<h1>LOGIN</h1>
<?php

session_start();
$usuario=isset($_SESSION["usuario"])?$_SESSION["usuario"]:null;
$contra=isset($_SESSION["contra"])?$_SESSION["contra"]:null;
$usuarioR=isset($_GET["usuarioRegistro"])?$_GET["usuarioRegistro"]:null;
$contraR=isset($_GET["contraRegistro"])?$_GET["contraRegistro"]:null;
if(isset($_GET["usuarioRegistro"])&&isset($_GET["contraRegistro"])){
$_SESSION["BD"][]=[$usuarioR=>$contraR];
}

if($usuario!=null){
    echo "Usuario <input type='text' name='usuario' value='{$_SESSION["usuario"]}'/>";
    
}else{
    echo "Usuario <input type='text' name='usuario'/>";
}
?>

<br/>
<br/>
Contraseña<input type="password" name="contra"/>
<br/>
<br/>
Recordar<input type="checkbox" name="recordar"/>
<br/>
<br/>
<input type="submit" value="Enviar">
<br/>
<br/>
<a href="registrar.php">Registrar nuevo usuario</a>
</form>