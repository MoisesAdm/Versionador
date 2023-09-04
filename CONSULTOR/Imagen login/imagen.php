<?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root"; // Usuario root sin contraseña
    $password = ""; // Contraseña del usuario root (si aplica)
    $dbname = "Login_imagen";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener la última imagen almacenada en la base de datos (puedes cambiar la consulta según tus necesidades)
    $sql = "SELECT ruta FROM imagen ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $ruta_imagen = $row['ruta'];

        // Mostrar la imagen
        echo '<img src="' . $ruta_imagen . '" alt="Imagen" />';
    } else {
        echo "No se encontró ninguna imagen en la base de datos.";
    }

    $conn->close();
    ?>