<?php

namespace models;

require_once("Conexion.php");

class AdminModel{

    public function loginAdmin($rut, $clave)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM administrador where rut=:A AND clave=:B");
        $stm->bindParam(":A", $rut);
        $stm->bindParam(":B", $clave);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}