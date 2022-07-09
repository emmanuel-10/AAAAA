<?php

namespace controllers;

use models\ClienteModel as ClienteModel;

require_once("../models/ClienteModel.php");

class ControlTabla{

    public $bt_edit;
    public $bt_delete;

    public function __construct()
    {
        $this->bt_edit = $_POST['bt_edit'];
        $this->bt_delete = $_POST['bt_delete'];
        
    }

    public function procesar(){
        if(isset($this->bt_edit)){
           session_start();
           $_SESSION['editar'] = "ON";
           $modelo = new ClienteModel();
           $cliente = $modelo->buscarClienteRut($this->bt_edit);
           $_SESSION['client'] = $cliente[0];
           header("Location: ../views/admin/index.php");
        }else{
            $modelo = new ClienteModel();
            $modelo->eliminarCliente($this->bt_delete);
            header("Location: ../views/admin/index.php");
        }
    }

}


$obj = new ControlTabla();
$obj->procesar();