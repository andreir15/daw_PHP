<?php
session_start();
isset($_GET["usuarioL"])?$_GET["usuarioL"]:null;
//$recordar=isset($_GET["recordar"])?$_SESSION["recordar"]=true:$_SESSION["recordar"]=false;

/*if(isset($_GET["mensaje"])){
    $_SESSION["usuarios"][$_GET["para"]]["mensajes"][]=[
        "remitente"=>$_GET["de"],
        "fecha"=>date("D").date("M").date("Y"),
        "texto"=>$_GET["mensaje"]
    ];
}
*/
/*if(isset($_GET["usuarioL"])){
    $_SESSION["activo"]=$_GET["usuarioL"];
}*/
if(isset($_SESSION["usuarios"][$_GET["usuarioL"]]["contraL"])){
    isset($_GET["recordar"])?$_SESSION["recordar"]=true:$_SESSION["recordar"]=false;    
    isset($_GET["usuarioL"])?$_SESSION["activo"]=$_GET["usuarioL"]:$_SESSION["activo"];
}
/*else{
    echo "Tus datos son incorrectos";
    header("refresh:3; url=login.php");
}*/
echo "Usuario actual ".$_SESSION["activo"];

?>
<h2>Lista de usuarios / mensajes</h2>
<?php 
foreach ($_SESSION["usuarios"] as $k=>$v){
  $numMensajes=0;
if($k!=$_SESSION["activo"]){
    echo $k." "; 
    if (empty($_SESSION["usuarios"][$_SESSION["activo"]]["mensajes"])) {
        echo "($numMensajes) <a href='escribir.php?para=$k'>Escribir</a><br/>";
    }else{
        foreach ($_SESSION["usuarios"][$_SESSION["activo"]]["mensajes"] as $n=>$m){
            if($m["remitente"]==$k){
                $numMensajes++;
            }
        }
     echo  "($numMensajes)". "<a href='leer.php'>Leer</a> <a href='escribir.php?para=$k'>Escribir</a><br/>";
   
}

}
}


?>
<a href="login.php">Volver a login</a>