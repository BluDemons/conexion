<?php
    function cargar(){
        $consulta = new DataBase();
        $filas = $consulta->consultarPersona();
        echo "<table border = 1  bordercolor=blue >
                <th>ID</th>
                <th>CEDULA</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>";
                foreach($filas as $fila){
                        echo"<tr>";
                        echo"<td>".$fila['id']."</td>";
                        echo"<td>".$fila['cedula']."</td>";
                        echo"<td>".$fila['nombre']."</td>";
                        echo"<td>".$fila['apellido']."</td>";
                        echo"<td><a  href = 'Controlador/eliminar.php?id=".$fila['id']."'>Eliminar</td>";
                        echo"</tr>";

                }

        echo "</table>";
    }
        function buscar($nombre){
                $buscar = new DataBase();
                $filas = $buscar->buscarPersona($nombre);
                echo "<table border = 1  bordercolor=blue >
                        <th>ID</th>
                        <th>CEDULA</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>";
                if(isset($filas)){
                foreach($filas as $fila){
                        echo"<tr>";
                        echo"<td>".$fila['id']."</td>";
                        echo"<td>".$fila['cedula']."</td>";
                        echo"<td>".$fila['nombre']."</td>";
                        echo"<td>".$fila['apellido']."</td>";
                        echo"<td><a  href = 'Controlador/eliminar.php?id=".$fila['id']."'>Eliminar</td>";
                        echo"</tr>";
                }
                
                echo "</table>";
        }
}
?>