<?php

return [
    "GET" => [
        "/Usuario"         => ['UsuarioController', 'index'],
        "/Usuario/crear"   => ['UsuarioController', 'crear'],
        "/usuario"         => ['UsuarioController', 'index'],

        "/Producto"        => ['ProductoController', 'index'],
        "/Producto/crear"  => ['ProductoController', 'crear'],
        "/producto"        => ['ProductoController', 'index'],

        "/proveedor"       => ['ProveedorController', 'index'],
        "/proveedor/crear" => ['ProveedorController', 'crear'],

        "/Cliente"         => ['ClienteController', 'index'],
        "/Cliente/crear"   => ['ClienteController', 'crear'],

        "/Compra"          => ['CompraController', 'index'],
        "/Compra/crear"    => ['CompraController', 'crear'],

        "/Venta"           => ['VentaController', 'index'],
        "/Venta/crear"     => ['VentaController', 'crear'],

        "/Ciudad"          => ['CiudadController', 'index'],
        "/Ciudad/crear"    => ['CiudadController', 'crear'],
    ],
    "POST" => [
        "/Producto/crear"    => ['ProductoController', 'crear'],
        "/Producto/Guardar"  => ['ProductoController', 'Guardar'],
        "/Producto/editar"   => ['ProductoController', 'editar'],
        "/Producto/eliminar" => ['ProductoController', 'eliminar'],

        "/Usuario/crear"     => ['UsuarioController', 'crear'],
        "/Usuario/Guardar"   => ['UsuarioController', 'Guardar'],
        "/Usuario/editar"    => ['UsuarioController', 'editar'],
        "/Usuario/eliminar"  => ['UsuarioController', 'eliminar'],

        "/Cliente/Guardar"   => ['ClienteController', 'Guardar'],
        "/Cliente/editar"    => ['ClienteController', 'editar'],
        "/Cliente/eliminar"  => ['ClienteController', 'eliminar'],

        "/proveedor/Guardar" => ['ProveedorController', 'Guardar'],
        "/proveedor/editar"  => ['ProveedorController', 'editar'],
        "/proveedor/eliminar"=> ['ProveedorController', 'eliminar'],

        "/Compra/Guardar"    => ['CompraController', 'Guardar'],
        "/Venta/Guardar"     => ['VentaController', 'Guardar'],
        "/Ciudad/Guardar"    => ['CiudadController', 'Guardar'],
    ]
];