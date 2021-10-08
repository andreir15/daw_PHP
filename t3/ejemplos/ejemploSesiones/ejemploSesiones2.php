<h1>Bienvenido</h1>
<?php 
session_start();
if (isset($_SESSION["visitas"])){
    $_SESSION["visitas"]++;
    
}else{
    $_SESSION["visitas"]=1;
}
?>
<h3>Es tu visita numero <?=$_SESSION["visitas"]?></h3>
<a href="fin.php">Terminar visita</a>
