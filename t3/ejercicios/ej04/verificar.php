<?php
$usuario=isset($_GET["usuario"])?$_GET["usuario"]:null;
$clave=isset($_GET["clave"])?$_GET["clave"]:null;
$visitas=0;
if ($usuario!=null && $clave != null) {
    setcookie ( $usuario, $clave,$visitas++ );
        echo "<p>Conectado como $usuario. Numero de visitas: $visitas</p>";
}

else {
    if ($usuario==null) {
        echo "El nombre no puede ser nulo<br/>";
    }
    
    if ($clave==null) {
        echo "El contenido no puede ser nulo<br/>";
    }
    
}



?>
<form action="desconexion.php">
<input type="submit" value="Desconectar"/>;
</form>