<?php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {
    
    public function crear() {
        require_once __DIR__ . '/../views/producto/crear.php';
    } 
    
     public function index() {
        try {

            $modelProducto = new Producto();

            
            $productos_lista = $modelProducto->getAll();

            require_once __DIR__ . '/../views/producto/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización de productos: " . $e->getMessage();
            exit();
        }
    }

    public function Guardar(){
        $nombreProd=$_POST['nombreProd'];
        $precioProduc=$_POST['precioProduc'];
        $stock=$_POST['stock'];
        $idProducto=$_POST['idProducto'];

        $producto= new Producto();
        $resultado= $producto->guardar($nombreProd, $precioProduc, $stock, $idProducto);

        if ($resultado){
            echo "producto guardado correctamente";
            $this->index();
        }else{
            echo "el producto no se pudo guardar";
        }
    }
    public function editar(){
        $id = filter_input(INPUT_GET, 'idProducto', FILTER_VALIDATE_INT);

        if (!$id){
            echo "ocurrio un error buscando el id";
        }
        

        $producto = new Producto();
        $producto=$producto->getById($id);

         require_once __DIR__ . '/../views/producto/editar.php';
    }
} 