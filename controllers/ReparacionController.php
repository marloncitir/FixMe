<?php
require_once("models/reparacion.php");
require_once("config/conexion.php");

class ReparacionController {
   
 $reparacionController = new ReparacionController($db);

    public function index() {
        $reparacion = new Reparacion();
        $resultados = $reparacion->listar();
        include("views/reparacion/listar.php");
    }
    
?>

   
