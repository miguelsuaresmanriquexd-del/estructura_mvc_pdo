<?php
require_once __DIR__ . '/../../config/conexion.php';

class Producto {
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM producto WHERE idProducto = :id";
            $consulta = $this->connection->prepare($sql); 
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Error de ID en producto: " . $e->getMessage();
            exit();
        }
    }
    

    public function guardar($nombreProd, $precioProduc, $stock, $idProducto){
        try {
            $sql="INSERT INTO producto (nombreProd, precioProduc, stock, idProducto)
            VALUES (:nombreProd, :precioProduc, :stock, :idProducto)
            ";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindparam(":nombreProd", $nombreProd);
            $consulta->bindparam(":precioProduc", $precioProduc);
            $consulta->bindparam(":stock", $stock);
            $consulta->bindparam(":idProducto", $idProducto);

            return $consulta->execute();
            
        } catch (PDOException $e) {
            echo "Error al guardar el producto" . $nombreProd . "ERROR SQL:" . $e->getMessage();
            return false;
        }
    }

    
    public function getAll() {
        try {
            $sql = "SELECT * FROM producto";
            $consulta = $this->connection->prepare($sql);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener todos los productos: " . $e->getMessage();
            return [];
        }
    }

 public function actualizar($nombreProd, $precioProduc, $stock, $idProducto){
        try {
            $sql = "UPDATE producto SET
                    nombreProd = :nombreProd,
                    precioProduc = :precioProduc,
                    stock = :stock 
                    WHERE idProducto = :idProducto";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":nombreProd", $nombreProd);
            $consulta->bindParam(":precioProduc", $precioProduc);
            $consulta->bindParam(":stock", $stock);
            $consulta->bindParam(":idProducto", $idProducto);

            return $consulta->execute();
        } catch (PDOException $e) {
            echo "Error al actualizar el producto: " . $e->getMessage();
            return false;
        }
    }

    public function eliminar($id){
        $sql = "DELETE FROM producto WHERE idProducto = ?";
        $consulta = $this->connection->prepare($sql);
        return $consulta->execute([$id]);
    }
}