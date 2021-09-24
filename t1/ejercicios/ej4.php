  
<?php
$numero = 1;
$sumar = 0;
$multi = 1;

while ($numero != 0) {
    echo "DIME un numero:";
    fscanf(STDIN, "%d\n", $numero);
    echo "n:$numero";
    echo "\n";
    if ($numero != 0) {
        $sumar = $numero + $sumar;
        $multi = $numero*$multi;
    }
}
echo "Que operacion quieres realizar?";
fscanf(STDIN, "%s\n", $pregunta);
switch ($pregunta) {
    case "sumar":
    case "suma":
        echo "Resultado: $sumar";
        break;
    case "multiplicar":
    case "multiplicacion":
    case "multi":
        echo "Resultado: $multi";
        break;
 
}

?>