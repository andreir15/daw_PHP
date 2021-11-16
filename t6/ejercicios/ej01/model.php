<?php
function getSaludos(){
    $db = new PDO ("mysql:host=localhost;dbname=test","root","");
    $filas = $db->query("select saludo from saludo");
    $saludos=[];
    foreach ($filas as $fila){
        $saludos[]=$fila['saludo'];
    }
    return $saludos;
}
?>