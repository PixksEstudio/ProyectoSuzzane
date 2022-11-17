<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCaja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('menuGlobal');
        $this->load->model('mCaja');
    }


    //Carga de vista
    public function ccArqueoAbrir()
    {
        //Data usuario logueado
        $data["usuario"] = $this->session->userdata('nombreUsuario');

        //si existe un flashdata mostramos el mensaje
        if ($this->session->flashdata('mensaje')) {
            $data['mensaje'] = $this->session->flashdata('mensaje');
        }
        $this->load->view('caja/vArqueoAbrir', $data);
    }
    public function ccVenta()
    {

        $this->load->view('caja/vVenta');
    }
    public function ccRegistroVenta()
    {

        $this->load->view('caja/vRegistroVenta');
    }
    public function ccArqueoCierre()
    {

        $this->load->view('caja/vArqueoCierre');
    }

    //Funciones de arqueo

    //Abrir arqueo

    public function ccAbrirArqueo()
    {
        $id_usuario = $this->session->userdata('idUsuario');
        $fecha = date('Y-m-d H:i:s');
        $monto_arqueo = $this->input->post('txt_dineroInicial_vArqueoAbrir');
        $estado = 1;
        $resultado = $this->mCaja->mmAbrirArqueo($monto_arqueo, $fecha, $estado, $id_usuario);
        if ($resultado == true) {
            $this->session->set_flashdata('mensaje', 'Arqueo abierto correctamente');
            redirect('cCaja/ccArqueoAbrir');
        } else {
            $this->session->set_flashdata('mensaje', 'No se pudo abrir el arqueo');
            redirect('cCaja/ccArqueoAbrir');
        }
    }
}
