<?php
$c=".";//El patron es +-.

echo "Dime un numero:";
fscanf(STDIN, "%d\n", $numero);
for ($i=$numero;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        switch($c){
            case "+":$c="-";break;
            case "-":$c=".";break;
            case ".":$c="+";break;
        }
        
        echo $c;
    }
    echo"\n";
}
?>