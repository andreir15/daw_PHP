<?php
echo "Dia de nacimiento?";
fscanf(STDIN,"%d\n", $dia);
echo "Mes de nacimiento?";
fscanf(STDIN,"%d\n", $mes);
echo "A�o de nacimiento?";
fscanf(STDIN,"%d\n", $anio);
$tiempo=time()-strtotime("$dia-$mes-$anio");
echo "Ha pasado $tiempo";
?>