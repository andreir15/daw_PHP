<?php
$nombre=isset($_GET["nombre"])?$_GET["nombre"]:null;
$pwd=isset($_GET["pwd"])?$_GET["pwd"]:null;
if ($nombre==null && $pwd==null){
    echo <<<HTML
<form>
Nombre
<input type="text" name="nombre"/>
<br/>
Contrase�a
<input type="password" name="pwd"/>
<br/>
<input type="submit"/>
</form>
HTML;
}
else{
    echo <<<HTML
<h3>Hola $nombre, tu contrase�a es $pwd</h3>
HTML;
}
?>