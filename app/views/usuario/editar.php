<h1>Editar usuarios</h1>
<form action="/usuario/editar" method="POST">
    <input type="hidden" name="idDocumento" value="<?=$usuario ['idDocumento'] ?>">
    <label for="nombreUsu">nombre:</label>
    <input type="text" name="nombreUsu" value="<?= $usuario ['nombreUsu'] ?>">
    <label for="apellidoUsu">Apellido:</label>
    <input type="text" name="apellidoUsu" value="<?= $usuario ['apellidoUsu'] ?>">
    <label for="edadUsuario">Edad del usuario:</label>
    <input type="number" name="edadUsuario" value="<?= $usuario ['edadUsuario'] ?>">
    <label for="fechaNacim">fechaNacimiento</label>
    <input type="number" name="fechaNacim" value="<?= $usuario ['fechaNacim'] ?>">
    <button type="submit">Guardar cambios</button>
</form>
