<?php
echo '<h4>' . pathinfo($_SERVER['REQUEST_URI'])['dirname'] . '</h4>';
?>
<h1>Listado de cookies por nivel</h1>
<p>Nivel0---><a href="nivel0.php">Listado de cookies</a></p>
<p>Nivel0---> Nivel 1 ---><a href="nivel1/nivel.php">Listado de cookies</a></p>
<p>Nivel0---> Nivel 1 ---> Nivel 2 ---><a href="nivel1/nivel2/nivel2.php">Listado de cookies</a></p>
<br/><br/>
<h1>Creacion de coolies en diferentes niveles(directorios)
por un script ubicado en /</h1>
<h2>Se permite fijar nombre y contenido de la cookie, asi como el nivel</h2>
<br/>
<br/>


<form action="verificarCookie.php">
<fieldset>
<legend>Creacion de cookie</legend>
<label for="nombre">Nombre</label><input type="text" name="nombre" id="nombre"/>
<label for="contenido">Contenido</label><input type="text" name="contenido" id="contenido"/>
<br/>
<label for="nivel">Nivel</label><select name="nivel" id="nivel">
<option  value="0" >0</option>
<option  value="1" >1</option>
<option  value="2" >2</option>
</select>
<input type="submit" value="Crear cookie"/>
</fieldset>
</form>