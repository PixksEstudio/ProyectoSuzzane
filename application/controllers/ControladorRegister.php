<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControladorRegister extends CI_Controller
{
    public function index()
    {
        $this->load->view('globalLoginRegister');
        $this->load->view('login_register/register');
    }

}
