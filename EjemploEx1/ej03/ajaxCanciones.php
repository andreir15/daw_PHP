<?php
$cancion="vacio";
switch (rand(1,4)){
    case 1:$cancion="Let it be"; break;
    case 2:$cancion="Mediterraneo"; break;
    case 3:$cancion="Close to the edge"; break;
    case 4:$cancion="Bohemian Rhapsody"; break;
}
echo $cancion;
?>