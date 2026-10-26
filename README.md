# Futuro Inversión - Sistema MVC en PHP y MySQL

Plataforma web para la gestión de portafolios de inversión en múltiples activos (criptomonedas, activos comerciales y trading online).

## Estructura del Proyecto
- `config/Database.php`: Conexión Singleton con PDO.
- `app/models/`: Clases Modelo (`Usuario.php`, `Activo.php`, `Portafolio.php`, `Transaccion.php`).
- `app/controllers/`: Clases Controlador (`DashboardController`, `UsuarioController`, `ActivoController`, `PortafolioController`, `TransaccionController`).
- `app/views/`: Vistas divididas por módulos con `header.php` y `footer.php`.
- `public/`: Punto de entrada único (`index.php`) y archivos de estilos.
- `database.sql`: Script SQL listo para importar en phpMyAdmin.

## trabajo 19/10/2026
se realizo algo de editar y un formulario dentro de eso.

## trabajo 26/10/2026
se realizo el metodo actualizar y eliminar en las tablas  creadas del proyecto