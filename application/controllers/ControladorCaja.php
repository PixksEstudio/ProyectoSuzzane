<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControladorCaja extends CI_Controller
{
    public function index()
    {
        $this->load->view('menuGlobal');
        $this->load->view('caja/arqueoCajaAbrir');
    }
    public function venta()
    {
        $this->load->view('menuGlobal');
        $this->load->view('caja/anadirVenta');
    }
    public function verVenta()
    {
        $this->load->view('menuGlobal');
        $this->load->view('caja/verVenta');
    }
}
