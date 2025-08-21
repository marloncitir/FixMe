<?php
require_once("models/reparacion.php");
require_once("config/conexion.php");

class ReparacionController {


    public function index() {
        $reparacion = new Reparacion();
        $resultados = $reparacion->listar();
        include("views/reparacion/listar.php");
    }

   
    public function crear() {
        include("views/reparacion/crear.php");
    }

    
    public function guardar() {
        $reparacion = new Reparacion();
        $idProducto = $_POST['idProducto'];
        $fechaInicio = $_POST['fechaInicio'];
        $estado = $_POST['estado'];
        $observaciones = $_POST['observaciones'];

        $reparacion->iniciarReparacion($idProducto, $fechaInicio, $estado, $observaciones);
        header("Location: index.php");
    }

    
    public function editar() {
        $reparacion = new Reparacion();
        $id = $_GET['id'];
        $datos = $reparacion->buscarPorId($id);
        include("views/reparacion/editar.php");
    }

   
    public function finalizar() {
        $reparacion = new Reparacion();
        $id = $_POST['id'];
        $reparacion->finalizarReparacion($id);
        header("Location: index.php");
    }


    public function asignarTecnico() {
        $reparacion = new Reparacion();
        $idReparacion = $_POST['id'];
        $idTecnico = $_POST['idTecnico'];
        $reparacion->asignarTecnico($idReparacion, $idTecnico);
        header("Location: index.php");
    }

  
    public function cambiarEstado() {
        $reparacion = new Reparacion();
        $idReparacion = $_POST['id'];
        $nuevoEstado = $_POST['estado'];
        $reparacion->cambiarEstado($idReparacion, $nuevoEstado);
        header("Location: index.php");
    }

   
    public function borrar() {
        $reparacion = new Reparacion();
        $id = $_GET['id'];
        $reparacion->borrar($id);
        header("Location: index.php");
    }
}
?>


   
