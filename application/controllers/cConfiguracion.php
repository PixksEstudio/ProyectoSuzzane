<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cConfiguracion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('menuGlobal');
        $this->load->model('mConfiguracion');
    }

    //Configuracion Con funcion de Admin O General
    public function ccConfiguracion()
    {
        if ($this->session->userdata('rolUsuario') == 1) {
            $data['usuarios'] = $this->mConfiguracion->mmTraerUsuariosAnidado();
            $this->load->view('configuracion/vConfiguracionA', $data);
        } else {
            $this->load->view('configuracion/vConfiguracionG');
        }
    }

    //Configuracion Con funcion de Admin registrar usuario

    public function ccRegistrarUsuario()
    {
        $nombre_usuario = $this->input->post('txt_nombreUsuarioRegistrar_vConfiguracionA');
        //Cifrar la clave del usuario tipo String
        $clave_usuario = $this->input->post('txt_claveUsuarioRegistrar_vConfiguracionA');
        $clave_usuario = password_hash($clave_usuario, PASSWORD_DEFAULT);
        $correo_usuario = $this->input->post('txt_correoUsuarioRegistrar_vConfiguracionA');
        $id_rol_usuario_usuario = $this->input->post('radio_tipoUsuarioRegistrar_vConfiguracionA');
        $id_estado_usuario = 1;
        $this->mConfiguracion->mmRegistrarUsuario($nombre_usuario, $clave_usuario, $correo_usuario, $id_rol_usuario_usuario, $id_estado_usuario);
        redirect('cConfiguracion/ccConfiguracion');
    }
}
