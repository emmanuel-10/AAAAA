<?php

namespace controllers;

use models\ClienteModel as ClienteModel;
use models\Conexion;
use mysqli;

require_once("../models/ClienteModel.php");

class RegistroCliente{

    public $rut;
    public $nombre;
    public $correo;
    public $clave;
    public $edad;

    public function __construct()
    {
        $this->rut = $_POST['rut'];
        $this->nombre = $_POST['nombre'];
        $this->correo = $_POST['correo'];
        $this->clave = $_POST['clave'];
        $this->edad = $_POST['edad'];
    }


    public function registrar(){
        session_start();

        if($this->rut == "" || $this->nombre == "" || $this->correo == "" || $this->clave == "" || $this->edad == ""){
            $_SESSION['error'] = "Completa los campos";
            header("Location: ../registroCliente.php");
            return;
        }
        
        if(ctype_alpha($this->nombre) == false){
            $_SESSION['error'] = "Nombre no admite NUMEROS";
            header("Location: ../registroCliente.php");
            return;
        }

        $modelo = new ClienteModel();
       
        

        $array = $modelo->buscarClienteRut($this->rut);
        $array2 = $modelo->buscarClienteCorreo($this->correo);
        if(count($array) == 1){
            $_SESSION['error'] = "Rut ya Registrado";
            header("Location: ../registroCliente.php");
        }

        if(count($array2) == 1){
            $_SESSION['error'] = "Correo ya Registrado";
            header("Location: ../registroCliente.php");  
        }else{

                $data = ['rut' => $this->rut, 'nombre'=> $this->nombre , 'correo' => $this->correo, 'clave' => $this->clave,'edad' => $this->edad];

                $count = $modelo->insertarCliente($data);

                if($count == 1){
                    $_SESSION['respuesta'] = "Tu cuenta se a registrado exitosamente";
                    header("Location: ../registroCliente.php");
                }else{
                    $_SESSION['error'] = "Error";
                    header("Location: ../registroCliente.php");
                }

            }
        
        

        header("Location: ../registroCliente.php");
    }

}

$obj = new RegistroCliente();
$obj->registrar();
