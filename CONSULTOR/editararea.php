<!DOCTYPE html>
<html>
<head>
    <title>Editar Tabla</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap y el estilo personalizado -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f0f0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Editar Tabla</h2>
        
        <?php
        if (isset($_GET["tabla"])) {
            $tabla_editar = $_GET["tabla"];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nuevo_nombre_tabla = $_POST["nuevo_nombre_tabla"];

                // Conexión a la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "manuales_contenido";
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }

                // Procesar la solicitud para editar una tabla
                $sql = "ALTER TABLE $tabla_editar RENAME TO $nuevo_nombre_tabla";

                if ($conn->query($sql) === TRUE) {
                    echo "<p class='text-success mt-4'>La tabla $tabla_editar ha sido renombrada a $nuevo_nombre_tabla.</p>";
                } else {
                    echo "<p class='text-danger mt-4'>Error al renombrar la tabla: " . $conn->error . "</p>";
                }

                // Cerrar la conexión
                $conn->close();
            }

            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='tabla_editar' value='$tabla_editar'>";
            echo "<div class='form-group'>";
            echo "<label for='nuevo_nombre_tabla'>Nuevo Nombre:</label>";
            echo "<input type='text' class='form-control' id='nuevo_nombre_tabla' name='nuevo_nombre_tabla' required>";
            echo "</div>";
            echo "<button type='submit' class='btn btn-primary'>Guardar Cambios</button>";
            
            // Agregar un botón para volver a la página Agregar areas
            echo "<a href='Agregar_areas.php' class='btn btn-secondary ml-2'>Volver a Agregar_areas.php</a>";
            
            echo "</form>";
        } else {
            echo "<p class='mt-4'>No se ha especificado una tabla para editar.</p>";
        }
        ?>
    </div>

    <!-- Agregar enlaces a los archivos JS de Bootstrap (jQuery y Popper.js) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
