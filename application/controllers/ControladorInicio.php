<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControladorInicio extends CI_Controller
{
    public function index()
    {
        $this->load->view('menuGlobal');
        $this->load->view('inicio');
    }
}
