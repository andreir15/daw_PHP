<?php
function doble($x){
   return 2*$x; 
}
echo doble (6);//puedes realizar esta funcion 
//en cualquier momento, incluso antes de crearla
echo "\n";
echo sin(1);//esta funcion no esta creada 
//en este ejemplo pero funciona porque esta integrado en php
////////////////////////////////
$numero=10;

echo "\n";
echo $numero;

echo "\n";
echo doble($numero);

echo "\n";
echo $numero;
echo "\n";
////////////////////////////
$x=10;
function f($x){//esto es una variable local
//en cuanto sale de la funcion el valor de $x=30 desaparece
               
    $x=30;
    echo $x;
}
f($x);
echo "\n";
echo $x;
/////////////////////////////
function mayor($edad = 18){
    return $edad>=18 ? "Mayor" : "Menor";
}
echo mayor(19);
echo "\n";
echo mayor();
echo "\n";
////////////////////////////////////////
function p() {
    for($i = 0; $i < func_num_args (); $i ++) {
        echo func_get_arg ( $i ), " ";
    }
    echo " // ";
}
p ( "Pepe" );
p ( "Rosa", "Mari" );


?>