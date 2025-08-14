<?php
require_once("config/conexion.php");
require_once("views/templates/css.css");
?>

<h2>Editar Usuario</h2>

<form method="POST" action="UsuarioI.php?accion=actualizar">
    
    <input type="hidden" name="id" value="<?= htmlspecialchars($datos['idCliente']) ?>">
        
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($datos['nombre']) ?>" required><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($datos['email']) ?>" required><br>
    
    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" value="<?= htmlspecialchars($datos['telefono']) ?>" required><br>
    
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" value="<?= htmlspecialchars($datos['direccion']) ?>" required><br>

    <label for="fechaRegistro">Fecha de Registro:</label>
    <input type="date" id="fechaRegistro" name="fechaRegistro" value="<?= htmlspecialchars($datos['fechaRegistro']) ?>" required><br>
    
    <input type="submit" value="Guardar cambios">

</form>

<link rel="stylesheet" href="css.css">