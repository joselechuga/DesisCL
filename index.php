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
    <hr>
    <form action="php/registro.php" method="POST">

        <table>
            <tr>
                <td>Nombre y apellido</td>
                <td>
                    <input type="text" name="name" id="name" required />
                </td>
            </tr>
            
            <tr>
                <td>Alias</td>
                <td>
                <input type="text" name="alias" id="alias" required />
                </td>
            </tr>
            <tr>
                <td>Rut</td>
                <td>
                    <input type="text" name="rut" id="rut" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                <input type="email" name="email" id="email" required />
                </td>
            </tr>
            <tr>
                <td>Region</td>
                <td>
                    <select id="selectRegion" name="region" onchange="updateSelectComunas(this.value)">
                    <option value="">Selecciona una región</option>
                        <?php
                            // Conexión a la base de datos (reemplaza con tus datos de conexión)
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "desis";

                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                die("Conexión fallida: " . $conn->connect_error);
                            }

                            // Consulta para obtener todas las regiones
                            $sqlRegiones = "SELECT * FROM regiones";
                            $resultRegiones = $conn->query($sqlRegiones);

                            // Mostrar opciones para las regiones
                            if ($resultRegiones->num_rows > 0) {
                                while ($row = $resultRegiones->fetch_assoc()) {
                                    echo '<option value="' . $row['id'] . '">' . $row['region'] . '</option>';
                                }
                            }

                            // Cerrar la conexión a la base de datos
                            $conn->close();
                        ?>
                </select>
                </td>
            </tr>

            <tr>
                <td>Comuna</td>
                <td>
                    <select id="selectComuna" name="comuna">
                        <option value="">Selecciona una comuna</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Candidato</td>
                <td>
                <select name="candidato" id="candidato">
                    <?php
                        include('php/candidato.php');
                    ?>
            </select>
                </td>
            </tr>
            <tr>
                <td>Como se enteró de Nosotros</td>
                <td>
                    <input type="checkbox" name="comoseentero" id="web" class="checknosotros" value="Web" />
                    <label for="">Web</label>

                    <input type="checkbox" name="comoseentero" id="tv" class="checknosotros" value="TV" />
                    <label for="">TV</label>

                    <input type="checkbox" name="comoseentero" id="redes" class="checknosotros" value="Redes Sociales" />
                    <label for="">Redes Sociales</label>

                    <input type="checkbox" name="comoseentero" id="amigo" class="checknosotros" value="Amigo" />
                    <label for="">Amigo</label>
                </td>
            </tr>

        </table>

        <div>
            <input type="submit" name="votar" id="votar" value="votar" />
        </div>
    </form>
    <?php
        include('php/registro.php');
    ?>
    <!-- Libreria Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="assets/js/validaciones.js"></script>
    <script>
        function updateSelectComunas(selectedRegion) {
            // AJAX para obtener las comunas según la región seleccionada
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("selectComuna").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "php/get_comunas.php?region_id=" + selectedRegion, true);
            xhttp.send();
        }
    </script>


</body>

</html>