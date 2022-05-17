<?php

class Modelo{
    private $Modelo;
    private $db;
    private $datos;

    public function __construct(){
        $this->Modelo=array();
        $this->db=new PDO('mysql:host=localhost;dbname=login',"root","");
    }
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." values(null,".$data.")";
        $resultado=$this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function mostrar($tabla,$condicion){
        $consul="select * from ".$tabla." where ".$condicion.";";
        $resul=$this->db->query($consul);
        while($filas=$resul->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos[]=$filas;
        }
        return $this->datos;
    }

    public function actualizar($tabla, $data, $condicion){
        $consulta="update ".$tabla." set ". $data ." where ".$condicion;
        $resultado=$this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    public function eliminar($tabla, $condicion){
        $eli="delete from ".$tabla." where ".$condicion;
        $res=$this->db->query($eli);
        if($res){
            return true;
        }else{
            return false;
        }
    }  
    public function login($tabla, $condicion){
        $consul="select * from ".$tabla." where ".$condicion.";";
        $resul=$this->db->query($consul);
        if($resul){
            return $resul->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }
    public function validar_User_existente($tabla, $condicion){
        $consul="select * from ".$tabla." where ".$condicion.";";
        $resul=$this->db->query($consul);
        if($resul){
            return $resul->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }public function validar_User_existente_Edit($tabla, $condicion, $condicion2){
        $consul="select * from ".$tabla." where ".$condicion." AND ".$condicion2.";";
        $resul=$this->db->query($consul);
        if($resul){
            return $resul->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }
}