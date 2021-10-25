<?php
function conectarMySQL(
    $schema = 'test',
    $usu = 'root',
    $pwd = '',
    $host = 'localhost'
    ) {
        try {
            $dsn = "mysql:host=$host;dbname=$schema";
            $db = new PDO($dsn, $usu, $pwd);
        }
        catch (PDOException $e) {
            print ("ERROR de conexi�n a $schema");
            die();
        }
        return $db;
}


?>