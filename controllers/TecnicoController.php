<?php
class TecnicoController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        $tecnico = new Tecnico($this->db);
        $resultados = $tecnico->listar();
        include("views/tecnico/listar.php");
    }

    public function crear() {
        include("views/tecnico/crear.php");
    }

    public function guardar() {
        $tecnico = new Tecnico($this->db);
        $nombre = $_POST['nombre'];
        $especializacion = $_POST['especializacion'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $fechaRegistro = $_POST['fechaRegistro'];

        $tecnico->crear($nombre, $especializacion, $email, $telefono, $fechaRegistro);
        header("Location: index.php?controlador=Tecnico");
    }

    public function editar() {
        $tecnico = new Tecnico($this->db);
        $id = $_GET['id'];
        $datos = $tecnico->buscarPorId($id);
        include("views/tecnico/editar.php");
    }

    public function actualizar() {
        $tecnico = new Tecnico($this->db);
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $especializacion = $_POST['especializacion'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $fechaRegistro = $_POST['fechaRegistro'];

        $tecnico->actualizar($id, $nombre, $especializacion, $email, $telefono, $fechaRegistro);
        header("Location: index.php?controlador=Tecnico");
    }

    public function borrar() {
        $tecnico = new Tecnico($this->db);
        $id = $_GET['id'];
        $tecnico->borrar($id);
        header("Location: index.php?controlador=Tecnico");
    }
}