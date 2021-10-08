<a href="index.php">Volver</a>
<?php
$usuario=isset($_GET["usuario"])?$_GET["usuario"]:null;
$clave=isset($_GET["clave"])?$_GET["clave"]:null;

if ($usuario!=null && $clave != null) {
    /*$rutaBase = pathinfo($_SERVER["REQUEST_URI"])["dirname"];
    $ruta = ($nivel==0?
        $rutaBase."/":
        ($nivel==1?$rutaBase."/nivel1/":
            $rutaBase."/nivel1/nivel2/"));*/
    setcookie ( $usuario, $clave );
echo "<p>Conectado como $usuario</p>";
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
