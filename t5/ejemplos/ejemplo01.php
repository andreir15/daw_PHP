<?php
require_once '../utilBD.php';
$bd=connectarMySQL();
$sql= <<<SQL
delete from persona
where id=3

insert into persona(id,nombre) 
values(3,'ana')

update persona 
set nombre='Mari Carmen'
where nombre='ana'
SQL;
try{
$bd->exec($sql);
echo "Persona creada";
}
catch(Exception $e){
    echo "ID duplicado";
}
?>