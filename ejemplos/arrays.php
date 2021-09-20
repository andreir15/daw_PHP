<?php
/*  una forma de declarar arrays
$a[0]=10;
$a[1]=20;
$a[2]=30;
 */
/////////////////////
//$a=array(20,30,50); otra forma de declarar arrays
/////////////////////

$a=[1,2,3,4,5,6,7,8];
for($i=0;$i<=2;$i++){
    echo $a[$i].', ';
}
///////////////////////////
echo "\n";
$a=[10,20,30,40];
foreach($a as $n){
    echo $n."// ";
}
echo "\n";
//////////////////////
$a[1]=10;
$a[5]=50;
foreach($a as $k => $v){
    echo "($k)$v // ";
//////////////////////    
$i=0;
echo "\n";
$max=sizeof($a);
foreach($a as $k => $v){
    echo "($k)$v ".(++$i==$max ? '' : ' // ');
}
}
////////////////////
echo "\n";
$a[10]=100;
$a[20]=200;
$a[30]="Pepe";
$a["pepe"]=100;
$a["pepe"]=-5;

foreach ($a as $k=> $v){
    echo "($k)$v ";
}
?>