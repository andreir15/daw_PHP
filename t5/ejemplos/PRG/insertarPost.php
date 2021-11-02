<?php
function mostrarTabla($bd){
    $sql=<<<SQL
select nombre,precio
from producto

SQL;
    $filas=$bd->query($sql);
    echo "<table><tr><th>Nombre</th><th>Precio</th></tr>";
    foreach ($filas as $f){
        echo "<tr>";
        echo "<td>{$f["nombre"]}</td>";
        echo "<td>{$f["precio"]}</td>";
        echo "</tr>";
       
    }
    echo "</table>";
}
require_once '../../utilBD.php';
$nombre=isset($_POST["nombre"])?$_POST["nombre"]:null;
$precio=isset($_POST["precio"])?$_POST["precio"]:null;
$sql=<<<SQL
insert into producto(nombre,producto)
values(:n,:p)
SQL;
$bd=conectarMySQL();
$sp=$bd->prepare($sql);
$sp=$bd->bindParam(":n",$nombre);
$sp=$bd->bindParam(":p",$precio);
try{
    $sp->execute();
    echo "Producto $nombre($precio) insertado";
    mostrarTabla($bd);
}catch(Exception $e){
echo  "Producto $nombre repetido";
}
?>
<form action="insertarGet.php"><input type="submit" value="Volver"></form>