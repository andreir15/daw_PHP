<h1>Contador de visitas</h1>
<?php
$condicion=!isset($_COOKIE["n"]);
if ($condicion){
    setcookie("n",2);
    echo "Bienvenido";
    
}else{
    $num=$_COOKIE["n"];
    setcookie("n",$num+1);
    echo "Hola es la vez numero $num que visitas la pagina";
}

?>

