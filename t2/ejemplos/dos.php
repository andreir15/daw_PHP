<h1>DATOS</h1>
<?php 
$nombre=isset ($_GET["nombre"])?$_GET["nombre"]: "John";
$apellido=isset ($_GET["apellido"])?$_GET["apellido"]: "Doe";
echo "<h3>Hola $nombre $apellido</h3>";
?><!--Para usar el $_POST hay que poner method="post"
porque el metodo por defecto es get -->
