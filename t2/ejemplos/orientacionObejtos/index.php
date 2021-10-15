<?php
require_once "musico.php";

$p=new persona("Pepe",45);
$p->dimeNombre();
echo "\n";
$personas=[];
for($i=10;$i<=20;$i++){
    if(time()%2==0){
    $personas[]=new musico("clon",$i);
    }else {
        $personas[]=new persona("clon",$i);
    }
}
foreach ($personas as $persona){
    echo "\n====================\n";
    echo $persona."\n";

    $persona->dimeNombre();
    $persona->hablar();
}

?>