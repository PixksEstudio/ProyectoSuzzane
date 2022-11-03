<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControladorInicio extends CI_Controller
{
    public function index()
    {
        $this->load->view('menuGlobal');
        $this->load->view('inicio');
    }
<<<<<<< HEAD
=======

    public function consultar_dato()
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
    }
>>>>>>> 86dc500 (Verificacion de usuario y clave en login)
}
