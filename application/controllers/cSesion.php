<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSesion extends CI_Controller
{
    //Antes de iniciar la sesion
    //Hacia Iniciar Sesion
    public function ccIniciar()
    {
        $this->load->view('sesionGlobal');
        $this->load->view('sesion/vIniciar');
    }

    //Hacia Recuperar Contraseña
    public function ccRecuperar()
    {
        $this->load->view('sesionGlobal');
        $this->load->view('sesion/vRecuperar');
    }

    //Despues de iniciar la sesion

}
