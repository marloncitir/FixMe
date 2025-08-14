<?php
class ReparacionController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        $reparacion = new Reparacion($this->db);
        $resultados = $reparacion->listar();
        include("views/reparacion/listar.php");
    }

    public function crear() {
        include("views/reparacion/crear.php");
    }

    public function guardar() {
        $reparacion = new Reparacion($this->db);
        $idProducto = $_POST['idProducto'];
        $idTecnico = $_POST['idTecnico'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];
        $estado = $_POST['estado'];
        $observaciones = $_POST['observaciones'];

        $reparacion->crear($idProducto, $idTecnico, $fechaInicio, $fechaFin, $estado, $observaciones);
        header("Location: index.php?controlador=Reparacion");
    }

    public function editar() {
        $reparacion = new Reparacion($this->db);
        $id = $_GET['id'];
        $datos = $reparacion->buscarPorId($id);
        include("views/reparacion/editar.php");
    }

    public function actualizar() {
        $reparacion = new Reparacion($this->db);
        $id = $_POST['id'];
        $idProducto = $_POST['idProducto'];
        $idTecnico = $_POST['idTecnico'];
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFin = $_POST['fechaFin'];
        $estado = $_POST['estado'];
        $observaciones = $_POST['observaciones'];

        $reparacion->actualizar($id, $idProducto, $idTecnico, $fechaInicio, $fechaFin, $estado, $observaciones);
        header("Location: index.php?controlador=Reparacion");
    }

    public function borrar() {
        $reparacion = new Reparacion($this->db);
        $id = $_GET['id'];
        $reparacion->borrar($id);
        header("Location: index.php?controlador=Reparacion");
    }
}