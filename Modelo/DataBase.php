<?php

    class DataBase{

        public function insertarPersona($cedula,$nombre,$apellido){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "insert into producto (cedula,nombre,apellido) values (:cedula,:nombre,:apellido)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':cedula', $cedula);
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':apellido', $apellido);
            
              
            if(!$statement){
                return "Error no se puede realizar la carga";
            }else{
                $statement->execute();
                    return "La inserción se realizó con éxito";
                }
        }

        public function consultarPersona(){
            $array = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "select * from persona";
            $statement=$conexion->prepare($sql);
            $statement->execute();
            while($resultado = $statement->fetch()){
                $array[] =$resultado;
            }
            return $array;

        }

        public function eliminarPersona($id){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "delete from persona where id = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id',$id);
            if(!$statement){
                return "No se puede borrar";
            }else{
                $statement->execute();
                return "El registro fue eliminado exitosamente";
            }
    
        }

        public function buscarPersona($nombre){
            $array = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $nombre = "%".$nombre."%";
            $sql = "select * from persona where nombre like :nombre";
            $statement = $conexion->prepare($sql);
            $statement ->bindParam(':nombre',$nombre);
            $statement->execute();
            while($resultado = $statement->fetch()){
                $array[] =$resultado;
            }
            return $array;
            
        }
      
    }
?>