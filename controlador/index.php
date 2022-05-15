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
            $dato=$datos->mostrar("datos","1");
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
            $contrasenia=$_REQUEST['contrasenia'];
            $fecha=$_REQUEST['fecha'];
            $data="'".$nombre."','".$apellido."','".$correo."','".$contrasenia."','".$fecha."'";
            $producto=new Modelo();
            $dato=$producto->insertar("datos",$data);
            header("location:".urlsite);
         }

          // editar
        static function editar(){
            $id=$_REQUEST['id'];
            $datos=new Modelo();
            $dato=$datos->mostrar("datos","id=".$id);
            require_once("vista/editar.php");
         }
 
         // actualizar
         static function actualizar(){
            $id=$_REQUEST['id'];
            $nombre=$_REQUEST['nombre'];
            $apellido=$_REQUEST['apellido'];
            $correo=$_REQUEST['correo'];
            $contrasenia=$_REQUEST['contrasenia'];
            $fecha=$_REQUEST['fecha'];
            $data="nombre='".$nombre."',apellido='".$apellido."',correo='".$correo."',contrasenia='".$contrasenia."',fecha='".$fecha."'";
             $datos=new Modelo();
             $dato=$datos->actualizar("datos",$data,"id=".$id);
             header("location:".urlsite);
          }
 
        // Eliminar
          static function eliminar(){
            $id=$_REQUEST['id'];
            $datos=new Modelo();
            $dato=$datos->eliminar("datos","id=".$id);
            header("location:".urlsite);
         }
    }
?>