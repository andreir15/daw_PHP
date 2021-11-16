<?php
include 'model.php';
$datos['saludos']=getSaludos();
include 'helperV.php';
view('view',$datos);
?>