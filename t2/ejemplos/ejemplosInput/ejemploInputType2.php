<h1>DATOS</h1>
<?php
$colorBD=["r"=>"rojo","g"=>"verde","b"=>"azul"];
$colorIdx=color(isset($_GET["r"])?$_GET["r"]:"nose");
$color= array_key_exists($colorIdx, $colorBD)?$colorBD[$colorIdx]:"desconocido";
echo "<h3>Mi color favorito es el $color</h3>";
$nombre=isset ($_GET["nombre"])?$_GET["nombre"]: "John";
$apellido=isset ($_GET["apellido"])?$_GET["apellido"]: "Doe";
echo "<h3>Hola $nombre $apellido</h3>";
?><!--Para usar el $_POST hay que poner method="post"
porque el metodo por defecto es get -->
