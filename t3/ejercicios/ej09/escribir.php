<form action="listaUsuarios.php">
<?php
session_start();
?>
De : <input type="text" name="de" value="<?=$_SESSION["activo"] ?>" readonly="readonly"/>
<br/>
Para : <input type="text" name="para" value="<?=$_GET["para"]?>"  readonly="readonly"/>
<br/>
Escribe el contenido del mensaje
<br/>
<textarea name="mensaje" rows="7" cols="50"></textarea>
<br/>
<input type="submit" value="Enviar"/>
</form>