<?php
function raiz($sustantivo){
    $raiz="desconocida";
    switch (substr($raiz,-1,1)) {
        case "o":
        case "a":$raiz=substr($raiz,0,-1);break;
    }
    switch (substr($raiz,-2,2)) {
        case "os":
        case "as":$raiz=substr($raiz,0,-2);break;
    }
    return $raiz;
}
function combinar($sustantivo){
    $raiz=raiz($sustantivo);
    $html="<select>";
    $html.="\t<option>".$raiz."o</option>";
    $html.="\t<option>".$raiz."a</option>";
    $html.="\t<option>".$raiz."os</option>";
    $html.="\t<option>".$raiz."as</option>";
    $html.="</select>";
    return $html;
}
?>