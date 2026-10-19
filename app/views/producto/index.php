<?php if(!empty($productos_lista)): ?>
<h1>Información del Producto / Activo</h1>
<table border="1">
    <tr>
        <th>ID Producto</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock Disponible</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($productos_lista as $prod): ?>
    <tr>
        <td><?= $prod['idProducto'] ?></td>
        <td><?= $prod['nombreProd'] ?></td>
        <td>$<?= number_format($prod['precioProduc'], 2) ?></td>
        <td><?= $prod['stock'] ?></td>
        <td><a href="/producto/editar?idProducto="<?=$prod['idProducto']?></a>editar</td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró la información del producto</p>
<?php endif; ?>
