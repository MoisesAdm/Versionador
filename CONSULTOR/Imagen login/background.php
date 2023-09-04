<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_imagen";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener la URL de la imagen de fondo desde la base de datos
$sql = "SELECT url FROM backgrounds WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $backgroundUrl = $row["url"];
} else {
  $backgroundUrl = ""; // URL de imagen de fondo por defecto
}

$conn->close();

// Devolver la URL de imagen de fondo como respuesta en formato JSON
echo json_encode(["backgroundUrl" => $backgroundUrl]);
?>
