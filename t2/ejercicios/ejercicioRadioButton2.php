<input id="ckuno" type="checkbox" name="num[]" value="uno"/>
<label for="ckuno">1</label><br/>
<input id="ckdos" type="checkbox" name="num[]" value="dos"/>
<label for="ckdos">2</label><br/>
<input id="cktres" type="checkbox" name="num[]" value="tres"/>
<label id="cktres">3</label><br/>
<?php
$numBD=["uno"=>"ckuno","dos"=>"ckdos","tres"=>"cktres"];
$numIdx=numero(isset($_GET["uno"])?$_GET["uno"]:"nose");
$numero= array_key_exists($numIdx, $numBD)?$numBD[$numIdx]:"desconocido";

?>