<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $descripcion = $_POST["descripcion"];
    $redes = $_POST["redes"];

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

    // Preparar la consulta SQL para insertar el perfil
    $sql = "INSERT INTO usuarios (nombre, apellido, email, descripcion, redes) VALUES ('$nombre', '$apellido', '$email', '$descripcion', '$redes')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Perfil creado exitosamente.";
        header("Location: principal.php"); // Redireccionar a principal.php
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
    <link rel="stylesheet" href="estilosCrearPer.css">
    <title>Crear Perfil</title>
</head>
<body>

    <header>
        <h1>Crear Perfil</h1>
    </header>

    <main>
        <div class="formulario-container">
            <form action="" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" rows="4" placeholder="Cuentanos sobre tus habilidades, eperiencias o negocio"></textarea>

                <label for="redes">Enlaces a Redes Sociales: (Opcional)</label>
                <input type="text" id="redes" name="redes" placeholder="Ingresa tu perfil de facebook, instagram o twitter (Opcional)">

                <button type="submit">Crear Perfil</button>
                <a href="principal.php">Cancelar</a>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Mujeres Emprendedoras</p>
    </footer>

</body>
</html>
