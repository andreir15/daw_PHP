<?php
require_once '../utilBD.php';
$bd=conectarMySQL();

$array=[['cocacola',1.2],['mejillones',3.23],['abrelatas',4.34]];

foreach ($array as $k){
    
    $sql= <<<SQL
insert into producto(nombre,precio)
values(:nombre,:precio)

SQL;
    
    $resultado=$bd->prepare($sql);
    $resultado->bindParam(":nombre", $k[0]);
    $resultado->bindParam(":precio", $k[1]);
    $resultado->exec();//si lo escribimos asi da igual el orden de los valores
    echo "Producto creado<br/>";
    
}
?>