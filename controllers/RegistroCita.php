<?php

namespace controllers;

use models\CitaModel as CitaModel;

require_once("../models/CitaModel.php");

class RegistroCita{

    public $id;
    public $fecha;
    public $hora;
    public $cliente;
    public $servicio;

    public function __construct()
    {
        $this->id = $_POST['id'];
        $this->fecha = $_POST['fecha'];
        $this->hora = $_POST['hora'];
        $this->cliente = $_POST['cliente'];
        $this->servicio = $_POST['servicio'];
    }

    public function registrarCi(){
        session_start();

        if($this->fecha == "" ||  $this->hora == "" || $this->servicio == ""){
            $_SESSION['error'] = "Completa los campos";
            header("Location: ../views/cliente/agendarCita.php");
        }else{

        $modelo = new CitaModel();

        
        $array2 = $modelo->validarFechaCita($this->fecha,$this->cliente);
       
     

        if(count($array2) == 1){
            $_SESSION['error2'] = "No se puede registrar , fecha ya utilizada";
            header("Location: ../views/cliente/agendarCita.php");
        }

        if(count($array2) == 0){
    
                $data = ['id' => $this->id ,'fecha' => $this->fecha , 'hora' => $this->hora , 'cliente' => $this->cliente , 'servicio' => $this->servicio];
                $count = $modelo->insertarCita($data);
               
          
                if($count == 1){
                    $_SESSION['respuesta'] = "Cita registrada";
                    header("Location: ../views/cliente/agendarCita.php");
                    
                    
                }else{
                    $_SESSION['error'] = "Error";
                    header("Location: ../views/cliente/agendarCita.php");
                }     
        }

        }

        

        header("Location: ../views/cliente/agendarCita.php");

    }

}


$obj = new RegistroCita();
$obj->registrarCi();