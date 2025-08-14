<?php
class Tecnico {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function crear($nombre, $especializacion, $email, $telefono, $fechaRegistro) {
        $sql = "INSERT INTO Tecnico (nombre, especializacion, email, telefono, fechaRegistro) 
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssss", $nombre, $especializacion, $email, $telefono, $fechaRegistro);
        
        return $stmt->execute();
    }

    public function listar() {
        $sql = "SELECT * FROM Tecnico";
        $resultado = $this->db->query($sql);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    
    public function buscarPorId($id) {
        $sql = "SELECT * FROM Tecnico WHERE idTecnico = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
        return $resultado->fetch_assoc();
    }

    public function actualizar($id, $nombre, $especializacion, $email, $telefono, $fechaRegistro) {
        $sql = "UPDATE Tecnico 
                SET nombre=?, especializacion=?, email=?, telefono=?, fechaRegistro=? 
                WHERE idTecnico=?";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssssi", $nombre, $especializacion, $email, $telefono, $fechaRegistro, $id);
        
        return $stmt->execute();
    }

    public function borrar($id) {
        $sql = "DELETE FROM Tecnico WHERE idTecnico = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        
        return $stmt->execute();
    }
}