<?php
session_start();
$de=$_SESSION["usuarioRegistro"];
$para=$_SESSION["usuarioRegistro"];
?><form action="listaUsuarios.php">
De : <input type="text" id="de" value="<?=$de?>" readonly="readonly"/>
<br/>
Para : <input type="text" id="para" value="<?=$para?>"  readonly="readonly"/>
<br/>
Escribe el contenido del mensaje
<br/>
<textarea id="mensaje" rows="7" cols="50"></textarea>
<br/>
<input type="submit" value="Enviar"/>
</form>