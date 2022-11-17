<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mConfiguracion extends CI_Model
{
    //Traer los datos de los usuarios
    public function mmTraerUsuariosAnidado()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        //Join a la tabla rol_usuario
        $this->db->join('rol_usuario', 'usuario.id_rol_usuario_usuario = rol_usuario.id_rol_usuario');
        //Join a la tabla estado_usuario
        $this->db->join('estado', 'usuario.id_estado_usuario = estado.id_estado');
        $query_select = $this->db->get();
        return $query_select->result();
    }

    //Registrar un nuevo usuario
    public function mmRegistrarUsuario($nombre_usuario, $clave_usuario, $correo_usuario, $id_rol_usuario_usuario, $id_estado_usuario,)
    {
        $data = array(
            'nombre_usuario' => $nombre_usuario,
            'clave_usuario' => $clave_usuario,
            'correo_usuario' => $correo_usuario,
            'id_rol_usuario_usuario' => $id_rol_usuario_usuario,
            'id_estado_usuario' => $id_estado_usuario

        );
        $this->db->insert('usuario', $data);
    }
}
