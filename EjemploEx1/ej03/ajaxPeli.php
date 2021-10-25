<?php
$ajaxPeli="vacio";
switch (rand(1,4)){
    case 1:$ajaxPeli="Star Wars"; break;
    case 2:$ajaxPeli="Titanic"; break;
    case 3:$ajaxPeli="Crepusculo"; break;
    case 4:$ajaxPeli="Los juegos del hambre"; break;
}
echo $ajaxPeli;
?>
