<?php
class Persona extends CI_Controller{
    function r(){
        $this->load->model('Persona_model');
        $data['personas'] = $this->Persona_model->getAll();
        frame($this,'personas/r',$data);
    }
    function c() {
        frame($this,'persona/c');
    }
    function cPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'ninguno';
        $this->load->model('Persona_model');
        try {
            $this->Persona_model->c($nombre);
            infoMsg("La persona $nombre ha sido creada con éxito",'persona/r');
        }
        catch (Exception $e) {
            errorMsg($e->getMessage(),'persona/c');
        }
    }
}

?>