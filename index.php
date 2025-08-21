<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FixMe</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #ffeef5;
            font-family: 'Segoe UI', sans-serif;
            color: #5e4b4b;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            font-size: 3em;
            color: #d36f9e;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #6e5e5e;
        }

        a.boton {
            display: inline-block;
            padding: 12px 24px;
            background-color: #f7a7c6;
            color: white;
            text-decoration: none;
            border-radius: 20px;
            font-weight: bold;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        a.boton:hover {
            background-color: #e68bb0;
        }

        footer {
            position: absolute;
            bottom: 15px;
            font-size: 0.9em;
            color: #a68a8a;
        }
    </style>
</head>
<body>

    <h1>Bienvenido al Sistema FixMe</h1>
    
</body>
</html>

<?php
require_once("config/conexion.php");
require_once("controllers/ProductoController.php");
require_once("controllers/ReparacionController.php");
require_once("controllers/TecnicoController.php");
require_once("controllers/ClienteController.php");
$productocontroller = new ProductoController();
$tecnicoontroller = new TecnicoController();
$reparacioncontroller = new ReparacionController();
$usuariocontroller = new ClienteController();

$accion = $_GET['accion'] ?? 'index';

if ($accion == 'crear') {
    $productocontroller->crear();
} elseif ($accion == 'guardar') {
    $productocontroller->guardar();
} elseif ($accion == 'editar') {
    $productocontroller->editar();
} elseif ($accion == 'actualizar') {
    $productocontroller->actualizar();
} elseif ($accion == 'borrar') {
    $productocontroller->borrar();
} else {
    $productocontroller->index();
}

if ($accion == 'crear') {
    $reparacioncontroller->crear();
} elseif ($accion == 'guardar') {
    $reparacioncontroller->guardar();
} elseif ($accion == 'editar') {
    $reparacioncontroller->editar();
} elseif ($accion == 'actualizar') {
    $reparacioncontroller->actualizar();
} elseif ($accion == 'borrar') {
    $reparacioncontroller->borrar();
} else {
    $reparacioncontroller->index();
}

if ($accion == 'crear') {
    $clientecontroller->crear();
} elseif ($accion == 'guardar') {
    $clientecontroller->guardar();
} elseif ($accion == 'editar') {
    $clientecontroller->editar();
} elseif ($accion == 'actualizar') {
    $clientecontroller->actualizar();
} elseif ($accion == 'borrar') {
    $clientecontroller->borrar();
} else {
    $clientecontroller->index();
}

if ($accion == 'crear') {
    $tecnicocontroller->crear();
} elseif ($accion == 'guardar') {
    $tecnicocontroller->guardar();
} elseif ($accion == 'editar') {
    $tecnicocontroller->editar();
} elseif ($accion == 'actualizar') {
    $tecnicocontroller->actualizar();
} elseif ($accion == 'borrar') {
    $tecnicocontroller->borrar();
} else {
    $tecnicocontroller->index();
}
?>