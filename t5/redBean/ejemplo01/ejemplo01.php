<?php
function conectar(){
require_once '../rb.php';
R::setup('mysql:host=localhost;dbname=test','root','');
}
function desconectar(){
    R::close();
}

/////////////////////CREAR TABLA NUEVA///////////////////////////////

conectar();
echo "CONECTADO".PHP_EOL;//PHP_EOL es lo mismo que \n

$p=R::dispense('persona');
$p->nombre='Andrei';
$p->apellido='Olteanu';
/*si creo una persona nueva con un valor nuevo como por ejemplo telefono
se añadirá la columna telefono a la tabla sql y pondra valor=null a las personas
que se habian creado previamente sin ese valor*/
$p->tlf='623456789';
$p['nombre']='Ana';
$p['apellido']='Garcia';
$p['tlf']='622334455';

$p->nombre="Uno";
$p->fNacimiento='2011-11-24';/*si lo pones en este orden la maquina detecta automaticamente
que es un date, si lo pones en otro orden lo detecta como varchar*/
R::store($p);

///////////////////////ACTUALIZAR DATOS///////////////////////////////

$p=R::load('persona', 2);//carga los datos del id=2 de la tabla persona que es Ana
echo $p->nombre.PHP_EOL;
echo $p->apellido.PHP_EOL;
$p->tlf='911231234';//cambia el anterior tlf de Ana por este


////////////////////////BORRAR UNA FILA ENTERA/////////////////////////

$p=R::load('persona', 3);
R::trash($p);


/////////////////////////RECUPERAR DATOS//////////////////////

$personas=R::findAll('persona');
foreach ($personas as $persona){
    echo "NOMBRE: ".$persona['nombre'].PHP_EOL;
    echo "APELLIDO: ".$persona['apellido'].PHP_EOL;
    echo "================================".PHP_EOL;
}


//////////////////////////RECUPERAR DATOS ESPECIFICOS////////////////////////////////////////////

$nombre="Ana";
$apellido='Garcia';
//$personas=R::find('persona',"apellido='$apellido'"); Esto es peligroso, facilita hackeos 
$personas=R::find('persona','apellido=?',[$apellido]);//Esto es mas correcto y seguro
$personas=R::find('persona','nombre=:nom and apellido=:ape',[':nom'=>$nombre,':ape'=>$apellido]);
$personas=R::find('persona','apellido=Garcia');
foreach ($personas as $persona){
    echo "NOMBRE: ".$persona['nombre'].PHP_EOL;
    echo "APELLIDO: ".$persona['apellido'].PHP_EOL;
    echo "================================".PHP_EOL;
}


////////////////////////////RECUPERAR CON AGREGACION///////////////////////////////////////////////

$sql=<<<SQL
SELECT count(*) as nump
FROM persona
WHERE apellido is not null
SQL;

$resultado=R::getCell($sql);
echo $resultado.PHP_EOL;


desconectar();
echo "DESCONECTADO".PHP_EOL;
?>