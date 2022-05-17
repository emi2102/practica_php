<?php
    require_once("modelo/index.php");

    class ModeloController{
        private $model;
        public function __construct(){
            $this->model=new Modelo();
        }
        
        // mostrar
        static function index(){
            $datos=new Modelo();
            $dato=$datos->mostrar("usuario","1");
            require_once("vista/index.php");
        }

        // NUEVO
        static function nuevo(){
           require_once("vista/nuevo.php");
        }

        // Guardar
        static function guardar(){
            $nombre=$_REQUEST['nombre'];
            $apellido=$_REQUEST['apellido'];
             $correo=$_REQUEST['correo'];
            $n_usuario=$_REQUEST['n_usuario'];
            $contrasenia=$_REQUEST['contrasenia'];
            $data="'".$nombre."','".$apellido."','".$correo."','".$n_usuario."','".$contrasenia."'";
            $usuario=new Modelo();
            if($usuario->validar_User_existente("usuario","n_usuario='".$n_usuario."'")){
              header('location:'.ModeloController::nuevo());
              echo "<script>alert('el nombre_usuario: $n_usuario ya no esta disponible');</script>";
            }else{
              $dato=$usuario->insertar("usuario",$data);
               header('location:'.ModeloController::iniciar());
            }
         }

          // editar
        static function editar(){
            $id=$_REQUEST['id'];
            $datos=new Modelo();
            $dato=$datos->mostrar("usuario","id=".$id);
            require_once("vista/editar.php");
         }
 
         // actualizar
         static function actualizar(){
            $id=$_REQUEST['id'];
            $nombre=$_REQUEST['nombre'];
            $apellido=$_REQUEST['apellido'];
            $correo=$_REQUEST['correo'];
            $n_usuario=$_REQUEST['n_usuario'];
            $contrasenia=$_REQUEST['contrasenia'];
            $data="nombre='".$nombre."',apellido='".$apellido."',correo='".$correo."',n_usuario='".$n_usuario."',contrasenia='".$contrasenia."'";
             $datos=new Modelo();
             if($datos->validar_User_existente_Edit("usuario","n_usuario='".$n_usuario."'","id!=".$id)){
               header('location:'.ModeloController::editar());
                echo "<script>alert('El nombre_usuario: $n_usuario ya no esta disponible');</script>";
             }
             else{
              $dato=$datos->actualizar("usuario",$data,"id=".$id);
              header('location:'.ModeloController::index());
             }
          }
          static function iniciar(){
            require_once("vista/login.php");

          }
          static function login(){
            $usuario=$_REQUEST['n_usuario'];
            $contrasenia=$_REQUEST['contrasenia'];
             $datos=new Modelo();
             $data="n_usuario='".$usuario."' AND contrasenia='".$contrasenia."'";
             $dato=$datos->login("usuario",$data);
            if($dato==true){
                header('location:'.ModeloController::index());
            }
            else{
              echo "<script>alert('la contraseña/nombre de usuario no coinciden');</script>";
             header('location:'.ModeloController::iniciar());
            }
          }
 
        // Eliminar
          static function eliminar(){
            $id=$_REQUEST['id'];
            $datos=new Modelo();
            $dato=$datos->eliminar("usuario","id=".$id);
            header('location:'.ModeloController::index());
         }
    }
?>