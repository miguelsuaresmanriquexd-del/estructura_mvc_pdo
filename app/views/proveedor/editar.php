<h1>Editar proveedor</h1>
<form action="/proveedor/editar" method="POST">
    <input type="hidden" name="id" value="<?=$proveedor ['idProveedor'] ?>">
    <label for="razonSocial">nombre:</label>
    <input type="text" name="razonSocial" value="<?= $proveedor ['razonSocial'] ?>">
    <label for="nombreProv">nombreProv:</label>
    <input type="text" name="nombreProv" value="<?= $proveedor ['nombreProv'] ?>">
    <label for="direccion">Direccion:</label>
    <input type="text" name="direccion" value="<?= $proveedor ['direccion'] ?>">
    <label for="telefonoProv">telefono del proveedor:</label>
    <input type="number" name="telefonoProv" value="<?= $proveedor ['telefonoProv'] ?>">
    <button type="submit">Guardar cambios</button>
</form>
