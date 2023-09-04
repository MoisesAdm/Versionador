<?php
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "secciones";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$tableData = array();

$sql = "SHOW TABLES FROM $dbname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_row()) {
        $tableName = $row[0];
        $trimmedTableName = substr($tableName, 2); // Omitir las primeras 2 letras

        // Obtener los registros (subtitulos) de la tabla actual
        $sql = "SELECT id, titulo, enlace FROM $tableName";
        $subMenuResult = $conn->query($sql);

        $submenu = array();
        if ($subMenuResult->num_rows > 0) {
            while ($subRow = $subMenuResult->fetch_assoc()) {
                $submenu[] = array(
                    "titulo" => $subRow["titulo"],
                    "enlace" => $subRow["enlace"]
                );
            }
        }

        $tableData[] = array(
            "nombreTabla" => $trimmedTableName,
            "submenu" => $submenu
        );
    }
}

$conn->close();

// Devolver los datos del menú como JSON
echo json_encode($tableData);
?>
