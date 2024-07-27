<?php
print("Modelo");
class EmpleadoModelo {
    private PDO $conexion;

    public function __construct() {
        global $conexion;
        $this->conexion = $conexion;
    }

    // == Modelo para consultar empelados en la BD == //

    public function obtenerEmpleados(): array {
        $statement = $this->conexion->query("SELECT * FROM empleados");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // == Modelo para agregar empleados en la BD == //

public function agregarEmpleado(string $nombre, string $cargo, int $salario): bool {
    try {
        $statement = $this->conexion->prepare("INSERT INTO empleados (nombre, cargo, salario) VALUES (?, ?, ?)");
        return $statement->execute([$nombre, $cargo, $salario]);
    } catch (PDOException $e) {
        exit("Error al agregar el empleado: " . $e->getMessage());
    }
}


}
?>