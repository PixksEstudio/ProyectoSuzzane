<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mCaja extends CI_Model
{
    //Comprobar que el usuario no tenga un arqueo en estado 1, si lo tiene, no puede abrir otro

    public function mmAbrirArqueo($monto_arqueo, $fecha, $estado, $id_usuario)
    {
        $data = array(
            'dinero_inicial_arqueo_caja' => $monto_arqueo,
            'dinero_final_arqueo_caja' => 0,
            'fecha_inicio_arqueo_caja' => $fecha,
            'fecha_final_arqueo_caja' => '0000-00-00 00:00:00',
            'id_estado_arqueo_caja' => $estado,
            'id_usuario_abridor_arqueo_caja' => $id_usuario,
            'id_usuario_cierre_arqueo_caja' => 1
            //1 es el id del usuario administrador por lo cual se debe de crear un usuario auxiliar para el cierre de arqueo de caja
        );
        //Se realiza select para comprobar que no exista un arqueo abierto
        $this->db->select('*');
        $this->db->from('arqueo_caja');
        $this->db->where('id_usuario_abridor_arqueo_caja', $id_usuario);
        $this->db->where('id_estado_arqueo_caja', 1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            $this->db->insert('arqueo_caja', $data);
            return true;
        } else {
            return false;
        }
    }
}
