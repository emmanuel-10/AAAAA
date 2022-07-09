<?php

namespace controllers;

use models\ClienteModel as ClienteModel;

require_once("../models/ClienteModel.php");

class ControlEdit{
    public $rut;
    
    public $estado;

    public function __construct()
    {
        $this->rut = $_POST['rut'];
        $this->estado = $_POST['estado'];
    }

    public function editar(){

        session_start();
        if($this->estado == ""){
            $_SESSION['error_edit'] = "Completa los campos";
            header("Location: ../views/admin/index.php");
            return;
        }

        $data = ['estado' => $this->estado];
        $modelo = new ClienteModel();
        $count = $modelo->editarEstado($this->rut,$data);

        if($count == 1){
            $_SESSION["ok_edit"] = "EDITADO";
        }else{
            $_SESSION["error_edit"] =  "error";
        }

        header("Location: ../views/admin/index.php");
    }
}


$obj = new ControlEdit();
$obj->editar();