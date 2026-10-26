<?php
require_once __DIR__ . '/../models/Proveedor.php';

class ProveedorController {
    public function index() {
        try {
            $modelProveedor = new Proveedor();
            $proveedor_unico = $modelProveedor->getAll();

            require_once __DIR__ . '/../views/proveedor/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización de proveedores: " . $e->getMessage();
            exit();
        }
    }

     public function crear() {
        try {
            $modelProveedor = new Proveedor();
            $proveedor_unico = $modelProveedor->getAll();

            require_once __DIR__ . '/../views/proveedor/crear.php';
        } catch (Exception $e) {
            echo "Error en la visualización de proveedores: " . $e->getMessage();
            exit();
        }
    }

        public function Guardar()
    {
        $idProveedor = $_POST['idProveedor'];
        $razonSocia = $_POST['razonSocial'];
        $nombreProv = $_POST['nombreProv'];
        $direccion = $_POST['direccion'];
        $telefonoProv = $_POST['telefonoProv'];

        $proveedor = new proveedor();
        $resultado = $proveedor->Guardar($idProveedor, $razonSocia, $nombreProv, $direccion, $telefonoProv);

        if ($resultado) {
            echo "Proveedor guardado correctamente";
            $this->index();
        } else {
            echo "El proveedor no se pudo guardar";
        }
    }
      public function editar(){
        $id = filter_input(INPUT_GET, 'idProveedor', FILTER_VALIDATE_INT);

        if (!$id){
            echo "ocurrio un error buscando el id";
        }
        

        $proveedor = new Proveedor();
        $proveedor=$proveedor->getById($id);

         require_once __DIR__ . '/../views/proveedor/editar.php';
    }

        public function actualizar()
    {
     $idProveedor = $_POST['idProveedor'];
        $razonSocia = $_POST['razonSocial'];
        $nombreProv = $_POST['nombreProv'];
        $direccion = $_POST['direccion'];
        $telefonoProv = $_POST['telefonoProv'];

        $proveedor = new proveedor();
        $resultado = $proveedor->actualizar($idProveedor, $razonSocia, $nombreProv, $direccion, $telefonoProv);

        if ($resultado) {
            header('Location: /Producto/index');
            exit;
        } else {
            echo "error en guardado";
        }
    }
}

