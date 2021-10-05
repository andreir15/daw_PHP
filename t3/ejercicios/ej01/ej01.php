<h1>Bienvenido</h1>
<?php
$condicion=!isset($_COOKIE["uid"]);
if ($condicion){
    setcookie("uid",1);
    echo "Hola desconocido. A partir de ahora te recordaré";
    
}else{
    $uid=$_COOKIE["uid"];
    setcookie("uid",$uid);
    echo "Hola de nuevo te conozco como UID= $uid";
}
?>