<?php
function conectar(){
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test','root','');
}
function desconectar(){
    R::close();
}
conectar();
$paises=R::findAll("pais");
$personas=R::findAll("persona");
desconectar();
?>

<h1>Lista de personas</h1>
<form action="parte1Persona.php">
<input type="submit" value="Nueva persona"/> 
</form>
<form action="index.php">
<input type="submit" value="Inicio"/> 
</form>
<table border="1">
<tr>
<th>Nombre persona</th>
<th>Pais</th>
</tr>
<?php 
foreach ($personas as $persona):?>
<tr>
<td>
   <?=$persona->nombre?>
</td>
<td>
   <?=$persona->pais->nombre?>
</td>
</tr>
<?php endforeach;?>

</table>

