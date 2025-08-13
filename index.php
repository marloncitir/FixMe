<?php
require_once("controllers/ProductoController.php");
$controller = new ProductoController();
$accion = $_GET['accion'] ?? 'index';
if ($accion == 'crear') { // NUEVO
$controller->crear();
} elseif ($accion == 'guardar') { // NUEVO
$controller->guardar();
} elseif ($accion == 'editar') {
$controller->editar();
} elseif ($accion == 'actualizar') {
$controller->actualizar();
} elseif ($accion == 'borrar') { // NUEVO
$controller->borrar();
} else {
$controller->index();
}