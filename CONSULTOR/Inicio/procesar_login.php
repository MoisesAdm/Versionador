<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_imagen";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT * FROM Usuarios WHERE Usuario='$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($row['Contraseña'] == $contraseña) {
            // Contraseña y usuario coinciden, redirige al enlace
            header("Location: " . $row['Enlace']);
            exit();
        } else {
            header("Location: http://consultor/Inicio/error404.php");
            exit();
        }
    } else {
        header("Location: http://consultor/Inicio/error404.php");
        exit();
    }
}

$conn->close();
?>
