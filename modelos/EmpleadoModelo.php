<?php
print("Modelo");
class EmpleadoModelo {
    private PDO $conexion;

    public function __construct() {
        global $conexion;
        $this->conexion = $conexion;
    }

    public function obtenerEmpleados(): array {
        $statement = $this->conexion->query("SELECT * FROM empleados");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>