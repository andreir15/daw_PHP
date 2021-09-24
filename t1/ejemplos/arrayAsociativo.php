<?php
$colorFavorito["pepe"]="azul";
$colorFavorito["maria"]="rosa";

echo $colorFavorito["pepe"];
echo " --- ";

$nombre = "maria";
echo $colorFavorito[$nombre];
//////////////////////////
echo "\n";
$colorFavorito=["rosa","azul"];

foreach ($colorFavorito as $k => $v){
    echo "($k)$v";
}
///////////////////////////////
echo "\n";
$colorFavorito["maria"]="rosa";
$colorFavorito["pepe"]="azul";

foreach ($colorFavorito as $k => $v){
    echo "($k)$v";
}
/////////////////////////////////otra forma de hacerlo          
echo "\n";
$coloraFavorito=["maria"=>"rosa",
    "pepe"=>"azul"];
;

foreach ($colorFavorito as $k => $v){
    echo "($k)$v";
}

?>