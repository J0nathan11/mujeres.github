<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosAdmin.css">
    <title>Formulario de Permisos</title>
</head>
<body>

    <header>
        <h1>Panel de Administrador</h1>
        <a href="controlAdmin.html">Volver</a>
    </header>

    <main>
        <section>
            <h1 style="text-align: center;">Control de Roles y Permisos</h1>
            
            <form id="formularioPermisos">
                <label for="nombreAgente">Nombre de la Agente Emprendedora:</label>
                <input type="text" id="nombreAgente" name="nombreAgente" required>

                <label for="rolSeleccionado">Rol:</label>
                <select id="rolSeleccionado" name="rolSeleccionado">
                    <option value="administrador">Administrador</option>
                    <option value="agente">Agente Emprendedora</option>
                    <option value="auxiliar">Agente Auxiliar</option>
                </select>

                <h3>Permisos a otorgar:</h3>

                <label>
                    <input type="checkbox" id="permiso1">Administración total de la página
                </label>
                <label>
                    <input type="checkbox" name="permiso2">Control de perfiles
                </label>
                <label>
                    <input type="checkbox" name="permiso3">Ingreso de talleres y eventos
                </label>
                <label>
                    <input type="checkbox" name="permiso4">Ingreso de foros y experiencias
                </label>
                <label>
                    <input type="checkbox" name="permiso5">Solo visualización
                </label>

                <button type="submit">Otorgar Permisos</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Plataforma de Mujeres Emprendedoras</p>
    </footer>

    <script src="admin.js"></script>
</body>
</html>
