<?
    require_once("config/conexion.php");
    require_once("views/templates/css.css");
?>


<!DOCTYPE html>
<html lang="en">
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
        
        Nombre: <input type="text" name="nombre"><br>
        
        Email: <input type="mail" name="email"><br>
        
        <input type="submit" value="Guardar">

    </form>
    
</body>

</html>
<link rel="stylesheet" href="css.css">
