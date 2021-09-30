<h1>Escoge un checkbox</h1>

<?php
$checkbox=isset($_GET["uno"])?$_GET["uno"]:3;
$checkbox=($checkbox>5)? 5 :$checkbox;
$num=["uno","dos","tres","cuatro","cinco"];
for($i=0;$i<$checkbox;$i++){
    $envio=$i+1;
    echo <<<HTML
<form action="ejercicioRadioButton3.php>
HTML;
  echo <<<HTML
<input id="id-$i" type="checkbox" name="eleccion[]" value="$envio"/>
<label for="id-$i">$num[$i]</label><br/>
HTML; 
echo <<<HTML
<input type="submit"/>
</form>
HTML;
}


?>
