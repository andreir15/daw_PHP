<h1>Bienvenido</h1>
<?php 
session_start();
unset($_SESSION["cositas"])//borra la entrada de la variable
?>
<h3>Es tu visita numero <?=$_SESSION["visitas"]?></h3>
<!-- Si he declardo antes visitas y he iniciado sesion se
me queda guardado -->

