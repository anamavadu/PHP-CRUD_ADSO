<?php

require_once 'configuracion/conexion.php';
require_once 'controladores/EmpleadoControlador.php';

$controladorProducto = new EmpleadoControlador();
$controladorProducto->mostrarEmpleados();

?>