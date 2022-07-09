<?php

namespace controllers;

use models\ProductoModel as ProductoModel;

require_once("../models/ProductoModel.php");


class ControlEditProducto{
    public $codigo;
    public $valor;
    public $nombre;
    public $descripcion;

    public function __construct()
    {
        $this->codigo = $_POST['codigo'];
        $this->valor = $_POST['valor'];
        $this->nombre = $_POST['nombre'];
        $this->descripcion = $_POST['descripcion'];
    }


    public function editar(){

        session_start();
        

        $data = ['valor' => $this->valor, 'nombre' => $this->nombre, 'descripcion' => $this->descripcion];

        if($this->codigo == "" || $this->valor == "" || $this->nombre == "" || $this->descripcion == ""){
            $_SESSION['error_ed'] = "Completa los campos para editar el producto";
            header("Location: ../views/admin/productoAdmin.php");
            return;
        }

        $modelo = new ProductoModel();
        $count = $modelo->editarProducto($this->codigo,$data);

        if($count == 1){
            $_SESSION["ok_edit"] = "EDITADO";
        }else{
            $_SESSION["error_edit"] =  "error";
        }

        header("Location: ../views/admin/productoAdmin.php");
        


        
    }
}


$obj = new ControlEditProducto();
$obj->editar();