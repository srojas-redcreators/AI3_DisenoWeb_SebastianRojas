<?php

require_once __DIR__ . '/class/conexion.php';
require_once __DIR__ . '/models/estudiante.php';

try {
    // Establecer la conexión con MySQL
    $conexion = new conexion();
    $db = $conexion->conectar();

    // Crear el modelo y consultar estudiantes
    $modelo = new estudiante($db);
    $estudiantes = $modelo->listar();

} catch (PDOException $e) {
    error_log($e->getMessage());
    exit('No se pudo consultar la información de los estudiantes.');
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
    <link rel="stylesheet" href="css/estudiantes.css">
</head>
<body>

    <header>
        <h1>Sistema de Registro de Estudiantes</h1>
    </header>

    <main>
        <h2>Estudiantes registrados</h2>

        <a href="ingreso.php" class="boton">+ Registrar estudiante</a>

        <?php if (empty($estudiantes)): ?>

            <p class="mensaje">No hay estudiantes registrados.</p>

        <?php else: ?>

            <div class="tabla-contenedor">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Carrera</th>
                            <th>Fecha de creación</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($estudiantes as $estudiante): ?>
                            <tr>
                                <td><?= htmlspecialchars((string) $estudiante['id'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($estudiante['nombre'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($estudiante['apellido'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($estudiante['correo'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($estudiante['telefono'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($estudiante['carrera'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($estudiante['fecha_creacion'], ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        <?php endif; ?>
    </main>

</body>
</html>

