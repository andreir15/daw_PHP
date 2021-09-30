<h1>Tu eleccion</h1>
<?php
$numeros=isset($_GET["eleccion"])?$_GET["eleccion"]:[];
if($numeros==[]){
    echo "NO has seleccionado nada";
}else{
foreach($numeros as $numero){
    echo $numero." ";
}
}
?>