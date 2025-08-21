<?php
require_once("config/cliente.php");
require_once("config/conexion.php");

class ClienteController {

    public function index() {
        $cliente = new Cliente();
        $resultados = $cliente->consultarClientes();
        include("views/cliente/listar.php");
    }


    public function crear() {
        include("views/cliente/crear.php");
    }


    public function guardar() {
        $cliente = new Cliente();
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $fechaRegistro = $_POST['fechaRegistro'];

        $cliente->registrarse($nombre, $email, $telefono, $direccion, $fechaRegistro);
        header("Location: index.php");
    }

    
    public function editar() {
        $cliente = new Cliente();
        $id = $_GET['id'];
        $datos = $cliente->obtenerCliente($id);
        include("views/cliente/editar.php");
    }


    public function actualizar() {
        $cliente = new Cliente();
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $fechaRegistro = $_POST['fechaRegistro'];

        $cliente->actualizarDatos($id, $nombre, $email, $telefono, $direccion, $fechaRegistro);
        header("Location: index.php");
    }


    public function borrar() {
        $cliente = new Cliente();
        $id = $_GET['id'];
        $cliente->borrar($id);
        header("Location: index.php");
    }
}
?>

    
