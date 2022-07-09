<?php

namespace models;

require_once("Conexion.php");

class ClienteModel{

    public function insertarCliente($data){
        $stm = Conexion::conector()->prepare("INSERT INTO cliente VALUES(:A,:B,:C,:D,:E,1)");
        $stm->bindParam(":A",$data['rut']);
        $stm->bindParam(":B",$data['nombre']);
        $stm->bindParam(":C",$data['correo']);
        $stm->bindParam(":D",$data['clave']);
        $stm->bindParam(":E",$data['edad']);
        return $stm->execute();
    }


    public function validarCliente($rut,$correo)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM cliente WHERE rut=:A AND correo=:B");
        $stm->bindParam(":A", $rut);
        $stm->bindParam(":B", $correo);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function loginCliente($rut, $clave)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM cliente where rut=:A AND clave=:B AND estado = 1");
        $stm->bindParam(":A", $rut);
        $stm->bindParam(":B", $clave);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function allClientes()
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM cliente");
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function loginClienteBloqueado($rut, $clave)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM cliente where rut=:A AND clave=:B AND estado = 0");
        $stm->bindParam(":A", $rut);
        $stm->bindParam(":B", $clave);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function editarEstado($rut,$data)
    {
        $stm = Conexion::conector()->prepare("UPDATE cliente SET estado=:B WHERE rut=:C");
        $stm->bindParam(":B", $data['estado']);
        $stm->bindParam(":C", $rut);
        return $stm->execute();
    }

    public function buscarClienteRut($rut){
        $stm = Conexion::conector()->prepare("SELECT * FROM cliente WHERE rut=:A");  
        $stm->bindParam(":A", $rut);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function buscarClienteCorreo($correo){
        $stm = Conexion::conector()->prepare("SELECT * FROM cliente WHERE correo=:A");  
        $stm->bindParam(":A", $correo);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function eliminarCliente($rut){
        $stm = Conexion::conector()->prepare("DELETE FROM cliente WHERE rut=:A");
        $stm->bindParam(":A", $rut);
        return $stm->execute();
    }



    
}