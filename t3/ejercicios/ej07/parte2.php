
<?php
session_start();
if(isset($_REQUEST["submit1"])){
    $_SESSION ["nombre"] = isset ( $_REQUEST ["nombre"] ) ? $_REQUEST ["nombre"]:null;
    $_SESSION ["apellido"] = isset ( $_REQUEST ["apellido"] ) ? $_REQUEST ["apellido"] : null;
    $_SESSION ["fecha"] = isset ( $_REQUEST ["fecha"] ) ? $_REQUEST ["fecha"] : null;
    $_SESSION ["genero"] = isset ( $_REQUEST ["genero"] ) ? $_REQUEST ["genero"] : null;
    $_SESSION ["pareja"] = isset ( $_REQUEST ["pareja"] ) ? $_REQUEST ["pareja"] : null;
    $_SESSION ["hijo"] = isset ( $_REQUEST ["hijo"] ) ? $_REQUEST ["hijo"] : null;
    $_SESSION ["nacionalidad"] = isset ( $_REQUEST ["nacionalidad"] ) ? $_REQUEST ["nacionalidad"] : [];
}

$departamento=isset($_SESSION["departamento"])?$_SESSION["departamento"]:"";
$salario=isset($_SESSION["salario"])?$_SESSION["salario"]:0;
$comentario=isset($_SESSION["comentario"])?$_SESSION["comentario"]:"";

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
<a href="parte2.php"><img src="Number-2-icon.png" alt="icono 2" title="icono 2" width=\"40\" height=\"40\" ></a>
<a href="parte3.php"><img src="Number-3-icon.png" alt="icono 3" title="icono 3" width=\"40\" height=\"40\" style=\"opacity:0.4;\"></a>
<a href="fin.php"><img src="Sports-Finish-Flag-icon.png" alt="icono 4" title="icono 4" width=\"40\" height=\"40\" style=\"opacity:0.4;\"></a>
</div>
<form action="parte3.php">
<fieldset>
<legend>Datos profesionales</legend>
<label for="departamento">Departamento</label><select name="departamento" id="departamento">
<option  value="Marketing" >Marketing</option>
<option  value="Informatica" >Informatica</option>
<option  value="Finanzas" >Finanzas</option>
<option  value="Viajes" >Viajes</option>
</select>
<br/>
<label for="salario">Salario</label><input type="number" id="salario" name="salario" min="1" max="100000" value=$salario/>
<br/>
<label for="comentario">Comentario</label><textarea id="comentario" name="comentario" rows="7" cols="50"></textarea>
<br/>
<input type="submit" name="submit2" value="Grabar informacion/ Ir al paso 3"/>

</fieldset>
</form>
</body>
</html>

HTML;

?>
