   
<?php
$cadena = "Alberto:Garay:913334455//Ana:Garcia:914445566";

$cArray=explode("//",$cadena);
foreach($cArray as $palabra){
    $x=explode(":",$palabra);
    echo "Nombre:",$x[0]."\n";
    echo "Apellido:",$x[1]."\n";
    echo "Telefono:",$x[2]."\n";
    echo "--------------------------------------------\n";
}


?>