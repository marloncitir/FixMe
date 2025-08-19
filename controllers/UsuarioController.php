<?php
class UsuarioController {
public function index() {
$usuario = new Usuario();
$resultados = $usuario->listar();
include("views/usuario/listar.php");
}
public function crear() { // NUEVO
include("views/usuario/crear.php");
}
public function editar() {
$usuario = new Usuario();
$id = $_GET['id'];
$datos = $usuario->buscarPorId($id);
include("views/usuario/editar.php");
}

}
