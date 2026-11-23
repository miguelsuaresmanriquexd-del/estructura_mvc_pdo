
<?php

echo "hola JSON";

echo "<h1>TALLER MOMENTO 2 - PHP Y JSON</h1>";

echo "<h2>1. De PHP a JSON</h2>";

$categoria = [
    "id_categoria" => 101,
    "nombre_categoria" => "Accesorios de Computador",
    "productos" => [
        [
            "id" => 1,
            "nombre" => "Mouse Óptico",
            "precio" => 35000,
            "disponible" => true
        ],
        [
            "id" => 2,
            "nombre" => "Teclado Mecánico",
            "precio" => 120000,
            "disponible" => true
        ],
        [
            "id" => 3,
            "nombre" => "Diadema Gamer",
            "precio" => 95000,
            "disponible" => false
        ]
    ]
];

$json_categoria = json_encode(
    $categoria,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);

echo "<pre>";
echo $json_categoria;
echo "</pre>";

$productos = [
    [
        "id" => 1,
        "nombre" => "Mouse inalámbrico",
        "precio" => 35000,
        "stock" => 12,
        "disponible" => true
    ],
    [
        "id" => 2,
        "nombre" => "Teclado mecánico",
        "precio" => 165000,
        "stock" => 8,
        "disponible" => true
    ],
    [
        "id" => 3,
        "nombre" => "Monitor de 24 pulgadas",
        "precio" => 780000,
        "stock" => 6,
        "disponible" => true
    ]
];

$productos[] = [
    "id" => 4,
    "nombre" => "Cable USB-C",
    "precio" => 25000,
    "stock" => 30,
    "disponible" => true
];

$json = json_encode(
    $productos,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);

echo "<h3>De PHP a JSON Actividad 2</h3>";

echo "<pre>";
echo $json;
echo "</pre>";


echo "<h2>2. De JSON a PHP</h2>";

$json_archivo = file_get_contents(__DIR__ . "/productos.json");

$datos = json_decode($json_archivo, true);

if ($datos === null) {
    die("Error al leer el archivo JSON");
}

echo "<h3>Lista de productos</h3>";

foreach ($datos as $producto) {

    echo "Nombre: " . $producto["nombre"] . "<br>";
    echo "Precio: $" .
        number_format($producto["precio"], 0, ",", ".") . "<br><br>";

}

echo "<h3>Productos con precio superior a $100.000</h3>";

foreach ($datos as $producto) {

    if ($producto["precio"] > 100000) {

        echo "Nombre: " . $producto["nombre"] . "<br>";
        echo "Precio: $" .
            number_format($producto["precio"], 0, ",", ".") . "<br><br>";

    }

}


echo "<h2>3. Modificar y convertir información</h2>";

$id_buscar = 2;

$nuevo_precio = 180000;

$encontrado = false;

foreach ($datos as $indice => $producto) {

    if ($producto["id"] == $id_buscar) {

        echo "Producto encontrado: " . $producto["nombre"] . "<br>";

        echo "Precio original: $" .
            number_format($producto["precio"], 0, ",", ".") . "<br>";

        $datos[$indice]["precio"] = $nuevo_precio;

        echo "Nuevo precio: $" .
            number_format($nuevo_precio, 0, ",", ".") . "<br><br>";

        $encontrado = true;

        break;

    }

}

if ($encontrado) {

    $nuevo_json = json_encode(
        $datos,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    echo "<h3>Información actualizada en JSON</h3>";

    echo "<pre>";
    echo $nuevo_json;
    echo "</pre>";

} else {

    echo "No se encontró el producto con ID " . $id_buscar;

}
