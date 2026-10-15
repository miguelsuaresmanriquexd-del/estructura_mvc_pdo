<form action="/proveedor" method="POST">
    <div>
        <label for="idProveedor">NIT / ID Proveedor:</label>
        <input type="text" id="idProveedor" name="idProveedor" required>
    </div>
    <div>
        <label for="nombreProv">Nombre:</label>
        <input type="text" id="nombreProv" name="nombreProv" required>
    </div>
    <div>
        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion" required>
    </div>
    <div>
        <label for="telefonoProv">Telefono:</label>
        <input type="number" id="telefonoProv" name="telefonoProv" required>
    </div>
    <div>
        <label for="razonSocial">Razon:</label>
        <input type="text" id="razonSocial" name="razonSocial" required>
    </div>
    <button type="submit">Guardar</button>
</form>
