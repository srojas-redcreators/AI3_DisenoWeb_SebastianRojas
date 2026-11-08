<?php

require_once __DIR__ . '/class/conexion.php';

try {
    $conexion = new conexion();
    $db = $conexion->conectar();

    echo 'Conexión correcta a db_sistema_web';

} catch (PDOException $e) {
    error_log($e->getMessage());
    exit('No se pudo conectar. Revise configuración y registro');
}
