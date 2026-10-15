<?php if(!empty($proveedor_unico)): ?>
<h1>Información del Proveedor</h1>
<table border="1">
    <tr>
        <th>ID Proveedor</th>
        <th>Razón Social</th>
        <th>Nombre de Contacto</th>
        <th>Dirección</th>
        <th>Teléfono</th>
    </tr>
    <?php foreach ($proveedor_unico as $prov): ?>
    <tr>
        <td><?= $prov['idProveedor'] ?></td>
        <td><?= $prov['razonSocial'] ?></td>
        <td><?= $prov['nombreProv'] ?></td>
        <td><?= $prov['direccion'] ?></td>
        <td><?= $prov['telefonoProv'] ?></td>
    </tr>
     <?php endforeach; ?>
</table>
<?php else: ?>
    <p style="color:red;"></p>
<?php endif; ?>
