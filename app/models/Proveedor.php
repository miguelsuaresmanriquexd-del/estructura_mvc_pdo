<?php
require_once __DIR__ . '/../../config/conexion.php';

class Proveedor {
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getById($id) {
        try {
            $sql = "SELECT idProveedor, razonSocial, nombreProv, direccion, telefonoProv FROM proveedor WHERE idProveedor = :id";
            $consulta = $this->connection->prepare($sql); 
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error de ID en proveedor: " . $e->getMessage();
            exit();
        }
    }

     public function getAll() 
    {
        try {
            $sql = "SELECT idProveedor, razonSocial, nombreProv, direccion, telefonoProv FROM proveedor";
            $consulta = $this->connection->prepare($sql); 
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener todos los proveedores: " . $e->getMessage();
            exit();
        }
    }

    public function Guardar($idProveedor, $razonSocial, $nombreProv, $direccion, $telefonoProv)
    {
        try {
            $sql = "INSERT INTO proveedor (idProveedor, razonSocial, nombreProv, direccion, telefonoProv) 
                    VALUES (:idProveedor, :razonSocial, :nombreProv, :direccion, :telefonoProv)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":idProveedor", $idProveedor);
            $consulta->bindParam(":razonSocial", $razonSocial);
            $consulta->bindParam(":nombreProv", $nombreProv);
            $consulta->bindParam(":direccion", $direccion);
            $consulta->bindParam(":telefonoProv", $telefonoProv);
            return $consulta->execute();
        } catch (PDOException $e) {
            echo "Error al guardar el cliente " . $nombreProv . " ERROR SQL: " . $e->getMessage();
            return false;
        }
    }
}
