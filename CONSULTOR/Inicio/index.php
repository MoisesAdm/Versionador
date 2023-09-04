<?php
// Conexión a la base de datos (reemplaza con tus propios datos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_imagen";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Función para obtener la URL de fondo desde la tabla "backgrounds"
function obtenerFondo() {
    global $conn;
    $sql = "SELECT url FROM backgrounds WHERE id = 1"; // Suponiendo que el fondo deseado esté en la fila con id 1
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["url"];
    } else {
        return "ruta_a_la_imagen_predeterminada.jpg";
    }
}

// Función para obtener el valor hexadecimal de color desde la tabla "colors"
function obtenerColorDeFormulario() {
    global $conn;
    $sql = "SELECT hex_color FROM colors WHERE id = 1"; // Suponiendo que el color deseado esté en la fila con id 1
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["hex_color"];
    } else {
        return "#ffffff"; // Color blanco como valor predeterminado
    }
}

// Función para obtener la ruta de la imagen desde la tabla "imagen"
function obtenerRutaDeImagen() {
    global $conn;
    $sql = "SELECT ruta FROM imagen WHERE id = 1"; // Suponiendo que la imagen deseada esté en la fila con id 1
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["ruta"];
    } else {
        return "ruta_a_la_imagen_predeterminada.jpg";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="http://consultor/favicon/4.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados para el fondo y el contenedor */
        body {
            background-image: url('<?php echo obtenerFondo(); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            height: 100vh; /* Establece la altura al 100% de la ventana */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contenedor {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo semitransparente */
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }

        /* Estilos personalizados para la imagen en el formulario */
        .imagen-formulario {
            max-width: 150px;
            height: auto;
            margin-bottom: 20px; /* Espacio entre la imagen y el formulario */
        }

        /* Estilos personalizados para el formulario */
        .formulario {
            max-width: 300px;
            margin: 0 auto;
        }

        /* Estilos personalizados para los campos de entrada */
        .form-control {
            border: 2px solid <?php echo obtenerColorDeFormulario(); ?>;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            width: 90%; /* Ancho ligeramente reducido */
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #0056b3;
        }

        /* Estilo personalizado para el botón "Acceder" */
        .btn-primary {
            background-color: <?php echo obtenerColorDeFormulario(); ?>;
            border: none;
            border-radius: 5px;
            color: #fff;
            padding: 10px;
            width: 100%;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="contenedor">
            <img src="<?php echo obtenerRutaDeImagen(); ?>" alt="Imagen en el formulario" class="imagen-formulario">
            <form action="procesar_login.php" method="POST" class="formulario">
                <div class="mb-3">
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary">Acceder</button>
            </form>
        </div>
    </div>

    <!-- Agrega la referencia a Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
