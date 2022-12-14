<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cInventario extends CI_Controller
{
    // Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->view('menuGlobal');
        $this->load->model('mInventario');
    }

    //Funciones para cargar las vistas


    //Producto: Registrar producto
    public function ccProductoRegistrar()
    {
        $data['tiposProducto'] = $this->mInventario->mmTraerTiposProducto();
        $data['tiposMedida'] = $this->mInventario->mmTraerTiposMedida();
        $this->load->view('inventario/vProductoRegistrar', $data);
    }

    //Producto: Actualizar Existencia En Inventario
    //Carga la vista de Producto: Actualizar Existencia En Inventario
    public function ccProductoExistencia()
    {
        $data['productos'] = $this->mInventario->mmTraerProductosActivos();
        $this->load->view('inventario/vProductoActualizarExistencia.php', $data);
    }



    //Producto: Actualizar Datos De Producto
    public function ccProductoActualizar()
    {
        $data['productos'] = $this->mInventario->mmTraerProductosActivosAnidados();
        $data['tiposProducto'] = $this->mInventario->mmTraerTiposProducto();
        $data['tiposMedida'] = $this->mInventario->mmTraerTiposMedida();
        $this->load->view('inventario/vProductoActualizarDatos', $data);
    }

    public function ccTipoProducto()
    {

        $this->load->view('inventario/vTipoProductoRegistrar');
    }

    public function ccVerInventario()
    {
        $data['productos'] = $this->mInventario->mmTraerProductosActivosAnidados();
        $this->load->view('inventario/vVerInventario', $data);
    }

    //Funciones para guardar datos en la base de datos
    public function ccProductoRegistrarG()
    {
        $nombreProducto = $this->input->post('txt_nombreProducto_vProductoRegistrar');
        $precioProducto = $this->input->post('txt_precioProducto_vProductoRegistrar');
        $cantidadProducto = $this->input->post('txt_cantidadInicialProducto_vProductoRegistrar');
        $descripcionProducto = $this->input->post('txt_descripcionProducto_vProductoRegistrar');
        $codigoBarra = $this->input->post('txt_codigoBarra_vProductoRegistrar');
        $tipoMedida = $this->input->post('select_formaMedirProducto_vProductoRegistrar');
        $tipoProducto = $this->input->post('select_tipoProducto_vProductoRegistrar');
        $estadoProducto = 1;
        $data = array(
            'nombre_producto' => $nombreProducto,
            'precio_producto' => $precioProducto,
            'cantidad_producto' => $cantidadProducto,
            'descripcion_producto' => $descripcionProducto,
            'codigo_barra_producto' => $codigoBarra,
            'id_medida_producto_producto' => $tipoMedida,
            'id_tipo_producto_producto' => $tipoProducto,
            'id_estado_producto' => $estadoProducto
        );
        $this->mInventario->mmProductoRegistrar($data);
        redirect('cInventario/ccProductoRegistrar');
    }

    //Funcion para actualizar la existencia de un producto
    public function ccProductoActualizarExistenciaG()
    {
        $idProducto = $this->input->post('select_nombreProducto_vProductoExistencia');
        // traer la cantidad de producto a agregar sin redondear
        $cantidadProducto = $this->input->post('txt_cantidadAgregar_vProductoExistencia');
        $idUsuario = $this->session->userdata('idUsuario');
        //Trae la fecha actual con hora y minutos correctos
        $fecha = date('Y-m-d H:i:s');
        $data = array(
            'id_producto_agregar_producto' => $idProducto,
            'cantidad_agregar_producto' => $cantidadProducto,
            'id_usuario_agregar_producto' => $idUsuario,
            'fecha__agregar_producto' => $fecha
        );
        $this->mInventario->mmProductoActualizarExistencia($data);
        redirect('cInventario/ccProductoExistencia');
    }

    //Funcion para registrar un tipo de producto
    public function ccTipoProductoRegistrarG()
    {
        $nombreTipoProducto = $this->input->post('txt_nombreTipoProducto_vTipoProductoRegistrar');
        $data = array(
            'nombre_tipo_producto' => $nombreTipoProducto
        );
        $this->mInventario->mmTipoProductoRegistrar($data);
        redirect('cInventario/ccTipoProducto');
    }

    //Funcion para actualizar los datos de un producto
    public function ccProductoActualizarDatosG()
    {
        //Traer los datos nuevos del producto
        $idProducto = $this->input->post('select_nombreProducto_vProductoActualizarDatos');
        $nombreProducto = $this->input->post('txt_nombreProducto_vProductoActualizarDatos');
        $precioProducto = $this->input->post('txt_precioProducto_vProductoActualizarDatos');
        $descripcionProducto = $this->input->post('txt_decripcionProducto_vProductoActualizarDatos');
        $codigoBarra = $this->input->post('txt_codigoBarra_vProductoActualizarDatos');
        $tipoMedida = $this->input->post('select_medidaProducto_vProductoActualizarDatos');
        $tipoProducto = $this->input->post('select_tipoProducto_vProductoActualizarDatos');
        //Traer los datos antiguos del producto
        $dataAntiguo = $this->mInventario->mmTraerProductoPorId($idProducto);
       //Ciclo para leer los datos antiguos
        foreach ($dataAntiguo as $row) {
            $nombreProductoAntiguo = $row->nombre_producto;
            $precioProductoAntiguo = $row->precio_producto;
            $descripcionProductoAntiguo = $row->descripcion_producto;
            $codigoBarraAntiguo = $row->codigo_barra_producto;
            $tipoMedidaAntiguo = $row->id_medida_producto_producto;
            $tipoProductoAntiguo = $row->id_tipo_producto_producto;
        }
        //Hacer un array con datos nuevos y antiguos
        $data = array(
            'id_producto_modificar_dato_producto' => $idProducto,
            'nombre_producto_anterior_modificar_dato_producto' => $nombreProductoAntiguo,
            'nombre_producto_nuevo_modificar_dato_producto' => $nombreProducto,
            'descripcion_producto_anterior_modificar_dato_producto' => $descripcionProductoAntiguo,
            'descripcion_producto_nuevo_modificar_dato_producto' => $descripcionProducto,
            'codigo_barra_producto_anterior_modificar_dato_producto' => $codigoBarraAntiguo,
            'codigo_barra_producto_nuevo_modificar_dato_producto' => $codigoBarra,
            'id_medida_producto_anterior_modificar_dato_producto' => $tipoMedidaAntiguo,
            'id_medida_producto_nuevo_modificar_dato_producto' => $tipoMedida,
            'id_tipo_producto_anterior_modificar_dato_producto' => $tipoProductoAntiguo,
            'id_tipo_producto_nuevo_modificar_dato_producto' =>  $tipoProducto,
            'precio_anterior_modificar_dato_producto' => $precioProductoAntiguo,
            'precio_nuevo_modificar_dato_producto' => $precioProducto,
            'id_usuario_modificar_dato_producto' => $this->session->userdata('idUsuario'),
            'fecha_modificar_dato_producto' => date('Y-m-d H:i:s')
        );
        $this->mInventario->mmProductoActualizarDatos($data);
        redirect('cInventario/ccProductoActualizar');
    }

    //AJAX

    //Actualizar los inputs de la vista de Producto: Actualizar Existencia En Inventario
    public function ccActualizar_vProductoActualizarExistencia()
    {
        $id_producto = $this->input->post('id_producto');
        $datosJson = $this->mInventario->mmTraerProductoPorId($id_producto);
        echo json_encode($datosJson);
        //No Borrar esta linea soluciona el error de que la variable datosJson traiga todo el html de la pagina
        die();
    }

    //Actualizar los campos de la vista de Producto: Actualizar Datos De Producto
    public function ccActualizar_vProductoActualizarDatos()
    {
        $id_producto = $this->input->post('id_producto');
        $datosJson = $this->mInventario->mmTraerProductoPorId($id_producto);
        echo json_encode($datosJson);
        //No Borrar esta linea soluciona el error de que la variable datosJson traiga todo el html de la pagina
        die();
    }
}
