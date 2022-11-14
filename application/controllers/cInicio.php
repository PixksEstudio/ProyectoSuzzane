<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cInicio extends CI_Controller
{
    //Carga la pagina que se ve al iniciar sesion
    //Este controlador se esta utilizando en el boton del logo en el menu
    public function ccInicio()
    {
        $this->load->view('menuGlobal');
        $this->load->view('inicio');
    }
}
