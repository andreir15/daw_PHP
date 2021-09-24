<?php
$numero = 0;

echo "DIME un numero:";
fscanf(STDIN, "%d\n", $numero);
echo "n:$numero";
echo "\n";
$min = $numero;
$max = $numero;
while ($numero != 0) {
    echo "DIME un numero:";
    fscanf(STDIN, "%d\n", $numero);
    if ($numero != 0) {
        $min = ($numero < $min) ? $numero : $min;
        $max = ($numero > $max) ? $numero : $max;
    }
    echo "n:$numero";
    echo "\n";
}
echo "Maximo:$max\n";
echo "Minimo:$min\n";

?>
