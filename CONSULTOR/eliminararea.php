<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Tabla</title>
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
        <h2 class="mb-4">Eliminar Tabla</h2>
        
        <?php
        if (isset($_GET["tabla"])) {
            $tabla_eliminar = $_GET["tabla"];

            // Conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "manuales_contenido";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Procesar la solicitud para eliminar una tabla
            $sql = "DROP TABLE IF EXISTS $tabla_eliminar";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='text-success mt-4'>La tabla $tabla_eliminar ha sido eliminada con éxito.</p>";
            } else {
                echo "<p class='text-danger mt-4'>Error al eliminar la tabla: " . $conn->error . "</p>";
            }

            // Cerrar la conexión
            $conn->close();
        } else {
            echo "<p class='mt-4'>No se ha especificado una tabla para eliminar.</p>";
        }
        ?>
        
        <!-- Agregar un botón para volver a la página Agregar_areas.php -->
        <a href="Agregar_areas.php" class="btn btn-secondary mt-3">Volver a Agregar Áreas</a>
    </div>

    <!-- Agregar enlaces a los archivos JS de Bootstrap (jQuery y Popper.js) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
