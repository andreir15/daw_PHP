<?php
require_once '../ej01/util.php';
session_start();
?>
<h1>Lista de sustantivos</h1>
<table border='1'>
<tr>
<th>Original</th>
<th>Raiz</th>
<th>Combinaciones</th>
</tr>
<?php foreach ($_SESSION["sustantivos"] as $sustantivo):?>
<tr>
<td><?=$sustantivo ?></td>
<td><?=raiz($sustantivo) ?></td>
<td><?=combinar($sustantivo)?></td>
</tr>
<?php endforeach;?>
</table>
<form action="parte4.php">
<input type="submit" value="Volver a introducir sustantivos"/>
</form>