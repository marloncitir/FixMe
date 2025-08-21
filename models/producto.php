<?php
require_once("config/conexion.php");

class producto {
    private $db;

    public function __construct() {
        $this->db = conectar();
    }

    public function RegistrarProducto($modelo, $marca, $descripcion, $fechaIngreso, $estado) {
        $sql = "INSERT INTO producto (modelo, marca, descripcion, fechaIngreso, estado) VALUES ('$modelo', '$marca', '$descripcion', '$fechaIngreso', '$estado')";
        return $this->db->query($sql);
    }

    public function obtenerHistorial() {
        $sql = "SELECT * FROM producto";
        return $this->db->query($sql);
    }

    public function actualizarEstado($estado) {
        $sql = "UPDATE producto SET estado='$estado' WHERE id='$idProducto'";
        return $this->db->query($sql);
    }

}

?>
  