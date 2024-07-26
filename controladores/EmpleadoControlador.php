<?php
print("<br>Controlador<br>");

require_once './modelos/EmpleadoModelo.php';

class EmpleadoControlador {
    private EmpleadoModelo $modeloEmpleado;

    public function __construct() {
        $this->modeloEmpleado = new EmpleadoModelo();
    }

    public function mostrarEmpleados() {
        $empleados = $this->modeloEmpleado->obtenerEmpleados();
        include './vistas/empleados_view.php';
    }

}
?>