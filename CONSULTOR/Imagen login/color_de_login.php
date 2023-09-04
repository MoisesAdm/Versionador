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

// Obtener el color hexadecimal almacenado en la base de datos
$sql = "SELECT hex_color FROM colors WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $hexColor = $row["hex_color"];
} else {
  $hexColor = "#ADD8E6"; // Color por defecto en caso de que no haya un color guardado
}

$conn->close();

// Devolver el color como respuesta en formato JSON
echo json_encode(["color" => $hexColor]);
?>
