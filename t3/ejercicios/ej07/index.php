
<?php
session_start();
if (isset($_REQUEST['limpiar'])) { // Limpiar SESSION
    session_unset();
    session_destroy();
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

echo <<<HTML
<!DOCTYPE HTML>
<html>
<head>
	<title>Tema 3: Ej07</title>
	<meta charset="UTF-8">
</head>
<body>
<div id="navegacion">
<a href="index.php"><img src=\"Number-1-icon.png\" alt="icono 1" title="icono 1" width=\"40\" height=\"40\"></a>
<a href="parte2.php"><img src="Number-2-icon.png" alt="icono 2" title="icono 2" width=\"40\" height=\"40\" style=\"opacity:0.4;\"></a>
<a href="parte3.php"><img src="Number-3-icon.png" alt="icono 3" title="icono 3" width=\"40\" height=\"40\" style=\"opacity:0.4;\"></a>
<a href="fin.php"><img src="Sports-Finish-Flag-icon.png" alt="icono 4" title="icono 4" width=\"40\" height=\"40\" style=\"opacity:0.4;\"></a>
</div>
<form action="parte2.php">
<fieldset>
<legend>Datos personales</legend>

<label for="nombre">Nombre</label><input type="text" id="nombre" name="nombre" value="$nombre"/>

<label for="apellido">Apellido</label><input type="text" id="apellido" name="apellido" value="$apellido"/>

<br/><label for="fecha">Fecha de nacimiento</label><input type="date" id="fecha" name="fecha" value="$fecha"/>
<br/>
Genero
<input type="radio" id="genero" name="genero" value="mujer"/><label for="mujer">Mujer</label>
<input type="radio" id="genero" name="genero" value="hombre"/><label for="hombre">Hombre</label>
<input type="radio" id="genero" name="genero" value="otro"/><label for="otro">Otro</label>

<br/><label for="parejaId">Casado/Pareja</label><input id="parejaId" type="checkbox" name="pareja" value="$pareja"/>

<label for="hijoId">Hijos</label><input id="hijoId" type="checkbox" name="pareja" value="$hijo"/> 
<br/>

<label for="nacionalidad">Nacionalidad</label><select name="nacionalidad" id="nacionalidad" value="$nacionalidad">
<option  value="Espania" checked="checked">Espania</option>
<option  value="Rumania" >Rumania</option>
<option  value="Francia" >Francia</option>
<option  value="Inglaterra" >Inglaterra</option>
<option  value="Italia" >Italia</option>
</select>
<br/>
<input type="submit" name="submit1" value="Grabar informacion/ Ir al paso 2"/>
</fieldset>
</form>
</body>
</html>
HTML;
?>