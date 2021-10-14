<?php
$sumando=isset($_GET["sumandos"])?$_GET["sumandos"]:null;
$num=isset($_GET["num"])?$_GET["num"]:null;
if($sumando!=null){
    echo "<input type='hidden' value='$sumando'>";
}
?>
<form>
<h4>Introduce el sumando <?=$_SESSION["num"]?>/<?=$_SESSION["sumandos"] ?> (1...10)</h4>
<br/>
<input type="number" max="10" min="1" name="num"/>
<input type="submit" value="Enviar"/>
</form>