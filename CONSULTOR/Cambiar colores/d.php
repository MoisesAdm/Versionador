<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado de los Datos</h2>
    <?php
    // Datos para la conexión a la base de datos "buscador"
    $servername1 = "localhost";
    $username1 = "root";
    $password1 = "";
    $database1 = "buscador";

    // Datos para la conexión a la base de datos "login_imagen"
    $servername2 = "localhost";
    $username2 = "root";
    $password2 = "";
    $database2 = "login_imagen";

    // Crear conexión a la base de datos "buscador"
    $conn1 = new mysqli($servername1, $username1, $password1, $database1);

    // Verificar la conexión a "buscador"
    if ($conn1->connect_error) {
        die("Conexión a la base de datos 'buscador' fallida: " . $conn1->connect_error);
    }

    // Crear conexión a la base de datos "login_imagen"
    $conn2 = new mysqli($servername2, $username2, $password2, $database2);

    // Verificar la conexión a "login_imagen"
    if ($conn2->connect_error) {
        die("Conexión a la base de datos 'login_imagen' fallida: " . $conn2->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $color1 = $_POST["color1"];
        $color2 = $_POST["color2"];
        $color3 = $_POST["color3"];
        $urlLoginImagen = $_POST["imageUrl"];

        // Mostrar los colores y la URL actuales
        echo "<p>Color 1 (buscador): $color1</p>";
        echo "<p>Color 2 (buscador): $color2</p>";
        echo "<p>Color 3 (buscador): $color3</p>";
        echo "<p>URL de Imagen (login_imagen): $urlLoginImagen</p>";

        // Actualizar los valores en la base de datos "buscador"
        $updateSQL1 = "UPDATE buscador SET hexadecimal1='$color1', hexadecimal2='$color2', hexadecimal3='$color3'";
        if ($conn1->query($updateSQL1) === TRUE) {
            echo "<p>Valores de color actualizados en 'buscador' correctamente.</p>";
        } else {
            echo "Error al actualizar valores en 'buscador': " . $conn1->error;
        }

        // Actualizar la URL de imagen en la base de datos "login_imagen"
        $updateSQL2 = "UPDATE login_imagen SET url='$urlLoginImagen'";
        if ($conn2->query($updateSQL2) === TRUE) {
            echo "<p>URL de imagen actualizada en 'login_imagen' correctamente.</p>";
        } else {
            echo "Error al actualizar URL de imagen en 'login_imagen': " . $conn2->error;
        }
    }

    // Cerrar las conexiones
    $conn1->close();
    $conn2->close();
    ?>
</body>
</html>
