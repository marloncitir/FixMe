<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">Editar Reparación</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="index.php?controlador=Reparacion&accion=actualizar">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($datos['idReparacion']) ?>">
                    
                    <div class="mb-3">
                        <label for="idProducto" class="form-label">ID Producto</label>
                        <input type="number" class="form-control" id="idProducto" name="idProducto" value="<?= htmlspecialchars($datos['idProducto']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="idTecnico" class="form-label">ID Técnico</label>
                        <input type="number" class="form-control" id="idTecnico" name="idTecnico" value="<?= htmlspecialchars($datos['idTecnico']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
                        <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" value="<?= htmlspecialchars($datos['fechaInicio']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="fechaFin" class="form-label">Fecha de Fin</label>
                        <input type="date" class="form-control" id="fechaFin" name="fechaFin" value="<?= htmlspecialchars($datos['fechaFin']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado" value="<?= htmlspecialchars($datos['estado']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="observaciones" class="form-label">Observaciones</label>
                        <textarea class="form-control" id="observaciones" name="observaciones" rows="3"><?= htmlspecialchars($datos['observaciones']) ?></textarea>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="index.php?controlador=Reparacion" class="btn btn-secondary me-md-2">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>