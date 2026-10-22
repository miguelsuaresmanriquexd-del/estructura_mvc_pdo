<?php
require_once __DIR__ . '/../../config/conexion.php';

class Cliente {
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getById($id) 
    {
        try {
            $sql = "SELECT idCiudad, nDocCliente, nombreClie, telefonoClie, direccionClie, correoClie FROM Cliente WHERE nDocCliente = :id";
            $consulta = $this->connection->prepare($sql); 
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Error de ID en cliente: " . $e->getMessage();
            exit();
        }
    }

    public function getAll() 
    {
        try {
            $sql = "SELECT idCiudad, nDocCliente, nombreClie, telefonoClie, direccionClie, correoClie FROM Cliente";
            $consulta = $this->connection->prepare($sql); 
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener todos los clientes: " . $e->getMessage();
            exit();
        }
    }

    public function Guardar($idCiudad, $nDocCliente, $nombreClie, $telefonoClie, $direccionClie, $correoClie)
    {
        try {
            $sql = "INSERT INTO Cliente (nDocCliente, nombreClie, telefonoClie, direccionClie, correoClie, idCiudad) 
                    VALUES (:nDocCliente, :nombreClie, :telefonoClie, :direccionClie, :correoClie, :idCiudad)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":nDocCliente", $nDocCliente);
            $consulta->bindParam(":nombreClie", $nombreClie);
            $consulta->bindParam(":telefonoClie", $telefonoClie);
            $consulta->bindParam(":direccionClie", $direccionClie);
            $consulta->bindParam(":correoClie", $correoClie);
             $consulta->bindParam(":idCiudad", $idCiudad);
            return $consulta->execute();
        } catch (PDOException $e) {
            echo "Error al guardar el cliente " . $nombreClie . " ERROR SQL: " . $e->getMessage();
            return false;
        }
    }
}
