<?php
echo time();//tiempo en segundos que ha pasado desde el 1 de
//enero de 1970 hasta ahora
echo "\n";
echo date("(d-M-Y) H:i",$t);//d=dia,m=mes en numero,M=mes con 3 letras
//Y=año,H=hora,i=min
echo "\n";
echo strtotime("11/09/2001 14:21:30");//tiempo que ha pasado hasta la fecha establecida
echo "\n";
?>