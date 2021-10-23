<?php
session_start();
$signos=["Capricornio","Acuario","Piscis","Aries","Tauro","Geminis","Cancer","Leo","Virgo","Libra","Escorpio","Sagitario"];
$meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
$inferior=isset($_GET["inferior"])?$_GET["inferior"]:null;
$superior=isset($_GET["superior"])?$_GET["superior"]:null;
if($inferior!=null&&$superior!=null){
    $_SESSION["inferior"]=$inferior;
    $_SESSION["superior"]=$superior;
}


?>
<form action="parte3.php">
<fieldset>
<legend>Signos del zodiaco</legend>
<?php

foreach ($signos as $k=>$v){
    if(($inferior-1)<=$k&&$k<$superior){
        
    echo "<input type='radio' name='signos' value='$v'/>$v<br/>";
}

}
?>
</fieldset>
<fieldset>
<legend>Meses del año</legend>
<?php 
echo "<select name='meses'>";
foreach ($meses as $k=>$v){
    if(($inferior-1)<=$k&&$k<$superior){
        
        echo "<option name='meses' value='$v'/>$v<br/>";
    }
    
}
echo "</select>"
?>
</fieldset>
<input type="submit" value="Continuar"/>
</form>