<?php 
session_start();
if(isset($_REQUEST["submit3"])){
    $_SESSION["cuenta"]=isset($_REQUEST["cuenta"])?$_REQUEST["cuenta"]:"";
}
$nombre=isset($_SESSION["nombre"])?$_SESSION["nombre"]:"";
$apellido=isset($_SESSION["apellido"])?$_SESSION["apellido"]:"";
$fecha=isset($_SESSION["fecha"])?$_SESSION["fecha"]:"";
$genero=isset($_SESSION["genero"])?$_SESSION["genero"]:"hombre";
$pareja=isset($_SESSION["parejaId"])?true:false;
$pareja = ($pareja ? 'checked="checked"' : '');
$hijo=isset($_SESSION["hijoId"])?true:false;
$hijo = ($hijo ? 'checked="checked"' : '');
$nacionalidad=isset($_SESSION["nacionalidad"])?$_SESSION["nacionalidad"]:"esp";
$departamento=isset($_SESSION["departamento"])?$_SESSION["departamento"]:"";
$salario=isset($_SESSION["salario"])?$_SESSION["salario"]:0;
$comentario=isset($_SESSION["comentario"])?$_SESSION["comentario"]:"";
$cuenta=isset($_SESSION["cuenta"])?$_SESSION["cuenta"]:"";

echo <<<HTML
<!DOCTYPE HTML>
<html>
<head>
	<title>Tema 3: Ej07</title>
	<meta charset="UTF-8">
</head>
<body>
<div id="navegacion">
<a href="index.php"><img src="Number-1-icon.png" alt="icono 1" title="icono 1" width=\"40\" height=\"40\" style=\"opacity:0.4;\"></a>
<a href="parte2.php"><img src="Number-2-icon.png" alt="icono 2" title="icono 2" width=\"40\" height=\"40\" style=\"opacity:0.4;\"></a>
<a href="parte3.php"><img src="Number-3-icon.png" alt="icono 3" title="icono 3" width=\"40\" height=\"40\" style=\"opacity:0.4;\"></a>
<a href="fin.php"><img src="Sports-Finish-Flag-icon.png" alt="icono 4" title="icono 4" width=\"40\" height=\"40\" ></a>
</div>
<fieldset>
<legend>Datos personales</legend>
Nombre: $nombre <br/>
Apellido: $apellido <br/>
Fecha de nacimiento: $fecha <br/>
Nacionalidad: $nacionalidad <br/>
</fieldset>
<fieldset>
<legend>Datos profesionales</legend>
Departamento: $departamento <br/>
Salario: $salario<br/>
Comentario: $comentario <br/>
</fieldset>
<fieldset>
<legend>Datos bancarios</legend>
Cuenta corriente: $cuenta <br/>
</fieldset>
<a href="index.php">Volver al principio</a>
</body>
</html>
HTML;
?>