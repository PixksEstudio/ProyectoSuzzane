<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cInicio extends CI_Controller
{
    //Carga la pagina que se ve al iniciar sesion
    public function ccInicio()
    {
        $this->load->view('menuGlobal');
        $this->load->view('inicio');
    }

    /*public function consultar_dato()
    {
        $usuario = $this->input->post('usuarioLogin');
        $clave = $this->input->post('claveLogin');
        //$usuario = strtoupper($usuario);
        $this->load->model('ModeloLogin');
        $verificado = $this->ModeloLogin->m_verificarDato($usuario, $clave);
        if ($verificado == true) {
            $this->load->view('menuGlobal');
            $this->load->view('inicio');
        } else {
            $this->load->view('globalLoginRegister');
            $this->load->view('login_register/login');
        }
    }*/
}
