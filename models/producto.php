<?php
class Producto {
    public function crear($marca, $modelo, $descripcion, $fechaIngreso, $estado, $idCliente) {
        $sql = "INSERT INTO Producto (marca, modelo, descripcion, fechaIngreso, estado, idCliente) 
                VALUES ('$marca', '$modelo', '$descripcion', '$fechaIngreso', '$estado', '$idCliente')";
        return $this->db->query($sql);
    }
    
    public function buscarPorId($id) {
        $sql = "SELECT * FROM Producto WHERE idProducto = $id";
        return $this->db->query($sql)->fetch_assoc();
    }
    
    public function actualizar($id, $marca, $modelo, $descripcion, $fechaIngreso, $estado, $idCliente) {
        $sql = "UPDATE Producto SET marca='$marca', modelo='$modelo', descripcion='$descripcion', fechaIngreso='$fechaIngreso', estado='$estado', idCliente='$idCliente' WHERE idProducto=$id";
        return $this->db->query($sql);
    }
    
    public function borrar($id) {
        $sql = "DELETE FROM Producto WHERE idProducto = $id";
        return $this->db->query($sql);
    }
}
?>