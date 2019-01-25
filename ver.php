<?php
require_once "Modelo/Conexion.php";
require_once "Modelo/DataBase.php";
require_once "Controlador/cargar.php";



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ver Personas</title>
</head>
<body>
    <h1>LISTA DE PERSONAS</h1>
    <h3>Juan Rojas</h3>
    
        <form method="get">
        <input type="text" name="buscar" placeholder="Buscar Producto">
        <input type="submit" value="Buscar">
        </form>
    
    <?php 
        if(isset($_GET['buscar'])){
            buscar($_GET['buscar']);
        }else{
            cargar();
        } 
     ?>
    <div><br><a href = "insertar.html">Regresar</a></div> 
    
    
</body>
</html>
