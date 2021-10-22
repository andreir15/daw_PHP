<?php
session_start();
$numero2=isset($_GET["numero2"])?$_GET["numero2"]:null;
if($numero2!=null){
    $_SESSION["numero2"]=$numero2;
}

echo "Primer numero: {$_SESSION['numero1']}<br/>";
echo "Segundo numero: {$_SESSION['numero2']}<br/>";
if($_SESSION["numero1"]>$_SESSION["numero2"]){
    echo "El primer numero es MAYOR que el segundo</br>";
    
}else if($_SESSION["numero1"]<$_SESSION["numero2"]){
    echo "El primer numero es MENOR que el segundo</br>";
}else{
    echo "El primer numero es IGUAL que el segundo</br>";
}
?>
<a href="parte1.php">Volver a introducir numeros</a>