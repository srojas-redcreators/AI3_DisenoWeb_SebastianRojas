<?php

// Clase encargada de conectar PHP con MySQL
class conexion
{
    public function conectar(): PDO
    {
        // Cargar la configuración de la base de datos
        $config = require __DIR__ . '/../config/database.php';

        // Datos necesarios para establecer la conexión
        $dsn = "mysql:host={$config['host']};"
             . "port={$config['port']};"
             . "dbname={$config['dbname']};"
             . "charset={$config['charset']}";

        // Opciones de seguridad y manejo de resultados
        $opciones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        // Crear y devolver la conexión
        return new PDO(
            $dsn,
            $config['user'],
            $config['password'],
            $opciones
        );
    }
}
