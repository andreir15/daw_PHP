<form action="cosa">
<input type="color" name="micolor"/><br/>
<input type="date" name="date"/><br/>
<input type="datetime-local" name="date2"/><br/>
<input type="time" name="hora"/><br/>
<input type="email" name="email"/><br/>
<input type="number" name="num"/><br/>
Nombre:<input type="text" name="nombre" value="Andrei" readonly="readonly"/><br/>
<!-- Readonly no se puede editar. Con disabled tampoco se puede editar y no se envia ningun dato -->
Apellido:<input type="text" name="apellido" size="9" maxlength="20"/><br/>
<!-- size es el tamaño de la caja. Maxlength es el maximo de caracteres -->
<input type="image" src="afagaga" alt="No puede cargar la imagen"/><br/>
<!-- Alt para texto alternativo a la imagen porq el src no funciona -->
Equipo de futbol<input type="text" name="equipo" required="required"/><br/>
Escoge tu numero favorito
<select name="numero">
<!--Con multiple="multiple" en el select te permite elegir varias opciones 
y habria que poner name="numero[]" -->
<option value="1">Uno</option>
<option value="2" selected="selected">Dos</option>
<option value="3">Tres</option>
</select>
<input type="submit"/>
</form>
