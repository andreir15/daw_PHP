<a href="ej03.php">Volver</a>
<?php
$cookie=isset($_GET["nombre"])?$_GET["nombre"]:null;
$contenido=isset($_GET["contenido"])?$_GET["contenido"]:null;
$nivel=isset($_GET["nivel"])?$_GET["nivel"]:null;

if ($cookie!=null && $contenido != null && $nivel != null) {
    $rutaBase = pathinfo($_SERVER["REQUEST_URI"])["dirname"];
    $ruta = ($nivel==0?
        $rutaBase."/":
        ($nivel==1?$rutaBase."/nivel1/":
            $rutaBase."/nivel1/nivel2/"));
    setcookie ( $cookie, $contenido, 0, $ruta );
echo "<h1>La cookie $cookie= $contenido ha sido creada</h1>";
}
else {
    if ($cookie==null) {
        echo "El nombre no puede ser nulo<br/>";
    }
    
    if ($contenido==null) {
        echo "El contenido no puede ser nulo<br/>";
    }
    
    if ($nivel==null) {
        echo "El nivel no puede ser nulo<br/>";
    }
    
}
?>
