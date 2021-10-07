<h1>NIVEL 1</h1>
<table border="1">
  <tr>
    <th>Nombre Cookie</th>
    <th>Contenido cookie</th>
  </tr>
<?php

foreach($_COOKIE as $k=>$v){
    
echo
  "<tr><td>$k</td><td>$v</td></tr>";
}
  ?>
  
</table>
<a href="../ej03.php">Volver</a>
