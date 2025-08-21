<?php
require_once("models/producto.php");
require_once("config/conexion.php");

class ProductoController {

   
    public function index() {
        $producto = new Producto();
        $resultados = $producto->listar();
        include("views/producto/listar.php");
    }

   
    public function crear() {
        include("views/producto/crear.php");
    }

   
    public function guardar() {
        $producto = new Producto();
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $descripcion = $_POST['descripcion'];
        $fechaIngreso = $_POST['fechaIngreso'];
        $estado = $_POST['estado'];

        $producto->registrarProducto($modelo, $marca, $descripcion, $fechaIngreso, $estado);
        header("Location: index.php");
    }

 
    public function editar() {
        $producto = new Producto();
        $id = $_GET['id'];
        $datos = $producto->buscarPorId($id);
        include("views/producto/editar.php");
    }

  
    public function actualizar() {
        $producto = new Producto();
        $id = $_POST['id'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $descripcion = $_POST['descripcion'];
        $fechaIngreso = $_POST['fechaIngreso'];
        $estado = $_POST['estado'];

        $producto->actualizarEstado($id, $estado);
        header("Location: index.php");
    }

  
    public function borrar() {
        $producto = new Producto();
        $id = $_GET['id'];
        $producto->borrar($id);
        header("Location: index.php");
    }
}
?>
