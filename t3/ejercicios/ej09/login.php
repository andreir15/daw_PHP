<form action="listaUsuarios.php">
<h1>LOGIN</h1>
<?php

session_start();
$usuario=isset($_SESSION["usuario"])?$_SESSION["usuario"]:null;

if(isset($_GET["usuarioRegistro"])){
$_SESSION["usuario"][$_GET["usuarioRegistro"]]=["contra"=>$_GET["contraRegistro"],"mensajes"=>[]];
}
$_SESSION["BD"]=["activo"=>"","recordar"=>false,"usuarios"=>$usuario];

$recordar=isset($_SESSION["BD"]["recordar"])?$_SESSION["BD"]["recordar"]:null;
if($recordar!=true){
    echo "Usuario <input type='text' name='usuario' value='{$_SESSION["BD"]["activo"]}'/>";
    
}else{
    echo "Usuario <input type='text' name='usuario'/>";
}
?>

<br/>
<br/>
Contraseña<input type="password" name="contra"/>
<br/>
<br/>
<?php 
if($_SESSION["BD"]["recordar"]==true){
    echo "Recordar<input type='checkbox' name='recordar' checked='checked'/>";
}else{
    echo "Recordar<input type='checkbox' name='recordar'/>";
}
?>
<br/>
<br/>
<input type="submit" value="Enviar">
<br/>
<br/>
<a href="registrar.php">Registrar nuevo usuario</a>
</form>