Nombre producto<input type="text" id="nombre"/>
<br/>
Precio producto<input type="text" id="precio"/>
<br/>
<input type="submit" value="Crear producto"/>
<?php
require_once '../utilBD.php';
$bd=conectarMySQL();
   $nombre=$_GET["nombre"];
   $precio=$_GET["precio"];
  
    $sql= <<<SQL
insert into producto(nombre,precio)
values('$nombre',$precio)

SQL;
    
    
    try{
        $bd->exec($sql);
        echo "Producto creado<br/>";
    }
    catch(Exception $e){
        echo "Producto duplicado<br/>";
        
    }

?>