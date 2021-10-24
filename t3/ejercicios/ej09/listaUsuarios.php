<?php
session_start();
$usuarioL=isset($_GET["usuarioL"])?$_GET["usuarioL"]:null;
$recordar=isset($_GET["recordar"])?true:false;
$mensajes=isset($_GET["mensaje"])?$_GET["mensaje"]:null;
$numMensajes=0;
if($mensajes!=null){
    $numMensajes++;
}
echo "Usuario actual $usuarioL";
?>
<h2>Lista de usuarios / mensajes</h2>
<?php 
foreach ($_SESSION["array"] as $k=> $v){
    
if($numMensajes==0){
    echo "$k ($numMensajes) <a href='escribir.php'>Escribir</a><br/>";
}
else{
    echo "$v ($numMensajes) <a href='leer.php'>Leer</a> <a href='escribir.php'>Escribir</a><br/>";
}
}

?>
<a href="login.php">Volver a login</a>