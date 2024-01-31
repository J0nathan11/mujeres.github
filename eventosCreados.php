<?php
$dbhost = "localhost";  
$dbuser = "root";
$dbpass = "";
$dbname = "mujeres";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Preparar la consulta SQL para obtener los perfiles
$sql = "SELECT * FROM eventos";

// Ejecutar la consulta
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Perfiles</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>Eventos Registrados</h1>
    <a href="controlAdmin.php">Regresar</a>

    <?php
    // Mostrar los perfiles en una tabla si hay resultados
    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Titulo</th><th>Fecha de Evento</th><th>Descripción</th>";

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila["titulo"] . "</td>";
            echo "<td>" . $fila["fecha"] . "</td>";
            echo "<td>" . $fila["descripcion"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron eventos registrados.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>

</body>
</html>
