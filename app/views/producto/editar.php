<h1>Editar productos</h1>
<form action="/producto/editar" method="POST">
    <input type="hidden" name="id" value="<?=$producto['idProducto'] ?>">
    <label for="nombre">nombre:</label>
    <input type="text" name="nombre" value="<?= $producto->nombre?>">
    <label for="precio">Precio:</label>
    <input type="text" name="precio" value="<?= $prod->precioProduc?>">
    <label for="stock">Stock Disponible:</label>
    <input type="text" name="stock" value="<?= $prod->stock?>">
    <button type="submit">Guardar cambios</button>
</form>
