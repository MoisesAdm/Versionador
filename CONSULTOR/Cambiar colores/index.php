<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="http://consultor/favicon/4.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de Colores y URL de Imagen</title>
    <!-- Incluir Bootstrap CSS desde un CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css">
    <!-- Estilo personalizado -->
    <style>
        body {
            background-color: #2E8CF5;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="color"],
        input[type="url"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Selector de Colores y URL de Imagen</h1>
        <form action="guardar_colores.php" method="POST">
            <div class="mb-3">
                <label for="color1">Color 1:</label>
                <input type="color" id="color1" name="color1" value="<?php echo obtenerColor('hexadecimal1'); ?>">
            </div>
            <div class="mb-3">
                <label for="color2">Color 2:</label>
                <input type="color" id="color2" name="color2" value="<?php echo obtenerColor('hexadecimal2'); ?>">
            </div>
            <div class="mb-3">
                <label for="color3">Color 3:</label>
                <input type="color" id="color3" name="color3" value="<?php echo obtenerColor('hexadecimal3'); ?>">
            </div>
            <div class="mb-3">
                <label for="imageUrl">URL de Imagen de Fondo:</label>
                <input type="url" id="imageUrl" name="imageUrl" value="<?php echo obtenerImagenURL(); ?>" placeholder="Ejemplo: https://ejemplo.com/ruta/imagen.jpg">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>

<?php
function obtenerColor($columna) {
    // Datos de conexión a la base de datos "buscador"
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "buscador";

    // Crear una conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Obtener el valor actual de la columna
    $sql = "SELECT $columna FROM hexadecimales";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row[$columna];
    }

    return "";
}

function obtenerImagenURL() {
    // Datos de conexión a la base de datos "login_imagen"
    $servername2 = "localhost";
    $username2 = "root";
    $password2 = "";
    $database2 = "login_imagen";

    // Crear una conexión a la base de datos "login_imagen"
    $conn2 = new mysqli($servername2, $username2, $password2, $database2);

    // Verificar la conexión a "login_imagen"
    if ($conn2->connect_error) {
        die("Error de conexión a 'login_imagen': " . $conn2->connect_error);
    }

    // Obtener la URL de imagen actual
    $sql2 = "SELECT url FROM logo_consultor WHERE id = 1";
    $result2 = $conn2->query($sql2);

    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();
        return $row2['url'];
    }

    return "";
}
?>
