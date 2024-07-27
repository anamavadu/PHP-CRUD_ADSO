<?php
print("<br>Controlador<br>");

require_once './modelos/EmpleadoModelo.php';

class EmpleadoControlador {
    private EmpleadoModelo $modeloEmpleado;

    public function __construct() {
        $this->modeloEmpleado = new EmpleadoModelo();
    }

// Controlador para mostrar empleados //

    public function mostrarEmpleados() {
        $empleados = $this->modeloEmpleado->obtenerEmpleados();
        include './vistas/empleados_view.php';
    }

// Controlador para mostrar formulario //
public function mostrarFormularioAgregarEmpleado(): void {
    include './Vistas/modaladdempleado.php';
}

// Controlador para adicionar empleados //
public function agregarEmpleado(): void {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = $_POST['nombre'];
        $cargo = $_POST['cargo'];
        $salario = $_POST['salario'];
        $exito = $this->modeloEmpleado->agregarEmpleado($nombre, $cargo, $salario);
        if ($exito) {
            header("Location: index.php");
            exit();
        } else {
            exit("Error al agregar empleado");
        }
    }
}


}
?>