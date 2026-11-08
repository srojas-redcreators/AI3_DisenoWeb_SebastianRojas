<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Estudiante</title>
</head>
<body>

    <h1>Sistema de Registro de Estudiantes</h1>

    <h2>Registrar nuevo estudiante</h2>

    <form action="procesar.php" method="post">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"
               required maxlength="80">
        <br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido"
               required maxlength="80">
        <br><br>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo"
               required maxlength="120">
        <br><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono"
               maxlength="20">
        <br><br>

        <label for="carrera">Carrera:</label>
        <input type="text" id="carrera" name="carrera"
               required maxlength="100">
        <br><br>

        <button type="submit">Registrar estudiante</button>

    </form>

    <br>

    <a href="index.php">Ver estudiantes registrados</a>

</body>
</html>
