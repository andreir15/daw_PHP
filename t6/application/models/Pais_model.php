<?php 
class Pais_model extends CI_Model{
    function c($nombre){
   $pais=R::dispense('pais');
   $pais->nombre=$nombre;
   R::store($pais);
    }
    
}
?>