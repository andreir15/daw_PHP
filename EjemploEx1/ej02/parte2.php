<?php
session_start();
$numero1=isset($_GET["numero1"])?$_GET["numero1"]:null;

if($numero1!=null){
    $_SESSION["numero1"]=$numero1;
  
}
?>
<form action="parte3.php">
<h3>Introduce otro numero</h3>
<input type="number" name="numero2"/>
<input type="submit" value="Siguiente"/>
</form>
