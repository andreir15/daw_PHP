<?php
echo "UNO\n";// \n es un salto de linea
echo "DOS\n";
echo "TRES\n";
/////////////////
$x = 7;
$X=10;
echo "$x\n$X\n";
/////////////////
echo '$x';
////////////////
$x="Pedro";
echo "\n$x\n";
///////////////
echo "Hola 'Ruben' que tal\n"; // al reves tambien funciona
//////////////
$x=true;
echo gettype($x);
const x=7;
$x=8;
echo "\n";
/////////////
echo 7+53;
echo "\n";
////////////
echo 7 % 3;
echo "\n";
///////////
echo (int) (7 / 3);
echo "\n";
//////////
echo 10**5;
/////////
$x=7;
$x++;// ++$x es lo mismo
$x=$x+3;// otra forma de hacerlo $x+=3;
echo "\n";
echo $x;
/////////
$x--;
echo "\n";
echo $x;
/////////
$x*=3;
echo "\n";
echo $x;
echo "\n";
////////
$x="corre";
$y="caminos";
echo $x.$y;
////////
$x=3;
$y=4;
$z=3;
echo "\n";
echo $x==$y;//si no coincide no pone nada
echo "\n";
echo $x==$z;//si coincide pone 1
echo "\n";
//////////
if ($x==$y){
    echo "SI";
}
else {
    echo "NO";
}
///////////
echo "\n";
$x=0;//si es 0 es false pero si es otro numero es true
//por eso sale que es igual que false
$y=false;
if ($x==$y){
    echo "SI";
}
else {
    echo "NO";
}

//si una cadena no esta vacia sale true y si esta vacia false

echo "\n";
$x="Pedro";
$y=7;
if ($x and $y){ //o $$
    echo "SI";
}
else {
    echo "NO";
}
///////////////
echo "\n";
if (0===false){//si pones 3 = esta comparando todo 
    echo "SI";
}
else {
    echo "NO";
}
echo "\n";
/////////////
$x=10;
$y=2;
if ($y !=0){
    echo $x / $y;}
    else {
        echo "NO hagas eso";
}
///////////////
echo "\n";
if (($x / $y >6)&&($y !=0)){
    echo $x / $y;}
    else {
        echo "NO hagas eso";
    }
 
?>