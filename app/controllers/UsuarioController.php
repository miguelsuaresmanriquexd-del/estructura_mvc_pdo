<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController
{
        public function crear()
    {
        try {
            $modelusuario = new Usuario();
            
            
            $usuarios = $modelusuario->getAll();

            require_once __DIR__ . '/../views/usuario/crear.php';

        } catch (Exception $e) {
            echo "Error en la visualización de usuarios: " . $e->getMessage();
            exit();
        }
    }

    public function index()
    {
        try {
            $modelusuario = new Usuario();
            
            $usuarios = $modelusuario->getAll();

            require_once __DIR__ . '/../views/usuario/index.php';

        } catch (Exception $e) {
            echo "Error en la visualización de usuarios: " . $e->getMessage();
            exit();
        }
    }


    public function Guardar(){
        $nombreUsu=$_POST['nombreUsu'];
        $apellidoUsu=$_POST['apellidoUsu'];
        $edadUsuario=$_POST['edadUsuario'];
        $fechaNacim=$_POST['fechaNacim'];
        $idDocumento=$_POST['idDocumento'];
        $usuario = new Usuario();
        $resultado = $usuario->Guardar($nombreUsu, $apellidoUsu, $edadUsuario, $fechaNacim, $idDocumento);

        if ($resultado){
            echo "usuario guardado correctamente";
            $this->index();
        }else{
            echo "el usuario no se pudo guardar";
        }
    }

      public function editar(){
        $id = filter_input(INPUT_GET, 'idDocumento', FILTER_VALIDATE_INT);

        if (!$id){
            echo "ocurrio un error buscando el id";
        }
        

        $usuario = new Usuario();
        $usuario=$usuario->getById($id);

         require_once __DIR__ . '/../views/usuario/editar.php';
    }
}
