<?php
session_start();
session_unset();
?>
<form action="parte2.php">
<h3>Introduce un numero</h3>
<input type="number" name="numero1"/>
<input type="submit" value="Siguiente"/>
</form>