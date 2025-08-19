<?php
require_once("config/conexion.php");
require_once("models/producto.php");
require_once("models/usuario.php");
require_once("models/tecnico.php");
require_once("models/reparacion.php");
require_once("controllers/ProductoController.php");
require_once("controllers/UsuarioController.php");
require_once("controllers/ReparacionController.php")
$controlador = $_GET['controlador'] ?? 'Producto';
$accion = $_GET['accion'] ?? 'index';

$nombreClase = $controlador . 'Controller';
$controller = new $nombreClase($conn);

if (method_exists($controller, $accion)) {
    $controller->$accion();
} else {
    echo "Error 404: La acción no existe.";
}

$conn->close();

?>