
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    FORMULARIO DE VOTACIÓN:
  </h1>
  <!--SE HACE ENVIO DEL FORMULARIO MEDIANTE EL METODO POST-->
    <form method="POST">
        <table>
            <tr>
                <td>Nombre y Apellido</td>
                <td>
                    <label for="name"></label>
                    <input type="text" name="name" id="name" required />
                </td>
            </tr>
            <tr>
                <td>Alias</td>
                <td>
                    <label for="alias"></label>
                    <input type="text" name="alias" id="alias" required />
                </td>
            </tr>
            <tr>
                <td>RUT</td>
                <td>
                    <label for="rut"></label>
                    <input type="text" name="rut" id="rut"  />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <label for="email"></label>
                    <input type="email" name="email" id="email" required />
                </td>
            </tr>
            <tr>
                <td>Region</td>
                <td>
                    <select name="region" id="region">
                    <?php
                        include('../php/reg-comu.php');
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Comuna</td>
                <td>
                <select name="comuna" id="comuna">
                    <?php
                        include('../php/comunas.php');
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Candidato</td>
                <td>
                    <select name="candidato" id="candidato">
                        <?php
                            include('../php/candidato.php');
                        ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Como se enteró de Nosotros</td>
                <td>   
                        <input type="checkbox" name="comoseentero" id="web" class="checknosotros" value = "Web"/>
                        <label for="">Web</label>
    
                        <input type="checkbox" name="comoseentero" id="tv" class="checknosotros" value = "TV"/>
                        <label for="">TV</label>
    
                        <input type="checkbox" name="comoseentero" id="redes" class="checknosotros" value = "Redes Sociales"/>
                        <label for="">Redes Sociales</label>
    
                        <input type="checkbox" name="comoseentero" id="amigo" class="checknosotros" value = "Amigo"/>
                        <label for="">Amigo</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="votar" id="votar" value="votar"  />
                </td>
            </tr>
        </table>
    </form>


    <?php
      include('../php/registro.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="../assets/js/validaciones.js"></script>
 <!--   <script src="../assets/js/comunas-regiones.js"></script> -->

</body>
</html>


