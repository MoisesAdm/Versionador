<!DOCTYPE html>
<html>
<head>
    <title>Administrar Áreas</title>
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
        <h2 class="mb-4">Administrar Áreas</h2>
        
        <!-- Formulario para agregar áreas -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="nombres_areas">Nombres de las Áreas (separados por comas):</label>
                <input type="text" class="form-control" id="nombres_areas" name="nombres_areas" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Áreas</button>
        </form>

        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "manuales_contenido";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Procesar el formulario para agregar áreas
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombres_areas = $_POST["nombres_areas"];
            $nombres_array = explode(",", $nombres_areas);

            foreach ($nombres_array as $nombre) {
                $nombre = trim($nombre);

                $sql = "CREATE TABLE IF NOT EXISTS $nombre (
                    ID INT AUTO_INCREMENT PRIMARY KEY,
                    NOMBRE VARCHAR(255),
                    HTML TEXT,
                    PDF BLOB,
                    VIDEO BLOB
                )";

                if ($conn->query($sql) === TRUE) {
                    echo "<p class='text-success'>La tabla $nombre ha sido creada con éxito.</p>";
                } else {
                    echo "<p class='text-danger'>Error al crear la tabla $nombre: " . $conn->error . "</p>";
                }
            }
        }

        // Consulta para obtener la lista de tablas existentes
        $sql = "SHOW TABLES";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3 class='mt-4'>Tablas Existentes:</h3>";
            echo "<ul>";
            while ($row = $result->fetch_row()) {
                $tabla_existente = $row[0];
                echo "<li>";
                echo "$tabla_existente ";
                echo "<a href='editararea.php?tabla=$tabla_existente'>Editar</a> ";
                echo "<a href='eliminararea.php?tabla=$tabla_existente'>Eliminar</a> ";
                echo "<a href='ingresardata.php?tabla=$tabla_existente'>Ingresar Data</a>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p class='mt-4'>No hay tablas existentes.</p>";
        }

        // Cerrar la conexión
        $conn->close();
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
