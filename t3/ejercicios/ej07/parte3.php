


<?php
session_start();
if(isset($_REQUEST["submit2"])){
    $_SESSION["departamento"]=isset($_REQUEST["departamento"])?$_REQUEST["departamento"]:"";
    $_SESSION["salario"]=isset($_REQUEST["salario"])?$_REQUEST["salario"]:0;
    $_SESSION["comentario"]=isset($_REQUEST["comentario"])?$_REQUEST["comentario"]:"";
    
}

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
<a href="parte3.php"><img src="Number-3-icon.png" alt="icono 3" title="icono 3" width=\"40\" height=\"40\" ></a>
<a href="fin.php"><img src="Sports-Finish-Flag-icon.png" alt="icono 4" title="icono 4" width=\"40\" height=\"40\" style=\"opacity:0.4;\"></a>
</div>
<form action="fin.php">
<fieldset>
<legend>Datos bancarios</legend>
<label for="cuentaId">Cuenta corriente</label><input type="text" id="cuentaId" name="cuenta" value="$cuenta"/>
<br/>
<input type="submit" name="submit3" value="Grabar informacion/ Ir al resumen final"/>

</fieldset>
</form>
</body>
</html>
HTML;

?>