<h1>lista de personas</h1>
<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
	</tr>
</table>
<?php foreach($resultado as $fila):?>
<tr>
	<td><?=$fila['id']?></td>
	<td><?=$fila['nombre']?></td>
</tr>

<?php endforeach;?>
