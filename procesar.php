<?php

require_once __DIR__ . '/class/conexion.php';
require_once __DIR__ . '/models/estudiante.php';

// Comprobar que el formulario se envió mediante POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ingreso.php');
    exit;
}

// Recibir los datos del formulario
$nombre = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$correo = $_POST['correo'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$carrera = $_POST['carrera'] ?? '';

// Comprobar que todos los valores sean textos
if (
    !is_string($nombre) ||
    !is_string($apellido) ||
    !is_string($correo) ||
    !is_string($telefono) ||
    !is_string($carrera)
) {
    http_response_code(400);
    exit('Los datos ingresados no son válidos.');
}

// Eliminar espacios innecesarios
$nombre = trim($nombre);
$apellido = trim($apellido);
$correo = trim($correo);
$telefono = trim($telefono);
$carrera = trim($carrera);

// Validar los campos obligatorios
if (
    $nombre === '' ||
    $apellido === '' ||
    $correo === '' ||
    $carrera === ''
) {
    exit('Debe completar todos los campos obligatorios.');
}

// Validar la longitud de los campos
if (
    mb_strlen($nombre, 'UTF-8') > 80 ||
    mb_strlen($apellido, 'UTF-8') > 80 ||
    mb_strlen($correo, 'UTF-8') > 120 ||
    mb_strlen($telefono, 'UTF-8') > 20 ||
    mb_strlen($carrera, 'UTF-8') > 100
) {
    exit('Uno de los campos supera la longitud permitida.');
}

// Validar el formato del correo electrónico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    exit('El correo electrónico no es válido.');
}


// Validar que nombre y apellido contengan letras
if (
    !preg_match('/\p{L}/u', $nombre) ||
    !preg_match('/\p{L}/u', $apellido)
) {
    exit('El nombre y el apellido deben contener letras.');
}


// El teléfono es opcional
if ($telefono === '') {
    $telefono = null;
}

// Registrar el estudiante en la base de datos
try {
    $conexion = new conexion();
    $db = $conexion->conectar();

    $modelo = new estudiante($db);

    $modelo->registrar(
        $nombre,
        $apellido,
        $correo,
        $telefono,
        $carrera
    );

    // Volver a la lista de estudiantes
    header('Location: index.php', true, 303);
    exit;

} catch (PDOException $e) {
    error_log($e->getMessage());
    exit('No se pudo registrar el estudiante. Intente nuevamente.');
}
