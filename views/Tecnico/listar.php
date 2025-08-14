<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Lista de Técnicos</h2>
            <a href="index.php?controlador=Tecnico&accion=crear" class="btn btn-primary">
                Crear nuevo técnico
            </a>
        </div>
        
        <?php if (empty($resultados)): ?>
            <div class="alert alert-info">
                No hay técnicos registrados.
            </div>
        <?php else: ?>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Especialización</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($resultados as $t): ?>
                                <tr>
                                    <td><?= htmlspecialchars($t['idTecnico']) ?></td>
                                    <td><?= htmlspecialchars($t['nombre']) ?></td>
                                    <td><?= htmlspecialchars($t['especializacion']) ?></td>
                                    <td><?= htmlspecialchars($t['email']) ?></td>
                                    <td><?= htmlspecialchars($t['telefono']) ?></td>
                                    <td>
                                        <div class="btn-group-actions d-flex">
                                            <a href="index.php?controlador=Tecnico&accion=editar&id=<?= htmlspecialchars($t['idTecnico']) ?>" 
                                               class="btn btn-sm btn-outline-primary">
                                               Editar
                                            </a>
                                            <a href="index.php?controlador=Tecnico&accion=borrar&id=<?= htmlspecialchars($t['idTecnico']) ?>" 
                                               class="btn btn-sm btn-outline-danger"
                                               onclick="return confirm('¿Seguro que quieres eliminar a este técnico?');">
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