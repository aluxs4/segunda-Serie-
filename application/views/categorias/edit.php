<div class="container mt-5">
    <h1>Editar Categoría</h1>
    <form action="<?php echo site_url('categorias/update/'.$categoria['id']); ?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo htmlspecialchars($categoria['nombre']); ?>" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control"><?php echo htmlspecialchars($categoria['descripcion']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="restriccion_tiempo">Restricción de Tiempo (minutos)</label>
            <input type="number" name="restriccion_tiempo" class="form-control" value="<?php echo htmlspecialchars($categoria['restriccion_tiempo']); ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="<?php echo site_url('categorias'); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
