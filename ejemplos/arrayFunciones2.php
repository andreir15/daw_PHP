<?php
$b="Pepe";
$a=["pepe"=>1,
    "maria"=>2
    ];
foreach($a as $k=> $v){//para que te escriba pepe y maria
    //para que salga el 1 y el 2 hay que quitar la $k y poner echo $v
    echo $k." ";
}
echo "\n";
foreach (array_keys($a) as $v){
    echo v." ";
}
print_r($b);
echo "\n";
print_r($a);
//////////////////////
var_dump($b);//te dice tanto el valor como el tipo
echo "\n";
var_dump($a);
/////////////////////////////////
$a=[[1,200],2];
echo "El dato {$a[0][1]} es el primero del array";
//////////////////////////////
$mensaje="Buenos dias";
echo <<<Andrei
<body>
<h1>Cabecera</h1>
<h3>$mensaje</h3>
<h3>$a[0]</h3>
</body>

Andrei//todo lo que escriba aqui hace saltos de linea sin poner \n
?>