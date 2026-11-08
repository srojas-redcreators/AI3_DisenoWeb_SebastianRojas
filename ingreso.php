<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Estudiante</title>
    <link rel="stylesheet" href="css/estudiantes.css">
</head>
<body>

    <header>
        <h1>Sistema de Registro de Estudiantes</h1>
    </header>

    <main>
        <div class="formulario-contenedor">

            <h2>Registrar nuevo estudiante</h2>

            <form action="procesar.php" method="post">

                <div class="grupo-formulario">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"
                           required maxlength="80">
                </div>

                <div class="grupo-formulario">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido"
                           required maxlength="80">
                </div>

                <div class="grupo-formulario">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo"
                            required maxlength="120">
                </div>

                <div class="grupo-formulario">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono"
                           maxlength="20">
                </div>

                <div class="grupo-formulario">
                    <label for="carrera">Carrera:</label>
                    <input type="text" id="carrera" name="carrera"
                           required maxlength="100">
                </div>

                <button type="submit" class="boton-enviar">
                    Registrar estudiante
                </button>

            </form>

            <a href="index.php" class="enlace-volver">
                Ver estudiantes registrados
            </a>

        </div>
    </main>

</body>
</html>
