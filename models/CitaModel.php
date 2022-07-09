<?php
namespace models;

require_once("Conexion.php");

class CitaModel{

    public function allCitas($rut)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM cita WHERE cliente=:A");
        $stm->bindParam(":A", $rut);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    
    public function allServicios()
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM servicio");
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insertarCita($data){
        $stm = Conexion::conector()->prepare("INSERT INTO cita VALUES(NULL,:B,:C,:D,:E)");
        
        $stm->bindParam(":B",$data['fecha']);
        $stm->bindParam(":C",$data['hora']);
        $stm->bindParam(":D",$data['cliente']);
        $stm->bindParam(":E",$data['servicio']);
        return $stm->execute();
    }

    

    public function validarFechaCita($fecha,$cliente)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM cita WHERE fecha=:A AND cliente=:B");
        $stm->bindParam(":A", $fecha);
        $stm->bindParam(":B", $cliente);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    

    
}