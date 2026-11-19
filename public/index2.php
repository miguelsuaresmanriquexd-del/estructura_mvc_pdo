<?php

require_once __DIR__ . '/../app/controllers/UsuarioController.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

$controller = new UsuarioController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/ClienteController.php';

$controller = new ClienteController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/CompraController.php';
$controller = new CompraController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/DescripcompraController.php';

$controller = new DescripcompraController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/DescripventaController.php';

$controller = new DescripventaController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/PermisoController.php';

$controller = new PermisoController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/ProveedorController.php';

$controller = new ProveedorController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/RolController.php';

$controller = new RolController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/RolPermisosController.php';

$controller = new RolPermisosController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/VentaController.php';

$controller = new VentaController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/CiudadController.php';

$controller = new CiudadController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/ProductoController.php';
$controller = new ProductoController();
//$controller->index();
?>

<?php
switch ($ruta) {
    case "/producto/editar";
        if ($method === "GET") {
            $productoC = new ProductoController();
            $productoC->editar();
        }
        break;
    case "/producto/actualizar";
        if ($method === "POST") {
            $productoC = new ProductoController();
            $productoC->actualizar();
        }
        break;
    case "/Producto/crear";
        if ($method === "GET") {
            $productoC = new ProductoController();
            $productoC->crear();
        }
        break;
    case "/producto";
        if ($method === "POST") {
            $productoC = new ProductoController();
            $productoC->Guardar();
        }
        break;
    case "/Producto";
        if ($method === "GET") {
            $productoC = new ProductoController();
            $productoC->index();
        }
        break;
    case "/proveedor/actualizar";
        if ($method === "POST") {
            $ProveedorC = new ProveedorController();
            $ProveedorC->actualizar();
        }
        break;
    case "/proveedor/editar";
        if ($method === "GET") {
            $ProveedorC = new ProveedorController();
            $ProveedorC->editar();
        }
        break;
    case "/proveedor/crear";
        if ($method === "GET") {
            $ProveedorC = new ProveedorController();
            $ProveedorC->crear();
        }
        break;
    case "/proveedor";
        if ($method === "POST") {
            $ProveedorC = new ProveedorController();
            $ProveedorC->Guardar();
        }
        break;
    case "proveedor";
        if ($method === "GET") {
            $ProveedorC = new ProveedorController();
            $ProveedorC->index();
        }
        break;
    case "/usuario/editar";
        if ($method === "GET") {
            $UsuarioC = new UsuarioController();
            $UsuarioC->editar();
        }
        break;
    case "/Usuario/crear";
        if ($method === "GET") {
            $UsuarioC = new UsuarioController();
            $UsuarioC->crear();
        }
        break;
    case "/usuario";
        if ($method === "POST") {
            $UsuarioC = new UsuarioController();
            $UsuarioC->Guardar();
        }
        break;
    case "/Usuario";
        if ($method === "GET") {
            $UsuarioC = new UsuarioController();
            $UsuarioC->index();
        }
        break;
    case "/cliente/editar";
        if ($method === "GET") {
            $ClienteC = new ClienteController();
            $ClienteC->editar();
        }
        break;
    case "/Cliente/crear";
        if ($method === "GET") {
            $ClienteC = new ClienteController();
            $ClienteC->crear();
        }
        break;
    case "/cliente";
        if ($method === "POST") {
            $ClienteC = new ClienteController();
            $ClienteC->Guardar();
        }
        break;
    case "/Cliente";
        if ($method === "GET") {
            $ClienteC = new ClienteController();
            $ClienteC->index();
        }
        break;
    case "/Compra";
        if ($method === "GET") {
            $controller = new CompraController();
            $controller->index();
        }
        break;
    case "/Venta";
        if ($method === "GET") {
            $controller = new VentaController();
            $controller->index();
        }
        break;
}


if ($ruta === "/usuario/editar" && $method === "GET") {
    $UsuarioC = new UsuarioController();
    $UsuarioC->editar();
}
if ($ruta === "/cliente/editar" && $method === "GET") {
    $ClienteC = new ClienteController();
    $ClienteC->editar();
}

if ($method === "GET" && $uri === "/Usuario/crear") {
    $UsuarioC = new UsuarioController();
    $UsuarioC->crear();
}

if ($method === "POST" && $uri === "/usuario") {
    $controller = new UsuarioController();
    $controller->Guardar();
}


?>

<?php

if ($method === 'GET' && $uri === "/Usuario") {

    $controller = new UsuarioController();

    $controller->index();
}

?>

<a href="/Compra">Compra</a>

<?php
if ($method === 'GET' && $uri === "/Compra") {

    $controller = new CompraController();
    $controller->index();
}
?>

<a href="/Venta">Venta</a>

<?php
if ($method === 'GET' && $uri === "/Venta") {

    $controller = new VentaController();
    $controller->index();
}

?>

<a href="/Ciudad">Ciudad</a>

<?php
if ($method === 'GET' && $uri === "/Ciudad") {

    $controller = new CiudadController();
    $controller->index();
}

?>
<?php
if ($method === "GET" && $uri === "/proveedor/crear") {
    $ProveedorC = new ProveedorController();
    $ProveedorC->crear();
}

if ($method === "POST" && $uri === "/proveedor") {
    $controller = new ProveedorController();
    $controller->Guardar();
}
?>

<?php
if ($method === 'GET' && $uri === "/proveedor") {

    $controller = new ProveedorController();
    $controller->index();
}

?>


<?php
if ($method === "GET" && $uri === "/Cliente/crear") {
    $ClienteC = new ClienteController();
    $ClienteC->crear();
}

if ($method === "POST" && $uri === "/cliente") {
    $controller = new ClienteController();
    $controller->Guardar();
}
?>

<?php
if ($method === 'GET' && $uri === "/Cliente") {
    $controller = new ClienteController();
    $controller->index();
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