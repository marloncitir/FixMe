<?
require_once("config/conexion.php");
require_once("views/templates/css.css");
?>
<link rel="stylesheet" href="css.css">

<h2>Editar Usuario</h2>

<form method="POST" action="UsuarioI.php?accion=actualizar">
    
    <input type="hidden" name="id" value="<?= $datos['id'] ?>">
        
    Nombre: <input type="text" name="nombre" value="<?= $datos['nombre'] ?>"><br>
        
    Email: <input type="mail" name="email" value="<?= $datos['email'] ?>"><br>
       
    <input type="submit" value="Guardar cambios">

</form>