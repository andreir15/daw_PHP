<?php
$esAjax=isset($_SERVER["HTTP_X_REQUESTED_WITH"])?
strtolower($_SERVER["HTTP_X_REQUESTED_WITH"])=="xmlhttprequest":false;
if($esAjax){
    
    function peli() {
        $numRnd=rand(1,4);
        $peli=$_GET["peli"];
        switch ($numRnd){
            case 1:$peli="Star Wars";break;
            case 2:$peli="Titanic";break;
            case 3:$peli="Crepusculo";break;
            case 4:$peli="Los juegos del hambre";break;
        }
        return $peli;
    }

    function cancion() {
        $numRnd=rand(1,4);
        $cancion=$_GET["cancion"];
        switch ($numRnd){
            case 1:$cancion="Let it be";break;
            case 2:$cancion="Mediterraneo";break;
            case 3:$cancion="Close to the edge";break;
            case 4:$cancion="Bohemian rhapsody";break;
        }
        return $cancion;
    }
}

?>