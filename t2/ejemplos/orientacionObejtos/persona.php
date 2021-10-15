<?php
require_once 'servivo.php';
 class persona implements servivo{
//Metodos de la interface
public  function hablar() {
    echo "BLABLABLA";
}
    //Atributos
     private $nombre;
    private $edad;
    //Metodos constructores
    public function __construct($nombre="John",$edad=18){
        $this->nombre=$nombre;
    }
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    //Metodos
    public function dimeNombre(){
        echo "MI NOMBRE ES : {$this->nombre}({$this->edad})";
    }
    public function __toString() {
        return  "{$this->nombre}({$this->edad})";
    }
    
 }
?>