<?php
namespace controllers;

use models\DetalleModel as DetalleModel;

require_once("../models/DetalleModel.php");

class InsertarDetalle{

    public $id_Detalle_compra;
    public $cantidad;
    public $detalle;
    public $producto;
    public $compra;

    public function __construct()
    {
        $this->id_Detalle_compra = $_POST['id_Detalle_compra'];
        $this->cantidad = $_POST['cantidad'];
        $this->detalle = $_POST['detalle'];
        $this->producto = $_POST['producto'];
        $this->compra = $_POST['compra'];
    }

    public function insertDetalle(){
        session_start();
        if($this->id_Detalle_compra == "" || $this->cantidad == "" || $this->detalle == "" || $this->producto == "" || $this->compra == ""  ){

            $_SESSION['error'] = "Completa los campos";
            header("Location: ../views/cliente/detalleCompra.php");
            return;

        }



        $modelo = new DetalleModel();

        $array = $modelo->detalleCompra($this->producto);
        $array2 = $modelo->detalleCompraC($this->id_Detalle_compra);
        
        if(count($array2) == 1){
            $_SESSION['error'] = "ID ya registrado";
            header("Location: ../views/cliente/detalleCompra.php");
        }else{
            if(count($array) == 1){
                $_SESSION['error'] = "Ya compraste este articulo";
                header("Location: ../views/cliente/detalleCompra.php");
            }else{
                $data = ['id_Detalle_compra' => $this->id_Detalle_compra, 'cantidad' => $this->cantidad,'detalle' => $this->detalle,'producto' => $this->producto,'compra' => $this->compra];
               $count = $modelo->insertarDetalle($data);
       
               if($count == 1){
                   $_SESSION['respuesta'] = "Compra realizada...";
                   header("Location: ../views/cliente/detalleCompra.php");
               }else{
                   $_SESSION['error'] = "error";
                   header("Location: ../views/cliente/detalleCompra.php");
               }
               }
        }
               
    }

}

$obj = new InsertarDetalle();
$obj->insertDetalle();