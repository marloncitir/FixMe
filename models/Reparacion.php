<?php
require_once("config/conexion.php");

class reparacion {
    private $db;

    public function __construct() {
        $this->db = conectar();
    }
    
    public function IniciarReparacion($idReparacion, $fechaInicio, $fechaFin, $estado, $observaciones) {
        $sql = "INSERT INTO reparacion (idReparacion, fechaInicio, fechaFin, estado, observaciones) VALUES ('$idReparacion', '$fechaInicio', '$fechaFin', '$estado', '$observaciones')";
        return $this->db->query($sql);
    }
    public function finalizarReparacion(): void {
        $this->fechaFin = new DateTime();
        $this->estado = "Finalizada";
    }
       public function asignarTecnico(int $idTecnico): void {
        $this->idTecnico = $idTecnico;
    }
        public function cambiarEstado(string $nuevoEstado): void {
        $this->estado = $nuevoEstado;
    }
    
} 
?>