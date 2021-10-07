<h1>Listado de cookies por nivel</h1>
<p>Nivel0---><a href="nivel0.php">Listado de cookies</a></p>
<p>Nivel0---> Nivel 1 ---><a href="./nivel1/nivel.php">Listado de cookies</a></p>
<p>Nivel0---> Nivel 1 ---> Nivel 2 ---><a href="./nivel1/nivel2/nivel2.php">Listado de cookies</a></p>
<br/><br/>
<h1>Creacion de coolies en diferentes niveles(directorios)
por un script ubicado en /</h1>
<h2>Se permite fijar nombre y contenido de la cookie, asi como el nivel</h2>
<br/>
<br/>

<fieldset>
<form action="verificarCookie.php">
<legend>Creacion de cookie</legend>
<label for="nombre">Nombre</label><input type="text" name="nombre"/>
<label for="contenido">Contenido</label><input type="text" name="contenido"/>
<br/>
Nivel<select id="nivel">
<option id="nivel" value="0" selected="selected">0</option>
<option id="nivel" value="1" >1</option>
<option id="nivel" value="2" >2</option>
</select>
<input type="submit" value="Crear cookie" id="crear"/>
</form>
</fieldset>

<?php
?>
