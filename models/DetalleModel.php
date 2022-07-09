<?php
namespace models;

require_once("Conexion.php");

class DetalleModel{

    public function insertarDetalle($data){
        $stm = Conexion::conector()->prepare("INSERT INTO detallecompra VALUES(:A,:B,:C,:D,:E)");
        $stm->bindParam(":A",$data['id_Detalle_compra']);
        $stm->bindParam(":B",$data['cantidad']);
        $stm->bindParam(":C",$data['detalle']);
        $stm->bindParam(":D",$data['producto']);
        $stm->bindParam(":E",$data['compra']);
        return $stm->execute();
    }


    public function allCompras()
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM compra");
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function allComprasCliente($cliente)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM compra WHERE cliente=:A");
        $stm->bindParam(":A", $cliente);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function detalleCompra($producto)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM detallecompra WHERE producto=:A");
        $stm->bindParam(":A", $producto);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function detalleCompraC($id_Detalle_compra)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM detallecompra WHERE id_Detalle_compra=:A");
        $stm->bindParam(":A", $id_Detalle_compra);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

}