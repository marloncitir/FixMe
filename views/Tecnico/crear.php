<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">Crear Nuevo Técnico</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="index.php?controlador=Tecnico&accion=guardar">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="especializacion" class="form-label">Especialización</label>
                        <input type="text" class="form-control" id="especializacion" name="especializacion" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <div class="mb-3">
                        <label for="fechaRegistro" class="form-label">Fecha de Registro</label>
                        <input type="date" class="form-control" id="fechaRegistro" name="fechaRegistro" required>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="index.php?controlador=Tecnico" class="btn btn-secondary me-md-2">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar Técnico</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>