<?php
session_start();
session_unset();
?>
 <form action="parte2.php">
Introduce dos números entre el 1 y el 12
<br/>
Cota inferior<input type="number" max="12" min="1" name="inferior"/>
<br/>
Cota superior<input type="number" min="1" max="12" name="superior"/>
<br/>
<input type="submit" value="Continuar" />
</form>
