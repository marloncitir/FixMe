<?php
require_once("models/tecnico.php");
require_once("config/conexion.php");

class TecnicoController {

$tecnicoController = new TecnicoController($db);

    public function index() {
        $tecnico = new Tecnico($this->db);
        $resultados = $tecnico->listar();
        include("views/tecnico/listar.php");
    }
