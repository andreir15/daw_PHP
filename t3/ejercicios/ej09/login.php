<!DOCTYPE HTML>
<html>
<head>
	<title>Ej 09</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="listaUsuarios.php">
<h1>LOGIN</h1>
<?php

session_start();
$usuarioR=isset($_GET["usuarioRegistro"])?$_GET["usuarioRegistro"]:null;


if($usuarioR!=null){
$_SESSION["usuarios"][$_GET["usuarioRegistro"]]=["contra"=>$_GET["contraRegistro"]];

}

$usuarios=isset($_SESSION["usuarios"])?$_SESSION["usuarios"]:[];

$_SESSION["BD"]=["recordar"=>false,"usuarios"=>$usuarios];

$recordar=isset($_SESSION["recordar"])?$_SESSION["recordar"]:null;
if(isset($_SESSION["usuarioRegistro"])&&$recordar==true){
    echo "Usuario <input type='text' name='usuarioL' value='$usuarioR'/> ";
}

else{
    echo "Usuario <input type='text' name='usuarioL' /> ";
}

?>

<br/>
<br/>
Contraseña<input type="password" name="contraL"/>

<br/>
<br/>
<?php 
if(isset($_SESSION["recordar"])==true){
    echo "<label for='recordar'>Recordar<input type='checkbox' id='recordar' value='recordar' checked='checked'/></label>";
}else{
    echo "<label for='recordar'>Recordar<input type='checkbox' id='recordar' value='recordar'/></label>";
}
?>
<br/>
<br/>
<input type="submit" value="Enviar">
<br/>
<br/>
<a href="registrar.php">Registrar nuevo usuario</a>
</form>
</body>
</html>