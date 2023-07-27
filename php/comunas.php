/*Consulta para mostrar las comunas */
<?php

$inc = include('conexion.php');
if($inc){
    $consultaRegComu = "SELECT * FROM comunas GROUP BY comuna ASC ORDER BY comuna ASC";
    $resultado = mysqli_query($conex,$consultaRegComu);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $comuna = $row['comuna'];
            ?> 
                <option > <?php echo $comuna?></option>
            <?php
        }
    }
}

?>
