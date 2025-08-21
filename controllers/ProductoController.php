<?php
require_once("models/producto.php");
require_once("config/conexion.php");

class ProductoController {
   
 $ProductoController = new ProductoController($db);

    public function index() {
        $producto = new Producto();
        $resultados = $producto->listar();
        include("views/producto/listar.php");
    