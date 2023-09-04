<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda en la Base de Datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #007bff;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #007bff;
        }

        .buttons {
            float: right;
            margin-bottom: 20px;
        }

        .buttons a {
            margin-right: 10px;
            background-color: transparent;
            color: #007bff;
            border-color: #007bff;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            color: #ffffff;
        }

        .form-control {
            border-radius: 10px;
        }

        .autocomplete-options {
            margin-bottom: 10px;
            display: none;
            position: absolute;
            background-color: #ffffff;
            border-radius: 10px;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1;
        }

        .autocomplete-option {
            padding: 5px 10px;
            margin-bottom: 5px;
            cursor: pointer;
        }

        .custom-table {
            margin-top: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }

        .custom-table th {
            background-color: #cfe2ff;
            color: #007bff;
            border-color: #cfe2ff;
            border-radius: 10px;
        }

        .custom-table th span {
            color: #007bff;
        }

        .custom-table td a.btn-primary {
            background-color: transparent;
            color: #007bff;
            border-color: #007bff;
            border-radius: 10px;
        }

        .custom-table td a.btn-primary:hover {
            background-color: #007bff;
            color: #ffffff;
        }

        .custom-table tbody td {
            border-color: transparent;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <span id="Z5dyJjR78Oqo1oUu" style="color:#007bff;font-weight:700;">Solvex</span>
        </div>
        <div class="buttons">
            <a href="http://consultor30/" class="btn btn-primary">Inicio</a>
        </div>

        <form action="" method="GET" target="_self">
            <div class="form-group">
                <label for="search">SOLVEX</label>
                <input class="form-control" type="search" id="search" name="search" placeholder="Ingrese su búsqueda" autofocus>
            </div>
            <div id="suggestions" class="autocomplete-options"></div>
            <a href="#" id="show-suggestions-link">Mostrar sugerencias</a>
        </form>

        <?php
        // Realizar la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "buscador";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Obtener el término de búsqueda desde el formulario
        if (isset($_GET['search'])) {
            $searchTerm = $_GET['search'];

            // Realizar la consulta a la base de datos para obtener las opciones de autocompletado
            $autocompleteSql = "SELECT DISTINCT nombre FROM archivos WHERE nombre LIKE '%$searchTerm%'";
            $autocompleteResult = $conn->query($autocompleteSql);
            $autocompleteOptions = array();

            if ($autocompleteResult->num_rows > 0) {
                while ($autocompleteRow = $autocompleteResult->fetch_assoc()) {
                    $autocompleteOptions[] = $autocompleteRow['nombre'];
                }
            }

            // Realizar la consulta a la base de datos para obtener los resultados de búsqueda
            $searchSql = "SELECT * FROM archivos WHERE nombre LIKE '%$searchTerm%'";
            $searchResult = $conn->query($searchSql);

            if ($searchResult->num_rows > 0) {
                // Mostrar las opciones de autocompletado
                echo "<div class='autocomplete-options'>";
                foreach ($autocompleteOptions as $option) {
                    echo "<div class='autocomplete-option'>$option</div>";
                }
                echo "</div>";

                // Mostrar los resultados de búsqueda en una tabla
                echo "<div class='table-responsive'>
                        <table class='table table-bordered custom-table'>
                            <thead>
                                <tr>
                                    <th><span>Nombre</span></th>
                                    <th>Link HTML</th>
                                    <th>Link PDF</th>
                                    <th>Link Video</th>
                                </tr>
                            </thead>
                            <tbody>";
                while ($row = $searchResult->fetch_assoc()) {
                    $linkHtml = $row['link_html'];
                    $linkPdf = $row['link_pdf'];
                    $linkVideo = $row['link_video'];

                    echo "<tr>
                            <td><span>" . $row['nombre'] . "</span></td>
                            <td><a href='$linkHtml' class='btn btn-primary'><img src='http://consultor20/botones/1.png' width='49' height='48'></a></td>
                            <td><a href='$linkPdf' class='btn btn-primary'><img src='http://consultor20/botones/2.png' width='49' height='48'></a></td>
                            <td><a href='$linkVideo' class='btn btn-primary'><img src='http://consultor20/botones/3.png' width='49' height='48'></a></td>
                        </tr>";
                }
                echo "</tbody></table></div>";
            } else {
                echo "<p>No se encontraron resultados para la búsqueda: $searchTerm</p>";
            }
        }

        $conn->close();
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#show-suggestions-link').click(function(e) {
                e.preventDefault();
                $('.autocomplete-options').toggle();
            });
        });
    </script>
</body>
</html>
