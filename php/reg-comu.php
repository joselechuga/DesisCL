/*Consulta para mostrar las regiones */

<?php

$inc = include('conexion.php');
if($inc){
    $consultaReg = "SELECT * FROM regiones ORDER BY region ASC";
    $resultado = mysqli_query($conex,$consultaReg);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $region = $row['region'];
            ?> 
                <option > <?php echo $region?></option>
            <?php
        }
    }
}

?>

