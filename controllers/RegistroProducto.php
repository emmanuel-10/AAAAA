<?php
namespace controllers;

use models\ProductoModel as ProductoModel;

require_once("../models/ProductoModel.php");


class RegistroProducto{
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


    public function registrarPro(){
        session_start();
        if($this->codigo == "" || $this->valor == "" || $this->nombre == "" || $this->descripcion == ""){
            $_SESSION['error'] = "Completa los campos";
            header("Location: ../views/admin/productoAdmin.php");
            return;
        }

        $modelo = new ProductoModel();

        $array = $modelo->validarProducto($this->codigo);
        if(count($array) == 1){
            $_SESSION['error'] = "Codigo ya registrado";
            header("Location: ../views/admin/productoAdmin.php");
        }else{
            $data = ['codigo' => $this->codigo , 'valor' => $this->valor , 'nombre' => $this->nombre , 'descripcion' => $this->descripcion];

            $count = $modelo->insertarProducto($data);

            if($count == 1){
                $_SESSION['respuesta'] = "Producto registrado";
                header("Location: ../views/admin/productoAdmin.php");
            }else{
                $_SESSION['error'] = "Error";
                header("Location: ../views/admin/productoAdmin.php");
            }
        }

        header("Location: ../views/admin/productoAdmin.php");
    }


}

$obj = new RegistroProducto();
$obj->registrarPro();