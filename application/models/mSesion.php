<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSesion extends CI_Model
{
    public function mmValidar($usuario, $clave)
    {
        // $query_select = $this->db->query("SELECT * FROM usuario WHERE nombre_usuario = '$usuario' AND clave_usuario = '$clave'");
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('nombre_usuario', strtolower($usuario));
        $this->db->where('clave_usuario', $clave);
        $query_select = $this->db->get();
        if ($query_select->num_rows() == 1) {
            $row = $query_select->row();
            $data = array(
                'idUsuario' => $row->id_usuario,
                'nombreUsuario' => $row->nombre_usuario,
                'rolUsuario' => $row->rol_usuario,
                'estadoUsuario' => $row->estado_usuario,
                'loginUsuario' => true
            );
            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }
}
