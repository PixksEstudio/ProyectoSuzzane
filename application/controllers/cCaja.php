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
        //Cargar los productos
        $data['productos'] = $this->mCaja->mmTraerProductosActivos();
        $this->load->view('caja/vVenta', $data);
    }
    public function ccHistorialVenta()
    {

        $this->load->view('caja/vHistorialVenta');
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

    //Ajax

    //Productos activos
    public function ccActualizar_Ventas()
    {
     //Traer producto por id
        $id_producto = $this->input->post('id_producto');
        $producto = $this->mCaja->mmTraerProductoPorId($id_producto);
        echo json_encode($producto);
        //No borrar el die importante para que el ajax funcione
        die();
    }
}
