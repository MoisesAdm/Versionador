<!DOCTYPE html> 
<html> 
<head> 
    <title>Información</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <style> 
        .card { 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
        } 
 
        .card-header { 
            background-color: #fff; 
            position: sticky;
            top: 0;
            z-index: 2;
        } 
 
        .card-header h2 { 
            color: #007bff; 
            font-weight: bold; 
        } 
 
        table { 
            width: 100%; 
            table-layout: fixed; 
        } 
 
        th, td { 
            padding: 8px; 
        } 
 
        /* Estilos para la barra de desplazamiento */ 
        .table-container { 
            max-height: 400px; 
            overflow-y: auto; 
            padding-top: 10px; 
            margin-bottom: 10px; 
            border-bottom: 1px solid #dee2e6; 
        } 
 
        .table-container table { 
            margin-bottom: 0; 
        } 
 
        .sticky-thead th { 
            position: sticky; 
            top: 0; 
            background-color: #fff; 
            z-index: 1; 
        } 
 
        .pagination { 
            justify-content: center; 
        }

        /* Estilos personalizados para el scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }

        /* Estilos para el campo de búsqueda */
        .search-container {
            margin-bottom: 10px;
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 1;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .search-container input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
        }

        /* Estilos para la separación entre títulos y contenido */
        .content-wrapper {
            padding-top: 50px;
            margin-top: 50px; /* Agregado */
        }
    </style> 
</head> 
<body> 
    <div class="container-fluid"> 
        <div class="card shadow"> 
            <div class="card-header"> 
                <h2>INFORMACIÓN</h2> 
            </div> 
        </div> 

        <div class="content-wrapper">
            <div class="card-body"> 
                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Buscar...">
                </div>
                <?php 
                // Establecer conexión con la base de datos 
                $servername = "localhost"; 
                $username = "root"; 
                $password = ""; 
                $dbname = "buscador"; 
 
                $conn = new mysqli($servername, $username, $password, $dbname); 
 
                // Verificar la conexión 
                if ($conn->connect_error) { 
                    die("Error de conexión: " . $conn->connect_error); 
                } 
 
                // Paginación 
                $results_per_page = 10000; // Cantidad de resultados por página 
 
                // Obtener el número de página actual 
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1; 
 
                // Calcular el índice de inicio y fin para la consulta 
                $index_start = ($current_page - 1) * $results_per_page; 
 
                // Consulta a la base de datos "buscador" con límites 
                $sql = "SELECT id, nombre, link_html, link_pdf, link_video FROM archivos LIMIT $index_start, $results_per_page"; 
                $result = $conn->query($sql); 
 
                if ($result && $result->num_rows > 0) { 
                    echo '<div class="table-container">'; 
                    echo '<table class="table">'; 
                    echo '<thead class="sticky-thead"><tr><th>ID</th><th>Nombre del manual</th><th>HTML</th><th>PDF</th><th>VIDEO</th></tr></thead>'; 
                    echo '</table>'; 
                    echo '</div>'; // Fin del contenedor con los títulos
 
                    echo '<div class="table-container" style="max-height: 400px; overflow-y: auto;">'; 
                    echo '<table class="table">'; 
                    echo '<tbody>'; 
                    while ($row = $result->fetch_assoc()) { 
                        echo '<tr>'; 
                        echo '<td>' . $row['id'] . '</td>'; 
                        echo '<td><span style="color: rgb(0, 74, 173);">' . $row['nombre'] . '</span></td>'; 
                        echo '<td><a href="' . $row['link_html'] . '"><img src="http://consultor20/botones/1.png" alt="HTML" width="37" height="37"></a></td>'; 
                        echo '<td><a href="' . $row['link_pdf'] . '"><img src="http://consultor20/botones/2.png" alt="PDF" width="37" height="37"></a></td>'; 
                        echo '<td><a href="' . $row['link_video'] . '"><img src="http://consultor20/botones/3.png" alt="VIDEO" width="37" height="37"></a></td>'; 
                        echo '</tr>'; 
                    } 
                    echo '</tbody>'; 
                    echo '</table>'; 
                    echo '</div>'; // Fin del contenedor con el contenido de la tabla

                    // Obtener el total de resultados sin límites 
                    $sql_total = "SELECT COUNT(*) AS total FROM archivos"; 
                    $result_total = $conn->query($sql_total); 
                    $row_total = $result_total->fetch_assoc(); 
                    $total_results = $row_total['total']; // Total de resultados 
 
                    // Calcular el total de páginas 
                    $total_pages = ceil($total_results / $results_per_page); 
 
                    echo '<nav aria-label="Pagination">'; 
                    echo '<ul class="pagination">'; 
                    if ($current_page > 1) { 
                        echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page - 1) . '">Previous</a></li>'; 
                    } 
                    for ($i = 1; $i <= $total_pages; $i++) { 
                        echo '<li class="page-item' . ($i == $current_page ? ' active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>'; 
                    } 
                    if ($current_page < $total_pages) { 
                        echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page + 1) . '">Next</a></li>'; 
                    } 
                    echo '</ul>'; 
                    echo '</nav>'; 
                } else { 
                    echo "No se encontraron resultados"; 
                } 
                $conn->close(); 
                ?> 
            </div> 
        </div>
    </div> 
 
    <script> 
        // Función para filtrar los resultados 
        function filterResults() { 
            // Obtener el valor del campo de búsqueda 
            var input = document.getElementById("searchInput"); 
            var filter = input.value.toUpperCase(); 
 
            // Obtener la tabla de resultados 
            var table = document.querySelector(".table-container table"); 
            var rows = table.getElementsByTagName("tr"); 
 
            // Iterar sobre las filas y mostrar u ocultar según el filtro 
            for (var i = 0; i < rows.length; i++) { 
                var nameColumn = rows[i].getElementsByTagName("td")[1]; 
                if (nameColumn) { 
                    var nameValue = nameColumn.textContent || nameColumn.innerText; 
                    if (nameValue.toUpperCase().indexOf(filter) > -1) { 
                        rows[i].style.display = ""; 
                    } else { 
                        rows[i].style.display = "none"; 
                    } 
                } 
            } 
        } 
 
        // Escuchar el evento de cambio en el campo de búsqueda 
        var inputField = document.getElementById("searchInput"); 
        inputField.addEventListener("input", filterResults); 
    </script> 
</body> 
</html>
