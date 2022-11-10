<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCaja extends CI_Controller
{
    public function ccArqueoAbrir()
    {
        $this->load->view('menuGlobal');
        $this->load->view('caja/vArqueoAbrir');
    }
    public function ccVenta()
    {
        $this->load->view('menuGlobal');
        $this->load->view('caja/vVenta');
    }
    public function ccRegistroVenta()
    {
        $this->load->view('menuGlobal');
        $this->load->view('caja/vRegistroVenta');
    }
    public function ccArqueoCierre()
    {
        $this->load->view('menuGlobal');
        $this->load->view('caja/vArqueoCierre');
    }
}
