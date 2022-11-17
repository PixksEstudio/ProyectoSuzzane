<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSesion extends CI_Model
{
    public function mmValidar($usuario, $clave)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('nombre_usuario', strtolower($usuario));;
        $this->db->where('id_estado_usuario', 1);
        $query_select = $this->db->get();
        //Soluciona el error al no haber el usuario registrado
        if ($query_select->num_rows() == 1) {
            $clave_desencriptada = $query_select->row()->clave_usuario;
            if (password_verify($clave, $clave_desencriptada)) {
                $row = $query_select->row();
                $data = array(
                    'idUsuario' => $row->id_usuario,
                    'nombreUsuario' => $row->nombre_usuario,
                    'rolUsuario' => $row->id_rol_usuario_usuario,
                    'estadoUsuario' => $row->id_estado_usuario,
                    'loginUsuario' => true
                );
                $this->session->set_userdata($data);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
        //Desencriptar la clave para compararla con la que se ingreso


    }
}
