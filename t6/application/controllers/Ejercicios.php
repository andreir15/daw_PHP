<?php
class Ejercicios extends CI_Controller {
    public function ej01() {
        $this->load->view('ejercicios/ej01/index');
    }
    public function ej02(){
        $nombre=isset($_GET["nombre"])?$_GET["nombre"]:"Pepe";
        $datos["nombre"]=$nombre;
        $this->load->view('ejercicios/ej02/index',$datos);
    }
    public function ej03() {
        $this->load->helper("andrei");
        $this->load->model("Ejercicios_model");
        $d["links"]=$this->Ejercicios_model->getLinks();
        $this->load->view('ejercicios/ej03/index',$d);
        //Esto son el ej03 y ej04 juntos
    }
    public function ej05() {
        $this->load->view('ejercicios/ej05/index');
    }
}