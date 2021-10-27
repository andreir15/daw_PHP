<?php
session_start();
echo "Usuario actual ".$_SESSION["activo"];
echo "<br/>";
echo "<h3>Lista de mensajes de  {$_GET["para"]}</h3>";
echo "<h2>Fecha &nbsp; Texto</h2>";
foreach ($_SESSION["usuarios"][$_SESSION["activo"]]["mensajes"] as $k=>$v){
    if($v["remitente"]==$_GET["para"]){
   echo $v["fecha"]."  ".$v["texto"]."<br>";
}
}
?>


<br/>
<a href="listaUsuarios.php">Volver a lista de usuarios</a>