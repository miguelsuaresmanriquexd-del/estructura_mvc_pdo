<h1>Editar productos</h1>
<form action="/producto/actualizar" method="POST">
    <input type="hidden" name="idProducto" value="<?= $producto->idProducto ?? '' ?>">
    
    <label for="nombre">nombre:</label>
    <input type="text" name="nombreProd" value="<?= $producto->nombreProd ?? '' ?>">
    
    <label for="precio">Precio:</label>
    <input type="text" name="precioProduc" value="<?= $producto->precioProduc ?? '' ?>">
    
    <label for="stock">Stock Disponible:</label>
    <input type="text" name="stock" value="<?= $producto->stock ?? '' ?>">
    
    <button type="submit">Guardar cambios</button>
</form>
