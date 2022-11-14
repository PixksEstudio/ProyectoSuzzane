<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cConfiguracion extends CI_Controller
{
    //Configuracion Con funcion de Admin O General
    public function ccConfiguracion()
    {
        $this->load->view('menuGlobal');
        if ($this->session->userdata('rolUsuario') == 1) {
            $this->load->view('configuracion/vConfiguracionA');
        } else {
            $this->load->view('configuracion/vConfiguracionG');
        }
    }


    // Configuraciones de prueba para pasar de un lado a otro A= Admin G= General Solo Para Pruebas

    /*
    public function ccConfiguracionA()
    {
        $this->load->view('menuGlobal');
        $this->load->view('configuracion/vConfiguracionA');
    }

    public function ccConfiguracionG()
    {
        $this->load->view('menuGlobal');
        $this->load->view('configuracion/vConfiguracionG');
    }
    */
}
