# Sistema de Registro de Estudiantes

## Actividad Integradora 3 - Programación Web

Estudiante: Sebastian Rojas Barberan  
Universidad: ECOTEC  
Asignatura: Programación Web

## Descripción del proyecto

Este proyecto consiste en el desarrollo de un sistema web
para registrar y consultar información de estudiantes,
utilizando PHP y una base de datos MySQL.

El sistema permite ingresar nuevos estudiantes mediante
un formulario HTML y visualizar los registros almacenados
en una tabla responsiva.

## Tecnologías utilizadas

- HTML5
- CSS3
- PHP
- MySQL
- PDO (PHP Data Objects)
- XAMPP
- Git y GitHub

## Funcionalidades

- Registro de estudiantes.
- Consulta de estudiantes registrados.
- Validaciones HTML5 y PHP.
- Consultas preparadas mediante PDO.
- Protección de salida HTML con htmlspecialchars().
- Diseño adaptable a dispositivos móviles.
- Manejo de errores mediante try-catch.

## Estructura del proyecto

AI3_DisenoWeb_SebastianRojas/
- class/
  - conexion.php
- config/
  - database.example.php
- models/
  - estudiante.php
- css/
  - estudiantes.css
- js/
  - estudiantes.js
- index.php
- ingreso.php
- procesar.php
- probar.php
- db_sistema_web.sql
- README.md
- .gitignore

El archivo config/database.php se utiliza únicamente
en el entorno local y no se realiza la publicacion en GitHub.

## Instalación y ejecución

1. Instalar XAMPP con Apache, MySQL y PHP.
2. Copiar la carpeta del proyecto dentro de htdocs.
3. Iniciar Apache y MySQL desde el panel de XAMPP.
4. Abrir phpMyAdmin en http://localhost/phpmyadmin.
5. Importar el archivo db_sistema_web.sql.
6. Copiar config/database.example.php como
   config/database.php.
7. Modificar las credenciales de conexión según
   la configuración local de MySQL.
8. Abrir el sistema desde:

http://localhost/AI3_DisenoWeb_SebastianRojas/index.php

## Base de datos

Nombre: db_sistema_web

Tabla principal: estudiantes

Campos:
- id
- nombre
- apellido
- correo
- telefono
- carrera
- fecha_creacion

La columna id es la clave primaria autoincremental.
La columna fecha_creacion registra automáticamente
la fecha y hora de inserción.

## Seguridad

Se utiliza PDO para establecer la conexión con MySQL.

Las inserciones se realizan mediante sentencias preparadas
con parámetros, reduciendo el riesgo de inyección SQL.

Los datos enviados por el formulario se validan en PHP
antes de almacenarse.

Los registros se muestran utilizando htmlspecialchars()
para evitar que el navegador interprete contenido HTML
introducido por los usuarios.

El archivo de configuración local se excluye del
repositorio mediante .gitignore.

## Control de versiones

El proyecto utiliza Git y GitHub para registrar los
cambios realizados durante su desarrollo.

Repositorio:
https://github.com/srojas-redcreators/AI3_DisenoWeb_SebastianRojas

## Autor

Sebastian Rojas Barberan
Universidad ECOTEC

