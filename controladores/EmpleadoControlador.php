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

// Controlador para Mostrar formulario, con UN empleado por SU ID //
public function mostrarFormularioActualizarEmpleado(int $id): void {
    $empleado = $this->modeloEmpleado->obtenerEmpleadoPorId($id);
    include './Vistas/modalactualizarempleado.php';
}

// Controlador para Actualizar empleado por su ID //
public function actualizarEmpleado(): void {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $cargo = $_POST['cargo'];
        $salario = $_POST['salario'];
        $exito = $this->modeloEmpleado->actualizarEmpleado($id, $nombre, $cargo, $salario);
        if ($exito) {
            header("Location: index.php");
            exit();
        } else {
            exit("Error al actualizar el empleado");
        }
    }
}

}
?>