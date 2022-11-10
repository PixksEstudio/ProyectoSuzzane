<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cInventario extends CI_Controller
{
    public function ccProducto()
    {
        $this->load->view('menuGlobal');
        $this->load->view('inventario/vProducto');
    }

    public function ccTipoProducto(){
        $this->load->view('menuGlobal');
        $this->load->view('inventario/vTipoProducto');
    }

    public function ccVerInventario(){
        $this->load->view('menuGlobal');
        $this->load->view('inventario/vVerInventario');
    }
}
