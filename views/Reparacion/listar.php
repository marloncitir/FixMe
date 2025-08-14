<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Lista de Reparaciones</h2>
            <a href="index.php?controlador=Reparacion&accion=crear" class="btn btn-primary">
                Crear nueva reparación
            </a>
        </div>
        
        <?php if (empty($resultados)): ?>
            <div class="alert alert-info">
                No hay reparaciones registradas.
            </div>
        <?php else: ?>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID Producto</th>
                                    <th>ID Técnico</th>
                                    <th>Fecha de Inicio</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($resultados as $r): ?>
                                <tr>
                                    <td><?= htmlspecialchars($r['idReparacion']) ?></td>
                                    <td><?= htmlspecialchars($r['idProducto']) ?></td>
                                    <td><?= htmlspecialchars($r['idTecnico']) ?></td>
                                    <td><?= htmlspecialchars($r['fechaInicio']) ?></td>
                                    <td><?= htmlspecialchars($r['estado']) ?></td>
                                    <td>
                                        <div class="btn-group-actions d-flex">
                                            <a href="index.php?controlador=Reparacion&accion=editar&id=<?= htmlspecialchars($r['idReparacion']) ?>" 
                                               class="btn btn-sm btn-outline-primary">
                                               Editar
                                            </a>
                                            <a href="index.php?controlador=Reparacion&accion=borrar&id=<?= htmlspecialchars($r['idReparacion']) ?>" 
                                               class="btn btn-sm btn-outline-danger"
                                               onclick="return confirm('¿Seguro que quieres eliminar esta reparación?');">
                                               Borrar
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>