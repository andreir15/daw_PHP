<?php session_start();?>
Nombre producto<input type="text" id="nombre"/>
<br/>
Precio producto<input type="text" id="precio"/>
<br/>
<input type="submit" value="Preparar" name="accion"/> 
<br/>
<input type="submit" value="Insertar" name="accion"/>
<?php if (isset($_SESSION["preparar"])):?>
<h3>Productos preparados</h3>
<?php foreach ($_SESSION["preparados"] as $producto):?>
<?php endforeach;?>
<?php endif;?>
<h3>Productos insertados</h3>
<?php
require_once '../utilBD.php';
$bd=conectarMySQL();

$nombre=isset($_GET["nombre"])?$_GET["nombre"]:null;
$precio=isset($_GET["precio"])?$_GET["precio"]:null;
$productos=[$nombre=>$precio];
if($_GET["accion"]=="Insertar"){
if($nombre!=null&&$precio!=null){
    foreach ($productos as $k){
        
        $sql= <<<SQL
insert into producto(nombre,precio)
values('$k[0]',$k[1])

SQL;
    }
    header("Location:ej02.php");
}
}
$bd->exec($sql);
echo "Producto creado<br/>";


$sql= <<<SQL
select nombre,precio
form producto

SQL;
$bd->query($sql);



?>