<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSesion extends CI_Controller
{
    //Construtor
    public function __construct()
    {
        parent::__construct();
        $this->load->view('sesionGlobal');
        $this->load->model('mSesion');
    }
    //Antes de iniciar la sesion
    //Hacia Iniciar Sesion
    public function ccIniciar()
    {
        if ($this->session->userdata('loginUsuario') == true) {
            redirect('cInicio/ccInicio');
        } else {
            $data['mensaje'] = "";
            $this->load->view('sesion/vIniciar', $data);
        }
    }

    //Hacia Recuperar Contraseña
    public function ccRecuperar()
    {
        if ($this->session->userdata('loginUsuario') == true) {
            redirect('cInicio/ccInicio');
        } else {
            $this->load->view('sesion/vRecuperar');
        }
    }

    //Despues de iniciar la sesion

    public function ccValidar()
    {
        $usuario = $this->input->post('txtUsuarioIniciar');
        $clave = $this->input->post('txtClaveIniciar');
        $this->mSesion->mmValidar($usuario, $clave);

        if ($this->session->userdata('loginUsuario') == true and $this->session->userdata('estadoUsuario') == 1) {
            redirect('cInicio/ccInicio');
        } else {
            //Hacer un redirect a ccIniciar con un mensaje de error
            $data['mensaje'] = "Usuario o contraseña incorrectos";
            $this->load->view('sesion/vIniciar', $data);
        }
    }

    //Cerrar Sesion
    public function ccCerrar()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
