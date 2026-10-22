<h1>Editar cliente</h1>
<form action="/cliente/editar" method="POST">
    <input type="hidden" name="idCiudad" value="<?= $cliente->idCiudad ?>">
    <label for="nDocCliente">nDocCliente:</label>
    <input type="number" name="nDocCliente" value="<?= $cliente->nDocCliente ?>">
    <label for="nombreClie">nombreClie:</label>
    <input type="text" name="nombreClie" value="<?= $cliente->nombreClie ?>">
    <label for="telefonoClie">telefonoClie:</label>
    <input type="number" name="telefonoClie" value="<?= $cliente->telefonoClie ?>">
    <label for="direccionClie">direccionClie:</label>
    <input type="text" name="direccionClie" value="<?= $cliente->direccionClie ?>">
    <label for="correoClie">correoClie:</label>
    <input type="text" name="correoClie" value="<?= $cliente->correoClie ?>">
    <button type="submit">Guardar cambios</button>
</form>
