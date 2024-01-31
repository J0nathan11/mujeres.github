<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosInicio.css">
    <title>Iniciar Sesión</title>
</head>
<body>

    <header>
        <h1>Inicio de Sesión</h1>
        <a href="principal.html">Volver</a>
    </header>

    <main>
        <div class="formulario-container">
            <form action="procesar_login.php" method="post">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>

                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>

                <button type="submit">Iniciar Sesión</button>
                <br><br>
                <a href="">Olvide mi Contraseña</a>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Mujeres Emprendedoras</p>
    </footer>

</body>
</html>
