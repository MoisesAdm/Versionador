<!DOCTYPE html>
<html>
<head>
    <title>Tabla Dinámica</title>
    <!-- Incluye los archivos CSS de Bootstrap y Select2 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Incluye los archivos jQuery y jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Incluye archivos JS de Bootstrap y Select2 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Selecciona una tabla</h2>
        <form method="post">
            <?php
            // Configuración de la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "manuales_contenido";

            // Conexión a la base de datos
            $conn = new mysqli($servername, $username, $password, $database);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
            }

            // Obtener los nombres de todas las tablas en la base de datos
            $query = "SHOW TABLES";
            $result = $conn->query($query);

            // Crear el campo de selección con Select2 y búsqueda
            echo '<select name="tabla" class="form-control select2">';
            echo '<option value="">Selecciona una tabla</option>';

            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["Tables_in_manuales_contenido"] . '">' . $row["Tables_in_manuales_contenido"] . '</option>';
            }

            echo '</select>';
            ?>

            <br>
        </form>

        <?php
        // Mostrar la tabla seleccionada si se ha elegido una
        if (isset($_POST["tabla"])) {
            // Obtener la tabla seleccionada
            $selectedTable = $_POST["tabla"];

            // Conexión a la base de datos nuevamente
            $conn = new mysqli($servername, $username, $password, $database);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
            }

            // Consulta para obtener los datos de la tabla seleccionada
            $query = "SELECT * FROM $selectedTable";
            $result = $conn->query($query);

            // Mostrar la tabla
            if ($result->num_rows > 0) {
                echo '<h2>' . $selectedTable . '</h2>';
                echo '<div class="table-responsive">';
                echo '<table class="table table-bordered">';
                echo '<tr><th>ID</th><th>NOMBRE</th><th>HTML</th><th>PDF</th><th>VIDEO</th></tr>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["ID"] . '</td>';
                    echo '<td>' . $row["NOMBRE"] . '</td>';
                    echo '<td><a href="' . $row["HTML"] . '" target="_blank"><img src="http://consultor/Tabla/General/botones/1.png" alt="HTML" width="38" height="38"></a></td>';
                    echo '<td><a href="' . $row["PDF"] . '" target="_self"><img src="http://consultor/Tabla/General/botones/2.png" alt="PDF" width="38" height="38"></a></td>';
                    echo '<td><a href="' . $row["VIDEO"] . '" target="_self"><img src="http://consultor/Tabla/General/botones/3.png" alt="Video" width="38" height="38"></a></td>';
                    echo '</tr>';
                }
                echo '</table>';
                echo '</div>';
            } else {
                echo "No se encontraron datos en la tabla seleccionada.";
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
        }
        ?>
    </div>

    <!-- Configura el campo de selección como un campo Select2 -->
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Selecciona una tabla',
                allowClear: true
            });

            // Detecta el cambio en el campo de selección
            $('select[name="tabla"]').on('change', function() {
                // Envía automáticamente el formulario cuando se elige una tabla
                $(this).closest('form').submit();
            });
        });
    </script>
</body>
</html>