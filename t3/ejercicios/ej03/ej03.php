<h1>Listado de cookies por nivel</h1>
<p>Nivel0---><a href="x">Listado de cookies</a></p>
<p>Nivel0---> Nivel 1 ---><a href="x">Listado de cookies</a></p>
<p>Nivel0---> Nivel 1 ---> Nivel 2 ---><a href="x">Listado de cookies</a></p>
<br/><br/><br/>
<h1>Creacion de coolies en diferentes niveles(directorios)
por un script ubicado en /</h1><br/>
<h3>Se permite fijar nombre y contenido de la cookie, así como el nivel</h3>
<br/>
<br/>
<fieldset>
<legend>Creación de cookie</legend>
<label for="nombre">Nombre</label><input type="text" name="nombre"/>
<label for="nombre">Contenido</label><input type="text" name="contenido"/></fieldset>
<br/>
Nivel<select id="nivel">
<option id="nivel" selected="selected">0</option>
<option id="nivel">1</option>
<option id="nivel">2</option>
</select>
<input type="button" value="Crear cookie"/>
<?php
?>
