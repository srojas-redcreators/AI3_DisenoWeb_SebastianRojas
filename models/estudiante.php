<?php

// Modelo para trabajar con la tabla estudiantes
class estudiante
{
    private PDO $db;

    // Recibir la conexión a la base de datos
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // Consultar todos los estudiantes registrados
    public function listar(): array
    {
        $sql = 'SELECT id, nombre, apellido, correo, telefono, carrera, fecha_creacion
                FROM estudiantes
                ORDER BY id';

        $consulta = $this->db->prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll();
    }
    
    
    // Registrar un nuevo estudiante en MySQL
    public function registrar(
        string $nombre,
        string $apellido,
        string $correo,
        ?string $telefono,
        string $carrera
    ): bool {

        $sql = 'INSERT INTO estudiantes
                (nombre, apellido, correo, telefono, carrera)
                VALUES
                (:nombre, :apellido, :correo, :telefono, :carrera)';

        $consulta = $this->db->prepare($sql);

        return $consulta->execute([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'correo' => $correo,
            'telefono' => $telefono,
            'carrera' => $carrera
        ]);
    }

}
