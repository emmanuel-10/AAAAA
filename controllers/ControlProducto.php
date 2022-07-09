<?php

namespace controllers;

use models\ProductoModel as ProductoModel;

require_once("../models/ProductoModel.php");


class ControlProducto{

    public $bt_edit;
    public $bt_delete;

    public function __construct()
    {
        $this->bt_edit = $_POST['bt_edit'];
        $this->bt_delete = $_POST['bt_delete'];

    }public function procesar(){
        

        if(isset($this->bt_edit)){
            //echo "Editar el ID $this->bt_edit";

            session_start();
            $_SESSION['editar'] = "ON";

            $modelo = new ProductoModel();
            $producto = $modelo->buscarProducto($this->bt_edit);
            $_SESSION['prod'] = $producto[0];

            header("Location: ../views/admin/productoAdmin.php");

        }else{
            //echo "Eliminar el ID $this->bt_delete";
            $modelo = new ProductoModel();
            $modelo->eliminarProducto($this->bt_delete);
            header("Location: ../views/admin/productoAdmin.php");
        }
    }
}

$obj = new ControlProducto(); 
$obj->procesar();