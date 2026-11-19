<?php
require_once __DIR__ . '/../rutas/web.php';
require_once __DIR__ . '/../app/controllers/ClienteController.php';
require_once __DIR__ . '/../app/controllers/CompraController.php';
require_once __DIR__ . '/../app/controllers/ProveedorController.php';
require_once __DIR__ . '/../app/controllers/VentaController.php';
require_once __DIR__ . '/../app/controllers/CiudadController.php';
require_once __DIR__ . '/../app/controllers/ProductoController.php';
require_once __DIR__ . '/../app/controllers/UsuarioController.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

$rutas = require dirname(__DIR__) . '/rutas/web.php';

$enrutamiento = $rutas[$method][$ruta] ?? null;

if ($enrutamiento !== null) {
    echo $enrutamiento[0] . "</br>";
    echo $enrutamiento[1] . "</br>";

    $nControlador = $enrutamiento[0];
    $nMetodo = $enrutamiento[1];

    $controlador = new $nControlador();
    $controlador->$nMetodo();
}
?>

<a href="/Usuario">Usuario</a>
<a href="/Usuario/crear">crear usuario</a>

<a href="/Producto">productos</a>
<a href="/Producto/crear">crear</a>

<a href="/proveedor">proveedor</a>
<a href="/proveedor/crear">crear proveedor</a>

<a href="/Cliente">Cliente</a>
<a href="/Cliente/crear">crear cliente</a>