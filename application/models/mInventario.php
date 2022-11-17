<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mInventario extends CI_Model
{
    //Funciones para traer datos de la base de datos en la carga de las vistas

    // Traer los tipos de producto desde la base de datos
    public function mmTraerTiposProducto()
    {
        $this->db->select('*');
        $this->db->from('tipo_producto');
        $query_select = $this->db->get();
        return $query_select->result();
    }

    // Traer los tipos de medida desde la base de datos
    public function mmTraerTiposMedida()
    {
        $this->db->select('*');
        $this->db->from('medida_producto');
        $query_select = $this->db->get();
        return $query_select->result();
    }

    // Traer los productos desde la base de datos con el estado activo y el tipo de producto seleccionado y el tipo de medida seleccionado
    public function mmTraerProductosActivosAnidados()
    {
        $this->db->select('*');
        $this->db->from('producto');
        //Join a la tabla tipo_producto
        $this->db->join('tipo_producto', 'producto.id_tipo_producto_producto = tipo_producto.id_tipo_producto');
        //Join a la tabla medida_producto
        $this->db->join('medida_producto', 'producto.id_medida_producto_producto = medida_producto.id_medida');
        $this->db->where('id_estado_producto', 1);
        $query_select = $this->db->get();
        return $query_select->result();
    }

    // Traer los productos desde la base de datos con el estado activo
    public function mmTraerProductosActivos()
    {
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('id_estado_producto', 1);
        $query_select = $this->db->get();
        return $query_select->result();
    }

    // Traer producto por activo por id anidado
    public function mmTraerProductoPorId($id_producto)
    {
        $this->db->select('*');
        $this->db->from('producto');
        //Join a la tabla tipo_producto
        $this->db->join('tipo_producto', 'producto.id_tipo_producto_producto = tipo_producto.id_tipo_producto');
        //Join a la tabla medida_producto
        $this->db->join('medida_producto', 'producto.id_medida_producto_producto = medida_producto.id_medida');
        $this->db->where('id_producto', $id_producto);
        $query_select = $this->db->get();
        return $query_select->result();
    }
    

    //Funciones para insertar datos en la base de datos desde las vistas

    // Insertar un producto en la base de datos
    public function mmProductoRegistrar($data)
    {
        $this->db->insert('producto', $data);
    }

    //Insertar actualizacion de existencia de producto en la base de datos a través de una tabla intermedia
    public function mmProductoActualizarExistencia($data)
    {
        $this->db->insert('agregar_producto', $data);
    }

    //Insertar tipo de producto en la base de datos
    public function mmTipoProductoRegistrar($data)
    {
        $this->db->insert('tipo_producto', $data);
    }

}
