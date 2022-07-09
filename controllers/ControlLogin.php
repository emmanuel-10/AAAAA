<?php

namespace controllers;

use models\AdminModel as AdminModel;
use models\ClienteModel as ClienteModel;

require_once("../models/ClienteModel.php");

require_once("../models/AdminModel.php");
class ControlLogin{

    public $rut;
    public $clave;

    public function __construct()
    {
        $this->rut = $_POST['rut'];
        $this->clave = $_POST['clave'];
    }

    public function login(){

        session_start();
        if ($this->rut == "" || $this->clave == "") {
            $_SESSION['error'] = "Completa los campos";
            header("Location: ../index.php");
            return;
        }

        $modelo = new ClienteModel();
        $modelo2 = new AdminModel();

        $arr1 = $modelo->loginCliente($this->rut, $this->clave);
        $arr2 = $modelo2->loginAdmin($this->rut, $this->clave);
        $arr3 = $modelo->loginClienteBloqueado($this->rut, $this->clave);
        
        
        if(count($arr3) == 1){
            $_SESSION['cliente'] = $arr3[0];
            header("Location: ../views/cliente/bloqueo.php");
        } else if (count($arr1) == 1){
            $_SESSION['cliente'] = $arr1[0];
            header("Location: ../views/cliente/index.php");
        } else if (count($arr2) == 1 ){
            $_SESSION['admin'] = $arr2[0];
            header("Location: ../views/admin/index.php");
        } else{
            $_SESSION['error'] = "No se encuentra la session";
            header("Location: ../index.php");
            return;
        }


       

        


       

        
        

        

       
    }

}

$obj = new ControlLogin();
$obj->login();