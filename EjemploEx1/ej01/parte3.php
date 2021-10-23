<?php
$signo=isset($_GET["signos"])?$_GET["signos"]:"acuario";
$mes=isset($_GET["meses"])?$_GET["meses"]:"enero";
if($signo!=null&&$mes!=null){
    $_SESSION["signos"]=$signo;
    $_SESSION["meses"]=$mes;
}
echo "Signo escogido: $signo<br/>Mes escogido: $mes";
?>