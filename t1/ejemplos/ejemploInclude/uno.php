<?php
include "dos.php";//es un copia y pega, no un include
echo "UNO\n";

require "uno.php";//Diferencia con include:Si escribes mal el nombre del archivo
//con require te va a dar error, pero con include te da error y
//te ejecuta lo que no esta mal

include_once "dos.php";//solo te lo incluye una vez aunq
// escribas la intruccion varias veces
?>