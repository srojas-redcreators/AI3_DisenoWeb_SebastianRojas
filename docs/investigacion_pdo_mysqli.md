# Investigación: PDO vs. MySQLi

## 1. Introducción

PHP permite conectarse a bases de datos mediante herramientas como PDO y MySQLi. Ambas sirven para guardar y consultar información, pero tienen algunas diferencias.

## 2. Diferencias principales

**Arquitectura:** MySQLi trabaja con MySQL y MariaDB, mientras que PDO permite conectarse a diferentes bases de datos, como MySQL, PostgreSQL y SQLite.

**Rendimiento:** Las dos ofrecen un buen rendimiento. La velocidad depende principalmente de las consultas y de cómo esté configurado el sistema.

**Seguridad:** Ambas permiten utilizar consultas preparadas para prevenir la inyección SQL. PDO también facilita el manejo de errores mediante excepciones.

## 3. ¿Por qué utilizamos PDO?

Para nuestro sistema de registro de estudiantes elegimos PDO porque permite organizar mejor el código y facilita la conexión con la base de datos.

Además, utilizamos `prepare()` y `execute()` para registrar estudiantes de forma segura y `htmlspecialchars()` para mostrar la información sin ejecutar código HTML.

## 4. Conclusión

Tanto PDO como MySQLi son buenas opciones para trabajar con PHP. En nuestro proyecto utilizamos PDO porque es práctico, seguro cuando se implementa correctamente y permite trabajar con diferentes bases de datos.

## 5. Referencias

- PDO: https://www.php.net/manual/es/book.pdo.php
- MySQLi: https://www.php.net/manual/es/book.mysqli.php
- Consultas preparadas: https://www.php.net/manual/es/pdo.prepared-statements.php