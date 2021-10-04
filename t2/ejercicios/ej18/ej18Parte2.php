<h3>Selecciona una opcion</h3>
<?php
$seleccion=isset($_GET["num"])?$_GET["num"]: 4;

$num=["uno","dos","tres","cuatro","cinco","seis",
    "siete","ocho","nueve","diez","once","doce",
    "trece","catorce","quince"];
for($i=0;$i<$seleccion;$i++){
    $envio=$i+1;
    echo <<<HTML
<form action="ej18Parte3.php">

<input id="id-$i" type="radio" name="seleccion" value="$envio"/>
<label for="seleccion">$num[$i]</label><br/>
HTML;
   
}
echo <<<HTML
<input type="submit"/>
</form>
HTML;


?>