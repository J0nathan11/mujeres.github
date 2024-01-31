<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $titulo = $_POST["titulo"];
    $fecha = $_POST["fecha"];
    $descripcion = $_POST["descripcion"];

    // Conexión a la base de datos
    $dbhost = "localhost";  // Cambia esto si tu servidor de base de datos está en otro lugar
    $dbuser = "root";
    $dbpass = "";
    $dbname = "mujeres";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para insertar el evento
    $sql = "INSERT INTO eventos (titulo, fecha, descripcion) VALUES ('$titulo', '$fecha', '$descripcion')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Evento o taller agregado exitosamente.";
        header("Location: eventos.php"); // Redireccionar a principal.php
        exit();
    } else {
        echo "Error al crear el perfil: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosAdminTall.css">
    <title>Agregar Talleres y Eventos</title>
</head>
<body>

    <header>
        <h1>Agregar Talleres y Eventos</h1>
        <a href="controlAdmin.php">Volver</a>
    </header>

    <main>
        <section class="formulario-container">
            <form id="formularioEventosTalleres" method="post" action="">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>
                <br><br>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required>
                <br><br>
                <label for="">Hora del taller:</label>
                <br><br>
                <label for="inihora">Inicio:</label>
                <input type="time" id="inihora" name="inihora" required>
                <br><br>
                <label for="finhora">Fin:</label>
                <input type="time" id="finhora" name="finhora" required>
                <br><br>
                <label for="descripcion">Descripción:</label>
                <br><br>
                <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
                <br><br>
                <button type="submit">Agregar Taller o Evento</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Plataforma de Mujeres Emprendedoras</p>
    </footer>

</body>
</html>
