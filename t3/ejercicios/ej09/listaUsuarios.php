<?php
session_start();
$usuarioL=isset($_GET["usuarioL"])?$_GET["usuarioL"]:"";

if(isset($_SESSION["usuarios"][$usuarioL]["contra"])||$_SESSION["activo"]!=""){
    isset($_GET["recordar"])?$_SESSION["recordar"]=true:$_SESSION["recordar"]=false;    
    if($usuarioL!=""){
        $_SESSION["activo"]=$usuarioL;
    }
    isset($_GET["mensaje"])?$_SESSION["usuarios"][$_GET["para"]]["mensajes"][]=["remitente"=> $_GET["de"],
        "fecha"=>date("d/m/Y (H:i)"),
        "texto"=> $_GET["mensaje"]]:null;
    

echo "Usuario actual ".$_SESSION["activo"]."<h2>Lista de usuarios / mensajes</h2>";


$numMensajes=0;
foreach ($_SESSION["usuarios"] as $k=>$v){

if($k!=$_SESSION["activo"]){
    echo $k." "; 
    if (empty($_SESSION["usuarios"][$_SESSION["activo"]]["mensajes"])) {
        echo "($numMensajes) <a href='escribir.php?para=$k'>Escribir</a><br/>";
    }else{
        foreach ($_SESSION["usuarios"][$_SESSION["activo"]]["mensajes"] as $n=>$r){
            if($r["remitente"]==$k){
                $numMensajes++;
            }
        }
     echo  "($numMensajes) <a href='leer.php?para=$k'>Leer</a> <a href='escribir.php?para=$k'>Escribir</a><br/>";
   
}

}
}
echo "<a href='login.php'>Volver a login</a>";
}

else{
    echo "Tus datos son incorrectos";
    header("refresh:3; url=login.php");
}
?>
