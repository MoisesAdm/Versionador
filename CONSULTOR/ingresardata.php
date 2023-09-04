<!DOCTYPE html>
<html>
<head>
    <title>Ingresar Data a la Tabla</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap y el estilo personalizado -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f0f0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Ingresar Data a la Tabla</h2>
        
        <?php
        if (isset($_GET["tabla"])) {
            $tabla_seleccionada = $_GET["tabla"];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtener los datos del formulario
                $nombre = $_POST["nombre"];
                $compressed_file = $_FILES["archivo_comprimido"];
                $pdf_file = $_FILES["pdf"];
                $video_file = $_FILES["video"];
                
                // Verificar si la carpeta "uploads" existe y crearla si no
                $uploads_folder = "uploads";
                if (!is_dir($uploads_folder)) {
                    mkdir($uploads_folder, 0755, true);
                }

                // Carpeta donde se guardarán los archivos comprimidos
                $compressed_folder_name = "HTML_$nombre" . date("YmdHis");
                $compressed_folder = "$uploads_folder/$compressed_folder_name";
                mkdir($compressed_folder, 0755, true);
                
                // Ruta completa del archivo comprimido
                $compressed_file_path = "$compressed_folder/" . basename($compressed_file["name"]);
                move_uploaded_file($compressed_file["tmp_name"], $compressed_file_path);

                // Descomprimir el archivo ZIP en la carpeta específica
                $zip = new ZipArchive;
                if ($zip->open($compressed_file_path) === TRUE) {
                    $zip->extractTo($compressed_folder);
                    $zip->close();

                    // Ruta completa de la carpeta de HTML
                    $html_folder_link = "http://consultor/$compressed_folder";

                    // Conexión a la base de datos
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "manuales_contenido";
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Error de conexión: " . $conn->connect_error);
                    }

                    // Consulta SQL para obtener la cantidad actual de registros
                    $sql_count = "SELECT COUNT(*) as total FROM $tabla_seleccionada";
                    $result = $conn->query($sql_count);
                    $row = $result->fetch_assoc();
                    $cantidad_registros = $row["total"];

                    // Calcula el nuevo ID
                    $nuevo_id = $cantidad_registros + 1;

                    // Subir archivo PDF
                    $pdf_filename = $_FILES["pdf"]["name"];
                    $pdf_tmp_name = $_FILES["pdf"]["tmp_name"];
                    $pdf_folder = "$uploads_folder/PDF_$nombre" . date("YmdHis");
                    mkdir($pdf_folder, 0755, true); // Crear carpeta PDF específica para este archivo
                    $pdf_destination = "$pdf_folder/$pdf_filename";
                    move_uploaded_file($pdf_tmp_name, $pdf_destination);

                    // Subir archivo de Video
                    $video_filename = $_FILES["video"]["name"];
                    $video_tmp_name = $_FILES["video"]["tmp_name"];
                    $video_folder = "$uploads_folder/VIDEO_$nombre" . date("YmdHis");
                    mkdir($video_folder, 0755, true); // Crear carpeta VIDEO específica para este archivo
                    $video_destination = "$video_folder/$video_filename";
                    move_uploaded_file($video_tmp_name, $video_destination);

                    // Ruta completa de PDF y Video
                    $pdf_full_path = "http://consultor/$pdf_destination";
                    $video_full_path = "http://consultor/$video_destination";

                    // Consulta SQL para insertar datos en la tabla seleccionada con el nuevo ID
                    $sql = "INSERT INTO $tabla_seleccionada (ID, NOMBRE, HTML, PDF, VIDEO) VALUES ($nuevo_id, '$nombre', '$html_folder_link', '$pdf_full_path', '$video_full_path')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<p class='text-success mt-4'>Los datos han sido ingresados correctamente en la tabla $tabla_seleccionada con el ID $nuevo_id.</p>";
                    } else {
                        echo "<p class='text-danger mt-4'>Error al ingresar datos en la tabla: " . $conn->error . "</p>";
                    }

                    // Cerrar la conexión
                    $conn->close();
                } else {
                    echo "<p class='text-danger mt-4'>Error al descomprimir el archivo ZIP.</p>";
                }
            }
            
            // Mostrar el formulario para ingresar datos
            echo "<form method='POST' action='' enctype='multipart/form-data'>";
            echo "<input type='hidden' name='tabla' value='$tabla_seleccionada'>";
            echo "<div class='form-group'>";
            echo "<label for='nombre'>Nombre:</label>";
            echo "<input type='text' class='form-control' id='nombre' name='nombre' required>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label for='archivo_comprimido'>Archivo Comprimido (ZIP):</label>";
            echo "<input type='file' class='form-control-file' id='archivo_comprimido' name='archivo_comprimido' accept='.zip' required>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label for='pdf'>PDF:</label>";
            echo "<input type='file' class='form-control-file' id='pdf' name='pdf' accept='.pdf' required>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label for='video'>VIDEO:</label>";
            echo "<input type='file' class='form-control-file' id='video' name='video' accept='.mp4' required>";
            echo "</div>";
            echo "<button type='submit' class='btn btn-primary'>Ingresar Data</button>";
            echo "</form>";
        } else {
            echo "<p class='mt-4'>No se ha especificado una tabla para ingresar datos.</p>";
        }
        ?>
        
        <!-- Agregar un botón para volver a la página Administrar_tablas.php -->
        <a href="Agregar_areas.php" class="btn btn-secondary mt-3">Volver a Agregar areas</a>
    </div>
    <!-- Agregar enlaces a los archivos JS de Bootstrap (jQuery y Popper.js) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>