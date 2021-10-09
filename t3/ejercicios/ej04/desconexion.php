<h1>Tratamiento de cookies</h1>
<?php 
$usuario=$_GET["usuario"];
echo "<p>Adios $usuario. Usted no esta conectado.</p>";
?>
<form action="verificar.php">
<label for="usuario">Usuario</label><input type="text" id="usuario" name="usuario"/>
<label for="clave">Clave</label><input type="password" id="clave" name="clave"/>
<input type="submit" value="Autenticar"/>
</form>