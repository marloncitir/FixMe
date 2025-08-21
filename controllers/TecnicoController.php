<?php
require_once("models/tecnico.php");
require_once("config/conexion.php");

class TecnicoController {


    public function index() {
        $tecnico = new Tecnico();
        $resultados = $tecnico->listar();
        include("views/tecnico/listar.php");
    }

    
    public function crear() {
        include("views/tecnico/crear.php");
    }

    
    public function guardar() {
        $tecnico = new Tecnico();
        $nombre = $_POST['nombre'];
        $especializacion = $_POST['especializacion'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $fechaRegistro = $_POST['fechaRegistro'];

        $tecnico->registrarse($nombre, $especializacion, $email, $telefono, $fechaRegistro);
        header("Location: index.php");
    }

    
    public function editar() {
        $tecnico = new Tecnico();
        $id = $_GET['id'];
        $datos = $tecnico->buscarPorId($id);
        include("views/tecnico/editar.php");
    }

    
    public function actualizar() {
        $tecnico = new Tecnico();
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $especializacion = $_POST['especializacion'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $fechaRegistro = $_POST['fechaRegistro'];

        $tecnico->actualizarDatos($id, $nombre, $especializacion, $email, $telefono, $fechaRegistro);
        header("Location: index.php");
    }

    
    public function borrar() {
        $tecnico = new Tecnico();
        $id = $_GET['id'];
        $tecnico->borrar($id);
        header("Location: index.php");
    }

    
    public function verReparacionesAsignadas() {
        $tecnico = new Tecnico();
        $id = $_GET['id'];
        $reparaciones = $tecnico->verReparacionesAsignadas($id);
        include("views/tecnico/reparaciones.php");
    }
}
?>

