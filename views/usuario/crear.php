<?php
    require_once("config/conexion.php");
    require_once("views/templates/css.css");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>

<header>
    <h2>Crear Usuario</h2>
</header>

<body>
    
    <form method="POST" action="UsuarioI.php?accion=guardar">
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br>
        
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label for="fechaRegistro">Fecha de Registro:</label>
        <input type="date" id="fechaRegistro" name="fechaRegistro" required><br>
        
        <input type="submit" value="Guardar">

    </form>
    
</body>

</html>
<link rel="stylesheet" href="css.css">