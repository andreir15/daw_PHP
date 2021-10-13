<?php
setcookie("num",0);
$sumando=isset($_GET["sumandos"])?(int)$_GET["sumandos"]:2;

if($_COOKIE["sumando"]==$_GET["num"]){
    

echo <<<HTML
<form action="fin.php">
<label for="num>"<h1>Introduce el sumando (1...10)</h1></label>
<br/>
<input type="text" id="num" />
<input type="submit" value="Enviar"/>
</form>
HTML;
}
else{
    
    echo <<<HTML
<form action="parte2.php">
<label for="num>"<h1>Introduce el sumando (1...10)</h1></label>
<br/>
<input type="text" id="num" />
<input type="submit" value="Enviar"/>
</form>
HTML;
}



?>