<?php
require_once '../utilBD.php';
$bd=conectarMySQL();

$array=[['cocacola',1.2],['mejillones',3.23],['abrelatas',4.34]];

foreach ($array as $k){
    
$sql= <<<SQL
insert into producto(nombre,precio)
values('$k[0]',$k[1])

SQL;


try{
    $bd->exec($sql);
    echo "Producto creado<br/>";
}
catch(Exception $e){
    echo "Producto duplicado";

}
}
?>