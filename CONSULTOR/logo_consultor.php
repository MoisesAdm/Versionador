<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previsualización de Imágenes</title>
    <style>
        .imagen-previsualizacion {
            display: inline-block;
            margin: 10px;
        }
        .imagen-previsualizacion img {
            width: 225px;
            height: 95px;
        }
    </style>
</head>
<body>
    <?php
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login_imagen";

    // Crear una conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SQL para seleccionar los datos de la tabla "logo_consultor"
    $sql = "SELECT id, url FROM logo_consultor";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar las imágenes con previsualización
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $url = $row["url"];

            echo '<div class="imagen-previsualizacion">';
            echo '<img src="' . $url . '" alt="Imagen" />';
            echo '</div>';
        }
    } else {
        echo "No se encontraron registros en la tabla 'logo_consultor'.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>
</body>
</html>
