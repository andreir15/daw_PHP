<?php

$sumando=isset($_GET["sumandos"])?$_GET["sumandos"]:$_COOKIE["sumandos"];
$n=isset($_GET["num"])?$_GET["num"]:null;
$paso=isset($_COOKIE["paso"])?$_COOKIE["paso"]:1;

if($n==null){
    setcookie("sumandos",$sumando);
    setcookie("paso",2);
   setcookie("sumandosArray",serialize([]));
}
else{
   setcookie("paso",$paso+1);
   $sumandos=unserialize($_COOKIE["sumandosArray"]);
   $sumandos[]=$n;
   setcookie("sumandosArray",serialize($sumandos));
    
    if($_COOKIE["paso"]>$_COOKIE["sumandos"]){
        header("Location:fin.php");
    }
    
    
}
?>
<form>
<h4>Introduce el sumando <?=$paso?>/<?=$sumando ?> (1...10)</h4>
<br/>
<input type="number" max="10" min="1" name="num"/>
<input type="submit" value="Enviar"/>
</form>

