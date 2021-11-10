<form action="parte2Persona.php" method="post">
Nombre persona:
<input type="text" name="persona" required="required"/>
<br>
Pais:
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
echo "<select name='paisSelect'>";
foreach ($paises as $pais){
echo "<option>$pais->pais</option>";
}
echo "</select>";
desconectar();
?>
<br>
<input type="submit"/>
</form>