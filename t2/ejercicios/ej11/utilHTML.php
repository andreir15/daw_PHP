<?php
function resaltar($texto){
    return "<h1>$texto</h1>";
}
function pintarRadio($nombre,$array,$seleccionado) {
  $html="";
  foreach($array as $value=>$label){
      $seleccionar=($value==$seleccionado)?"checked='checked'":"";
   $html.=<<<HTML
      <input type='radio' name="$nombre" value="$value" id="$value" $seleccionar />
<label for="$value">$label</label><br/>
HTML;  
}
    return $html;
}


?>