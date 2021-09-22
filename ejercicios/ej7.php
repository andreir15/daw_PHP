<?php
echo "Mensaje: ";
fscanf(STDIN,"%s\n",$Mensaje);
echo "numero:";
fscanf(STDIN,"%d\n",$n);
if(0<$n&&$n<7){
    for ($i=1;$i<=$n;$i++){
        
        echo "<h".$i.">".$Mensaje."</h".$i.">\n";
        
    }
    for ($i=$n-1;$i>=1;$i--){
        echo "<h".$i.">".$Mensaje."</h".$i.">\n";
    }
}else {echo "El numero tiene que estar entre 1 y 6";}
?>