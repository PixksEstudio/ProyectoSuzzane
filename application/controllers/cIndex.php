<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cIndex extends CI_Controller
{
    //Controlador
    public function __construct()
    {
        parent::__construct();
        //$this->session->sess_destroy();
        $data['mensaje'] = "";
        $this->load->view('sesionGlobal',$data);
    }
    //Solo carga al iniciar la pagina por defecto, no se usa de nuevo
    public function index()
    {
        if ($this->session->userdata('loginUsuario') == true) {
            redirect('cInicio/ccInicio');
        } else {
            $this->load->view('sesion/vIniciar');
        } 
    }
}
