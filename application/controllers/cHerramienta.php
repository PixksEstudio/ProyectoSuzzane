<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHerramienta extends CI_Controller
{
    public function ccCodigoBarra()
    {
        $this->load->view('menuGlobal');
        $this->load->view('herramienta/vCodigoBarra');
    }
    public function ccReporte()
    {
        $this->load->view('menuGlobal');
        $this->load->view('herramienta/vReporte');
    }
}