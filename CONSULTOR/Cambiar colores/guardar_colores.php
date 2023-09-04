<?php
// Datos de conexión a la base de datos "buscador"
$servername = "localhost";
$username = "root";
$password = "";
$database = "buscador";

// Datos de conexión a la base de datos "login_imagen"
$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$database2 = "login_imagen";

// Crear una conexión a la base de datos "buscador"
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión a "buscador"
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los valores enviados desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color1 = $_POST["color1"];
    $color2 = $_POST["color2"];
    $color3 = $_POST["color3"];
    $imageUrl = $_POST["imageUrl"];

    // Actualizar los valores en la tabla "hexadecimales"
    $sqlUpdate = "UPDATE hexadecimales SET 
                  hexadecimal1 = '$color1',
                  hexadecimal2 = '$color2',
                  hexadecimal3 = '$color3'";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "Colores actualizados correctamente en la tabla 'hexadecimales'.<br>";
    } else {
        echo "Error al actualizar los colores: " . $conn->error . "<br>";
    }

    // Crear una conexión a la base de datos "login_imagen"
    $conn2 = new mysqli($servername2, $username2, $password2, $database2);

    // Verificar la conexión a "login_imagen"
    if ($conn2->connect_error) {
        die("Error de conexión a 'login_imagen': " . $conn2->connect_error);
    }

    // Actualizar la URL de imagen en la tabla "logo_consultor"
    $sqlUpdateImage = "UPDATE logo_consultor SET url = '$imageUrl' WHERE id = 1";

    if ($conn2->query($sqlUpdateImage) === TRUE) {
        echo "URL de imagen actualizada correctamente en la tabla 'logo_consultor'.<br>";
    } else {
        echo "Error al actualizar la URL de imagen: " . $conn2->error . "<br>";
    }

    // Cerrar la conexión a "login_imagen"
    $conn2->close();
}

// Cerrar la conexión a "buscador"
$conn->close();
?>
