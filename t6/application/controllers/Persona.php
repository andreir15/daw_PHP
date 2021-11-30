<?php
class Persona extends CI_Controller {
    public function r() {
        $this->load->model('Persona_model');
        $data['personas'] = $this->Persona_model->getAll();
        frame($this,'persona/r',$data);
    }
    
    public function c() {
        $this->load->model('Pais_model');
        $data['paises'] = $this->Pais_model->getAll();
        
        $this->load->model('Aficion_model');
        $data['aficiones'] = $this->Aficion_model->getAll();
        
        frame($this,'persona/c',$data);
    }
    
    public function cPost() {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'John Doe';
        $pwd=isset($_POST['pwd'])?$_POST['pwd']:null;
        $pwd=password_hash($pwd, PASSWORD_BCRYPT);
        $idPaisNace = isset($_POST['idPaisNace']) ? $_POST['idPaisNace'] : null;
        $idPaisVive = isset($_POST['idPaisVive']) ? $_POST['idPaisVive'] : null;
        $idsAficionGusta = isset($_POST['idAficionGusta']) ? $_POST['idAficionGusta'] : [];
        $idsAficionOdia = isset($_POST['idAficionOdia']) ? $_POST['idAficionOdia'] : [];
        $this->load->model('Persona_model');
        
        try {
            $this->Persona_model->c($nombre,$pwd,$idPaisNace,$idPaisVive,$idsAficionGusta,$idsAficionOdia);
            redirect(base_url().'persona/r');
        }
        catch (Exception $e) {
            errorMsg($e->getMessage(),'persona/c');
        }
    }

    
    function u()
    {
        $idPersona = isset($_GET['idPersona']) ? $_GET['idPersona'] : null;
        $this->load->model('Persona_model');
        $this->load->model('Pais_model');
        $this->load->model('Aficion_model');
        $data['persona'] = $this->Persona_model->getPersonaById($idPersona);
        $data['paises'] = $this->Pais_model->getAll();
        $data['aficiones'] = $this->Aficion_model->getAll();
        frame($this, 'persona/u', $data);
    }
    
    function uPost()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'ninguno';
        $paisVive=isset($_POST['idPaisVive'])?$_POST['idPaisVive']:null;
        $paisNace=isset($_POST['idPaisNace'])?$_POST['idPaisNace']:null;
        $idAficionGusta=isset($_POST['idAficionGusta'])?$_POST['idAficionGusta']:[];
        $idAficionOdia=isset($_POST['idAficionOdia'])?$_POST['idAficionOdia']:[];
        $idPersona = isset($_POST['idPersona']) ? $_POST['idPersona'] : null;
        
        $this->load->model('Persona_model');
        
        try {
            $this->Persona_model->u($idPersona, $nombre, $paisNace, $paisVive, $idAficionGusta, $idAficionOdia);
            redirect(base_url() . 'persona/r');
        } catch (Exception $e) {
            errorMsg($e->getMessage(), 'persona/r');
        }
    }
    
    function d() {
        $idPersona = isset($_GET['idPersona']) ? $_GET['idPersona'] : null;
        $this->load->model('Persona_model');
        $data['persona'] = $this->Persona_model->getPersonaById($idPersona);
        frame($this,'persona/d',$data);
    }
    
    function dPost()
    {
        $idPersona = isset($_POST['idPersona']) ? $_POST['idPersona'] : null;
        $this->load->model('Persona_model');
        
        try {
            $this->Persona_model->d($idPersona);
            redirect(base_url().'persona/r');
        } catch (Exception $e) {
            errorMsg($e->getMessage(),'persona/r');
        }
    }
    
}
?>