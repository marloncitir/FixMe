<?php
require_once("config/conexion.php");
require_once("views/templates/css.css");
?>

<link rel="stylesheet" href="css.css">  

<header>
    <h2>Lista de Usuarios</h2>
    <a href="Index.php">Productos</a>
</header>

<br>
<a href="UsuarioI.php?accion=crear">Crear nuevo Usuario</a>

<?php if (empty($resultados)): ?>
    <p>No hay usuarios registrados.</p>
<?php else: ?>
    <?php foreach ($resultados as $p): ?>
    <p>
        <?= htmlspecialchars($p['nombre']) ?> - <?= htmlspecialchars($p['email']) ?> - <?= htmlspecialchars($p['telefono']) ?> - <?= htmlspecialchars($p['direccion']) ?> - <?= htmlspecialchars($p['fechaRegistro']) ?>

        <a href="UsuarioI.php?accion=editar&id=<?= htmlspecialchars($p['idCliente']) ?>">Editar</a>

        <a href="UsuarioI.php?accion=borrar&id=<?= htmlspecialchars($p['idCliente']) ?>" onclick="return confirm('¿Seguro que quieres borrar este usuario?');">Borrar</a>
    </p>
    <?php endforeach; ?>
<?php endif; ?>