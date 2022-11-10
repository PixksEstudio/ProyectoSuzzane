<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cIndex extends CI_Controller
{
    //Solo carga al iniciar la pagina por defecto, no se usa de nuevo
    public function index()
    {
        $this->load->view('sesionGlobal');
        $this->load->view('sesion/vIniciar');
    }
}
