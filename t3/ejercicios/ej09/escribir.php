<?php
session_start();

?><form action="listaUsuarios.php">
De : <input type="text" id="de" value="<?php $_SESSION["activo"] ?>" readonly="readonly"/>
<br/>
Para : <input type="text" id="para" value="<?php $_GET["para"]?>"  readonly="readonly"/>
<br/>
Escribe el contenido del mensaje
<br/>
<textarea id="mensaje" rows="7" cols="50"></textarea>
<br/>
<input type="submit" value="Enviar"/>
</form>