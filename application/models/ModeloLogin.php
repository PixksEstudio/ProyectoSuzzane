<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModeloLogin extends CI_Model
{
    public function m_verificarDato($usuario, $clave)
    {
        $query_select = $this->db->query("SELECT * FROM usuario WHERE nombre_usuario = '$usuario' AND clave_usuario = '$clave'");
        //$query_select = $this->db->query("SELECT * FROM usuario");
        if ($query_select->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
