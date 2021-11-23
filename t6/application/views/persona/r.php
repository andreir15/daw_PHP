<div class="container">
	<h1>Lista de personas</h1>
	
	<form action="<?=base_url()?>persona/c">
		<input type="submit" value="Nueva persona"/>
	</form>
	
	<table>
		<tr>
			<th>Nombre</th>
		</tr>
		
		<?php foreach ($personas as $persona):?>
		
		<tr>
			<td>
				<?=$persona->nombre?>
			</td>
		</tr>
		<?php endforeach;?>
	</table>

</div>