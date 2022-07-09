<?php

namespace controllers;

use models\ProductoModel as ProductoModel;

require_once("../models/ProductoModel.php");


class ControlCompra{

    public $bt_buy;
    

    public function __construct()
    {
        $this->bt_buy = $_POST['bt_buy'];

    }
    
    public function procesar(){
        

        if(isset($this->bt_buy)){
            //echo "Editar el ID $this->bt_edit";

            session_start();
            

            $modelo = new ProductoModel();
            $producto = $modelo->buscarProducto($this->bt_buy);
            $_SESSION['prod'] = $producto[0];

            header("Location: ../views/cliente/detalleCompra.php");

        }
    }
}

$obj = new ControlCompra(); 
$obj->procesar();