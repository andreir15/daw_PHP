<?php
$andrei=isset($_COOKIE["andrei"])? $_COOKIE["andrei"]:"NO existe";
$peligro=isset($_COOKIE["peligro"])?$_COOKIE["peligro"]:"NO existe";;
setcookie("andrei","te la he colado");
//setcookie(nombre de la cookie, contenido de la cookie)
setcookie("peligro","Esta web esta maldita");
?>
<h1>Hola desde el servidor</h1><br/>
<ul>
<li>Cookie "andrei": <?=$andrei?><li>
<li>Cookie "peligro": <?=$peligro?><li>
</ul>
<p>Te acabo de poner una cookie que se llama ??</p>
