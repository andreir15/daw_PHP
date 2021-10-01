<?php
function resaltar($texto){
    return "<h1>$texto</h1>";
}
function pintarRadio($nombre,$array,$seleccionado) {
    $html="";
    foreach($array as $value=>$label){
        $seleccionar=($value==$seleccionado)?"checked='checked'":"";
        $html.=<<<HTML
      <input type="radio" name="$nombre" value="$value" id="$value" $seleccionar />
<label for="$value">$label</label><br/>
HTML;
    }
    return $html;
}
function pintarCheckbox($nombre,$array,$seleccionados) {
    $html2="";
    foreach($array as $value=>$label){
      $seleccionar=(in_array($value,$seleccionados))?"checked='checked'":"";
        $html2.=<<<HTML
      <input type="checkbox" name="{$nombre}[]" value="$value" id="$value" $seleccionar/ >
<label for="$value">$label</label><br/>
HTML;
    }
    return $html2;
}
function pintarSelect($nombre,$array){
    $html3="";
    foreach($array as $value=>$label){ 
    $html3.=<<<HTML
<select name="$nombre">
<option value="$value">$label</option>
</select>
HTML;
}
return $html3;
}



?>