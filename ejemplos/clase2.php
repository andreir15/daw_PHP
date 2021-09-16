<?php
echo "\n";
$edad=69;
echo($edad>=18 ? "MAYOR" : "MENOR");

/*alternativa
 $x=18;
 if ($x>=18){
 echo "Sos mayor";
 }else{ echo "Sos menor";
 }
 */
////////////////
echo "\n";
echo("p<pepe" ? "BIEN" : "MAL");//porque pepe es mayor que p
////////////////
echo "\n";
$a=1;
switch($a){
    case 1: echo "UNO";break;
    case 2: echo "DOS";break;
    case 3: echo "TRES";break;
    default: echo "Nao Nao";break;
}
echo "\n";
///////////////
$nombre="Jose";
echo "DIME tu nombre";
fscanf(STDTN, "%s\n", $nombre);
echo "Hola $nombre";// si es un numero en vez de $d hay que poner %s
?>