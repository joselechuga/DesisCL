<?php
    # Se utiliza la ruta de la coneccion a la base de datos
    include('conexion.php');

    if(isset($_POST['votar'])) {
        # Validacion del campo nombre, que a lo menos contenga 1 caracter
        if(strlen($_POST ['name'] >= 1)){
            # Obtener valores de los campos del formulario 
            $name = trim($_POST['name']);
            $alias = trim($_POST['alias']);
            $rut = trim($_POST['rut']);
            $email = trim($_POST['email']);
            $region = trim($_POST['region']);
            $comuna = trim($_POST['comuna']);
            $candidato = trim($_POST['candidato']);
            $comoseentero = trim($_POST['comoseentero']);

            #consulta a BD para insertar los datos
            $consulta = "INSERT INTO registro(nombre_apellido,alias,rut,email,region,comuna,candidato,nosotros)
                VALUES('$name','$alias','$rut','$email','$region','$comuna','$candidato','$comoseentero');";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                # Mensaje exitoso o error al enviar datos del formulario
                ?>
                <h2 class="success">Formulario de votación enviado exitosamente!</h2>
                <?php
            }else{
                ?>
                <h2 class="error">Error!</h2>
                <?php
            }
        }else{
            ?>
            <h2 class="error">CAMPOS VACIOS</h2>
            <?php
        }
    }
?>