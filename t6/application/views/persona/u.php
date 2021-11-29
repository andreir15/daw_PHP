<div class="container">
	<form action="<?=base_url()?>persona/uPost" method="post">
		<h1>Editar persona</h1>

		<label for="id-nombre">Nombre</label>
		<input id="id-nombre" type="text" name="nombre" value="<?=$persona->nombre?>" />
		<br/>
		
		Pais de nacimiento
		<select name="idPaisNace">
			<?php foreach ($paises as $pais):?>
			<option value="<?=$pais->id ?>" <?=$pais->id==($persona->fetchAs('pais')->nace->id) ?'selected="selected"':''?>>
				<?=$pais->nombre?>
			</option>
			<?php endforeach;?>
		</select>
		<br>
		País de residencia
		<select name="idPaisVive">
			<?php foreach ($paises as $pais):?>
			<option value="<?=$pais->id ?>"  <?=$pais->id==($persona->fetchAs('pais')->vive->id) ?'selected="selected"':''?>>
				<?=$pais->nombre?>
			</option>
			<?php endforeach;?>
		</select>
		<fieldset>
    		<legend>
	    		Aficiones que le gustan
    		</legend>
    		<?php $idAficionesGusta=[];
    		foreach ($persona->ownGustoList as $gusto){$idAficionesGusta[]=$gusto->aficion_id;}?>
    		<?php foreach ($aficiones as $aficion): ?>
    			<input id ="idg-<?=$aficion->id?>" type="checkbox" value="<?=$aficion->id?>" name="idAficionGusta[]" <?= in_array($aficion->id, $idAficionesGusta)?'checked="checked"':'' ?>/>
    			<label for="idg-<?=$aficion->id?>" ><?=$aficion->nombre?></label>
			    		
    		<?php endforeach;?>
    		
		</fieldset>
		
		<fieldset>
    		<legend>
	    		Aficiones que odia
    		</legend>
    		<?php $idAficionesOdia=[];
    		foreach ($persona->ownOdioList as $odio){$idAficionesOdia[]=$odio->aficion_id;}?>
    		<?php foreach ($aficiones as $aficion): ?>
    			<input id ="ido-<?=$aficion->id?>" type="checkbox" value="<?=$aficion->id?>" name="idAficionOdia[]"/>
    			<label for="ido-<?=$aficion->id?>" ><?=$aficion->nombre?></label>
			    		
    		<?php endforeach;?>
    		
		</fieldset>
		<input type="hidden" name="idPersona" value="<?=$persona->id?>" />
		<input type="hidden" name="idPaisNace" value="<?=$pais->id?>" /> 
		<input type="hidden" name="idPaisVive" value="<?=$pais->id?>" /> 
		<input type="hidden" name="idAficionGusta[]" value="<?=$aficion->id?>" /> 
		<input type="hidden" name="idAficionOdia[]" value="<?=$aficion->id?>" /> 
		<br>
		<input type="submit"/>
		
	</form>
</div>