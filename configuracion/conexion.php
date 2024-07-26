<?php

// === CONFIGURACIÓN DE PARÁMETROS DE CONEXIÓN A LA BASE DE DATOS === //

$dsn = 'mysql:host=localhost;port=3306;dbname=payroll_db'; //Definir el nombre de la fuente de datos (DSN) para la conexión PDO//
$username = 'root'; //Definir el nombre de usuario para la conexión a la base de datos//
$password = ''; //Definir la contraseña para la conexión a la base de datos//

// === INTENTAR CONECTAR A LA BASE DE DATOS === //
try {
    $conexion = new PDO($dsn, $username, $password); //Crear una nueva conexión a la base de datos usando PDO//
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Configurar PDO para lanzar excepciones en caso de error//
    echo "Conexión exitosa";
// === MANEJO DE EXCEPCIONES === //
} catch (PDOException $e) { // Captura cualquier excepción de tipo PDOException lanzada en el bloque try//
    echo "Error de conexión a la base de datos " . $e->getMessage(); // Muestra un mensaje de error personalizado seguido de la descripción del error//
    die(); // Termina la ejecución del script inmediatamente para evitar continuar con un estado inconsistente//
}

?>