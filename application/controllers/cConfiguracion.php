<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cConfiguracion extends CI_Controller
{
    public function ccConfiguracion()
    {
        $this->load->view('menuGlobal');
        $this->load->view('configuracion/vConfiguracion');
    }
}