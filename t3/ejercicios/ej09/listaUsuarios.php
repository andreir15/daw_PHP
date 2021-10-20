<?php
session_start();
$usuario=isset($_GET["usuario"])?$_GET["usuario"]:null;

echo "Usuario actual $usuario";
?>
<h1>Lista de usuarios / mensajes</h1>
<?php 
$numMensajes=0;
foreach ($_SESSION["BD"] as $k=> $v){
    
if($numMensajes==0){
    echo "$k ($numMensajes) <a href='escribir.php'>Escribir</a>";
}
else{
    echo "$k ($numMensajes) <a href='leer.php'>Leer</a> <a href='escribir.php'>Escribir</a>";
}
}

?>
<a href="login.php">Volver a login</a>