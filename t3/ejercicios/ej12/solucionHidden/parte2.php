<?php
$sumando=isset($_GET["sumandos"])?$_GET["sumandos"]:null;
$num=isset($_GET["num"])?$_GET["num"]:null;
$paso=isset($_GET["paso"])?$_GET["paso"]:1;
$sumandosArray=isset($_GET["sumandosArray"])?unserialize($_GET["sumandosArray"]) : [];
if($num!=null){
    $sumandosArray[]=$num;

    if($paso>$sumando){
        header("Location:parte3.php?sumandosArray=".serialize($sumandosArray));
    }
}
?>
<form>
<h4>Introduce el sumando <?=$paso?>/<?=$sumando ?> (1...10)</h4>
<br/>
<input type="number" max="10" min="1" name="num"/>
<input type="hidden" name="sumandos" value="<?=$sumando?>" />
<input type="hidden" name="paso" value="<?=$paso+1?>" />
<input type="hidden" name="sumandosArray" value='<?=serialize($sumandosArray)?>' />

<input type="submit" value="Enviar"/>
</form>
