<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosIndex.css">
    <title>Plataforma de Mujeres Emprendedoras</title>
</head>
<body>
    <header>
        <h1>Mujeres Emprendedoras</h1>
        <a href="principal.html">Volver</a>
    </header>

    <main>
        <section>
            <div class="filtro-busqueda">
                <label for="filtrarPor">Filtrar por:</label>
                <select id="filtrarPor">
                    <option value="todos">Todos</option>
                    <option value="encargadaPersonal">Encargada del personal</option>
                    <option value="secundaria">Emprendedora secundaria</option>
                    <option value="brindarInformacion">Brindar información</option>
                    <option value="apoyo">Brindar apoyo</option>
                </select>
            </div>
        </section>
        <br><br>
        <section>

            <div class="emprendedora-card" data-tipo="encargadaPersonal">
                <h2>Emprendedora 1</h2>
                <p>Encargada del personal de emprendedoras.</p>
                <a href="#">Ver perfil</a>
            </div>

            <div class="emprendedora-card" data-tipo="secundaria">
                <h2>Emprendedora 2</h2>
                <p>Emprendedora secundaria, encargada de agentes emprendedoras.</p>
                <a href="#">Ver perfil</a>
            </div>

            <div class="emprendedora-card" data-tipo="brindarInformacion">
                <h2>Emprendedora 3</h2>
                <p>Emprendedora encargada de brindar información a nuevas personas.</p>
                <a href="#">Ver perfil</a>
            </div>

            <div class="emprendedora-card" data-tipo="apoyo">
                <h2>Emprendedora 4</h2>
                <p>Emprendedora que brinda apoyo a las nuevas emprendedoras.</p>
                <a href="#">Ver perfil</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Mujeres Emprendedoras</p>
    </footer>

</body>
</html>
