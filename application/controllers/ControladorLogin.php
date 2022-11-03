<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControladorLogin extends CI_Controller
{
    public function index()
    {
        $this->load->view('globalLoginRegister');
        $this->load->view('login_register/login');
    }

<<<<<<< HEAD
=======

>>>>>>> 86dc500 (Verificacion de usuario y clave en login)
}
