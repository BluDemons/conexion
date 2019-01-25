<?php
require_once('../Modelo/Conexion.php');
require_once('../Modelo/DataBase.php');

$mensaje = null;

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];


if(strlen($cedula) > 0 && strlen($nombre) > 0 && strlen($apellido) > 0){
    $consulta = new DataBase();
    $mensaje = $consulta->insertarPersona($cedula,$nombre,$apellido);
    echo "<a href='../insertar.html'>Regresar</a>";
}else{
    echo "Por favor ingrese la información";
}
echo $mensaje;

?>