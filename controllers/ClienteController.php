<?php
require_once("models/cliente.php");
require_once("config/conexion.php");

class ClienteController {

$usuarioController = new ClienteController($db);

 public function index() {
        $cliente = new Cliente();
        $resultados = $cliente->listar();
        include("views/cliente/listar.php");
 
    
    
