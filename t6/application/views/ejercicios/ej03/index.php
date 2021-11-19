<?= titulo("Lista de links");?>

<?php foreach ($links as $etiqueta=>$url):?>
<li><a href="<?=$url?>"><?=$etiqueta?></a></li>
<?php endforeach;?>
<form action="<?=base_url()?>">
<input type="submit" value="Volver al home"/>
</form>
