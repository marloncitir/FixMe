<?php
class Reparacion {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function crear($idProducto, $idTecnico, $fechaInicio, $fechaFin, $estado, $observaciones) {
        $sql = "INSERT INTO Reparacion (idProducto, idTecnico, fechaInicio, fechaFin, estado, observaciones) 
                VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("iissis", $idProducto, $idTecnico, $fechaInicio, $fechaFin, $estado, $observaciones);
        
        return $stmt->execute();
    }

    public function listar() {
        $sql = "SELECT * FROM Reparacion";
        $resultado = $this->db->query($sql);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    
    public function buscarPorId($id) {
        $sql = "SELECT * FROM Reparacion WHERE idReparacion = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
        return $resultado->fetch_assoc();
    }

    public function actualizar($id, $idProducto, $idTecnico, $fechaInicio, $fechaFin, $estado, $observaciones) {
        $sql = "UPDATE Reparacion 
                SET idProducto=?, idTecnico=?, fechaInicio=?, fechaFin=?, estado=?, observaciones=? 
                WHERE idReparacion=?";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("iissisi", $idProducto, $idTecnico, $fechaInicio, $fechaFin, $estado, $observaciones, $id);
        
        return $stmt->execute();
    }

    public function borrar($id) {
        $sql = "DELETE FROM Reparacion WHERE idReparacion = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        
        return $stmt->execute();
    }
}