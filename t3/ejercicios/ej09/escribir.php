<?php
session_start();
$de="maria";
$para="manolo"
?><form action="listaUsuarios">
De : <input type="text" id="de" value="<?=$de?>"/>
<br/>
Para : <input type="text" id="para" value="<?=$para?>"/>
<br/>
Escribe el contenido del mensaje
<br/>
<textarea id="mensaje" rows="7" cols="50"></textarea>
<br/>
<input type="submit" value="Enviar"/>
</form>