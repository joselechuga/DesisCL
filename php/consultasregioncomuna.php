<?php

$inc = include('conexion.php');
$inc = include('reg-comu.php');
if($inc){

    $where = '';
    $regionselect = $_POST['regiones'];

    if(empty($_POST['region'])){
        $where = "where c.id_region ='".$regionselect."'";
    }

    $consultaRegComu = "SELECT * FROM comunas c 
    INNER JOIN regiones r ON c.id_region = r.id
    $where 
    GROUP BY comuna ASC ORDER BY comuna ASC";


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

