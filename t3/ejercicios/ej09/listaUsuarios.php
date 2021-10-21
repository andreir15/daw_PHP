<?php
session_start();
$usuario=isset($_GET["usuario"])?$_GET["usuario"]:null;
$mensajes=isset($_GET["mensaje"])?$_GET["mensaje"]:null;
$numMensajes=0;
if($mensajes!=null){
    $numMensajes++;
}
echo "Usuario actual $usuario";
?>
<h2>Lista de usuarios / mensajes</h2>
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