<a href="ej03.php">Volver</a>
<?php
$cookie=isset($_GET["nombre"])?$_GET["nombre"]:null;
$contenido=isset($_GET["contenido"])?$_GET["contenido"]:null;
$nivel=isset($_GET["nivel"])?$_GET["nivel"]:"0";
$ruta="curso2021/t3/ejercicios/ej03";
switch ($nivel){
    case "0":$ruta.="/";break;
    case "1":$ruta.="/nivel1/";break;
    case "2":$ruta.="/nivel1/nivel2/";break;
}
    setcookie($cookie,$contenido,"0",$ruta);
echo <<<HTML
<br/>La cookie $cookie= $contenido ha sido creada.
HTML;
?>
