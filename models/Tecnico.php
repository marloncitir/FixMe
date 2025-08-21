<?php
require_once("config/conexion.php");

class tecnico {
    private $db;

    public function __construct() {
        $this->db = conectar();
    }

    public function Registarse($nombre, $especializacion, $email, $telefono, $fechaRegistro) {
        $sql = "INSERT INTO tecnico (nombre, especializacion, email, telefono, fechaRegistro) 
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssss", $nombre, $especializacion, $email, $telefono, $fechaRegistro);
        
        return $stmt->execute();
    }
        public function verReparacionesAsignadas() {
        $sql = "SELECT * FROM tecnico";
        $resultado = $this->db->query($sql);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function actualizarDatos($id, $nombre, $especializacion, $email, $telefono, $fechaRegistro) {
        $sql = "UPDATE tecnico 
                SET nombre=?, especializacion=?, email=?, telefono=?, fechaRegistro=? 
                WHERE idTecnico=?";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssssi", $nombre, $especializacion, $email, $telefono, $fechaRegistro, $id);
        
        return $stmt->execute();
    }




}