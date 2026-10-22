<h1>Editar productos</h1>
<form action="/producto/editar" method="POST">
    <input type="hidden" name="id" value="<?=$producto->idProducto ?>">
    <label for="nombre">nombre:</label>
    <input type="text" name="nombre" value="<?= $producto->nombreProd ?>">
    <label for="precio">Precio:</label>
    <input type="text" name="precio" value="<?= $producto->precioProduc ?>">
    <label for="stock">Stock Disponible:</label>
    <input type="text" name="stock" value="<?= $producto->stock ?>">
    <button type="submit">Guardar cambios</button>
</form>
