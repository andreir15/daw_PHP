<?php 
require_once '../bd/bdh.php';
conectar();
$aficiones=R::findAll('aficion');
desconectar();
?>
<h1>Lista de aficiones</h1>

<form action="../cAficion/cAficionGet.php">
	<input type="submit" value="Nueva afición"/>
</form>

<form action="../">
	<input type="submit" value="Volver"/>
</form>

<table border="1">
	<tr> 
		<th>Afición</th>
		<th>Nombre persona</th>	
	</tr>

	<?php foreach ($aficiones as $aficion):?>
		<tr>
			<td>
				<?=$aficion->nombre?>
			</td>
			<td> 
				<?php foreach ($aficion->ownPersonaList as $persona):?>
					<?=$persona->nombre?> 
				<?php endforeach;?>
			</td>
		</tr>
	
	<?php endforeach;?>
	
</table>