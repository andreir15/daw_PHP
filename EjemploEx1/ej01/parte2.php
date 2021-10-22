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
for($i=0;$i<$signos;$i++){
    if($signos[$i]>=$inferior&&$signos[$i]<=$superior){
        foreach ($signos as $k){
            $signosMostrar="<input type='radio' name='signos' value='$k'/>$k";
        }
    }
}
?>
<form action="parte3.php">
<fieldset>
<legend>Signos del zodiaco</legend>
<?=$signosMostrar
?>
</fieldset>
<fieldset>
<legend>Meses del año</legend>
<?php 
?>
</fieldset>
<input type="submit" value="Continuar"/>
</form>

