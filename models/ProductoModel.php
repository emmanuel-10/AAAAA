<?php
namespace models;

require_once("Conexion.php");

class ProductoModel{

    public function allProductos()
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM producto");
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function insertarProducto($data){
        $stm = Conexion::conector()->prepare("INSERT INTO producto VALUES(:A,:B,:C,:D)");
        $stm->bindParam(":A",$data['codigo']);
        $stm->bindParam(":B",$data['valor']);
        $stm->bindParam(":C",$data['nombre']);
        $stm->bindParam(":D",$data['descripcion']);
        return $stm->execute();
    }

    public function validarProducto($codigo)
    {
        $stm = Conexion::conector()->prepare("SELECT * FROM producto WHERE codigo=:A");
        $stm->bindParam(":A", $codigo);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function buscarProducto($codigo){
        $stm = Conexion::conector()->prepare("SELECT * FROM producto WHERE codigo=:A");  
        $stm->bindParam(":A", $codigo);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function eliminarProducto($codigo){
        $stm = Conexion::conector()->prepare("DELETE FROM producto WHERE codigo=:A");
        $stm->bindParam(":A", $codigo);
        return $stm->execute();
    }

    public function editarProducto($codigo,$data)
    {
        $stm = Conexion::conector()->prepare("UPDATE producto SET valor=:A , nombre=:B , descripcion=:C  WHERE codigo=:D");
        $stm->bindParam(":A", $data['valor']);
        $stm->bindParam(":B", $data['nombre']);
        $stm->bindParam(":C", $data['descripcion']);
        $stm->bindParam(":D", $codigo);
        return $stm->execute();
    }


}
