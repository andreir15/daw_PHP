<?php
session_start();
$sumando=isset($_GET["sumandos"])?$_GET["sumandos"]:null;
$n=isset($_GET["num"])?$_GET["num"]:null;
if($sumando!=null){
    $_SESSION["sumandos"]=$sumando;
    $_SESSION["num"]=1;
    $_SESSION["sumandosArray"]=[];
}
else{
    $_SESSION["num"]++;
    $_SESSION["sumandosArray"][]=$n;
    if($_SESSION["num"]>$_SESSION["sumandos"]){
        header("Location:fin.php");
    }
    
    
}
?>
<form>
<h4>Introduce el sumando <?=$_SESSION["num"]?>/<?=$_SESSION["sumandos"] ?> (1...10)</h4>
<br/>
<input type="number" max="10" min="1" name="num"/>
<input type="submit" value="Enviar"/>
</form>




