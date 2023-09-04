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
        // Realizar la conexión a la base de datos "manuales_contenido"
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "manuales_contenido";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Obtener el término de búsqueda desde el formulario
        if (isset($_GET['search'])) {
            $searchTerm = $_GET['search'];

            // Realizar la consulta en todas las tablas de la base de datos
            $combinedResults = array();

            $sql = "SHOW TABLES FROM $dbname";
            $tablesResult = $conn->query($sql);

            if ($tablesResult->num_rows > 0) {
                while ($tableRow = $tablesResult->fetch_assoc()) {
                    $tableName = $tableRow["Tables_in_$dbname"];

                    // Consulta en la tabla actual
                    $sql = "SELECT * FROM $tableName WHERE NOMBRE LIKE '%$searchTerm%'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $combinedResults[] = $row;
                        }
                    }
                }
            }

            // Ahora puedes trabajar con $combinedResults que contiene los resultados combinados
        }
        ?>

        <!-- Mostrar los resultados combinados aquí -->
        <?php if (!empty($combinedResults)): ?>
            <div class='table-responsive'>
                <table class='table table-bordered custom-table'>
                    <thead>
                        <tr>
                            <th><span>Nombre</span></th>
                            <th>Link HTML</th>
                            <th>Link PDF</th>
                            <th>Link Video</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($combinedResults as $row): ?>
                            <tr>
                                <td><span><?php echo $row['NOMBRE']; ?></span></td>
                                <td><a href='<?php echo $row['HTML']; ?>' class='btn btn-primary'><img src='http://consultor20/botones/1.png' width='49' height='48'></a></td>
                                <td><a href='<?php echo $row['PDF']; ?>' class='btn btn-primary'><img src='http://consultor20/botones/2.png' width='49' height='48'></a></td>
                                <td><a href='<?php echo $row['VIDEO']; ?>' class='btn btn-primary'><img src='http://consultor20/botones/3.png' width='49' height='48'></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p>No se encontraron resultados para la búsqueda: <?php echo $searchTerm; ?></p>
        <?php endif; ?>
        <?php
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

            // Detectar cambios en el campo de búsqueda y ejecutar la búsqueda automáticamente
            $('#search').on('input', function() {
                var searchTerm = $(this).val();
                search(searchTerm);
            });

            // Función para realizar la búsqueda
            function search(term) {
                $.ajax({
                    url: 'buscar.php', // Reemplaza con el nombre de tu archivo PHP de búsqueda
                    type: 'GET',
                    data: { search: term },
                    success: function(data) {
                        // Actualizar el contenido con los resultados de la búsqueda
                        $('.table-responsive').html(data);
                    },
                    error: function() {
                        console.log('Error en la búsqueda.');
                    }
                });
            }
        });
    </script>
</body>
</html>