Nombre producto<input type="text" id="nombre"/>
<br/>
Precio producto<input type="text" id="precio"/>
<br/>
<input type="submit" value="Crear producto"/>
<?php
require_once '../utilBD.php';
$bd=conectarMySQL();
$nombre=isset($_GET["nombre"])?$_GET["nombre"]:null;
$precio=isset($_GET["precio"])?$_GET["precio"]:null;
$productos=[$nombre=>$precio];
if($nombre!=null&&$precio!=null){
    foreach ($productos as $k){
        
        $sql1= <<<SQL
insert into producto(nombre,precio)
values('$k[0]',$k[1])

SQL;
    }
    header("Location:ej02.php");

        $bd->exec($sql1);
        echo "Producto creado<br/>";
}
    
    $sql= <<<SQL
select nombre,precio
form producto

SQL;
$bd->query($sql);    
foreach ($productos as $k){
    echo "$k[0]=$k[1]<br/>";
}
    
    


?>