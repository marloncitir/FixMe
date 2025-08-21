<?php
require_once("config/conexion.php");

class cliente {
    private $db;

    public function __construct() {
        $this->db = conectar();
    }
    
    public function Registrarse($nombre, $email, $telefono, $direccion, $fechaRegistro) {
        $sql = "INSERT INTO cliente (nombre, email, telefono, direccion, fechaRegistro) 
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssss", $nombre, $email, $telefono, $direccion, $fechaRegistro);
        
        return $stmt->execute();
    }
    
    public function ConsultarProductos() {
        $sql = "SELECT * FROM cliente";
        $resultado = $this->db->query($sql);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    
    public function actualizarDatos($id, $nombre, $email, $telefono, $direccion, $fechaRegistro) {
        $sql = "UPDATE cliente
                SET nombre=?, email=?, telefono=?, direccion=?, fechaRegistro=? 
                WHERE idCliente=?";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssssi", $nombre, $email, $telefono, $direccion, $fechaRegistro, $id);
        
        return $stmt->execute();
    }
    
}