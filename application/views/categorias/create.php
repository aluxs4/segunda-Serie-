<div class="container mt-5">
    <h1>Agregar Categoría</h1>
    <form action="<?php echo site_url('categorias/store'); ?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="restriccion_tiempo">Restricción de Tiempo (minutos)</label>
            <input type="number" name="restriccion_tiempo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?php echo site_url('categorias'); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
