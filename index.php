<?php

require_once 'configuracion/conexion.php';
require_once 'controladores/EmpleadoControlador.php';

$controladorEmpleado = new EmpleadoControlador();

// == Acciones GET == //
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $accion = $_GET['accion'] ?? '';

    switch ($accion) {
        case 'modalAdd':
            include './vistas/modaladdempleado.php';
            break;

    }

    $controladorEmpleado->mostrarEmpleados();
}

// == Acciones POST == //
elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $accion = $_POST['accion'] ?? '';

    switch ($accion) {
        case 'agregar_empleado':
            $controladorEmpleado->agregarEmpleado();
            break;

    }

    header("Location: index.php");
    exit();
}

// == Redireccionamiento por defecto == //
else {
    header("Location: index.php");
    exit();
}
?>