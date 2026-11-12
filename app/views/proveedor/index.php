<?php if(!empty($proveedor_unico)): ?>
<h1>Información del Proveedor</h1>
<table border="1">
    <tr>
        <th>ID Proveedor</th>
        <th>Razón Social</th>
        <th>Nombre de Contacto</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($proveedor_unico as $prov): ?>
    <tr>
        <td><?= $prov['idProveedor'] ?></td>
        <td><?= $prov['razonSocial'] ?></td>
        <td><?= $prov['nombreProv'] ?></td>
        <td><?= $prov['direccion'] ?></td>
        <td><?= $prov['telefonoProv'] ?></td>
        <td>
            <a href="/proveedor/editar?idProveedor=<?= $prov['idProveedor'] ?>">Editar</a> | 
            <a href="/proveedor/eliminar?idProveedor=<?= $prov['idProveedor'] ?>" onclick="return confirm('¿seguro que deseas eliminar este proveedor?')">Eliminar</a>
        </td>
    </tr>
     <?php endforeach; ?>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró información del proveedor</p>
<?php endif; ?>