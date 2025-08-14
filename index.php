<?php

require_once("config/conexion.php");
require_once("models/Producto.php");
require_once("models/Usuario.php");
require_once("models/Tecnico.php");
require_once("models/Reparacion.php");
require_once("controllers/ProductoController.php");
require_once("controllers/UsuarioController.php");

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