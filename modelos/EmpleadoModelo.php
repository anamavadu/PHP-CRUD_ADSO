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

// == Modelo para consultar UN empleado en la BD por su ID == //
public function obtenerEmpleadoPorId(int $id): array {
    $statement = $this->conexion->prepare("SELECT * FROM empleados WHERE id = ?");
    $statement->execute([$id]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

// == Modelo para Actualizar UN empleado en la BD por su ID == //
public function actualizarEmpleado(int $id, string $nombre, string $cargo, int $salario): bool {
    try {
        $statement = $this->conexion->prepare("UPDATE empleados SET nombre = ?, cargo = ?, salario = ? WHERE id = ?");
        return $statement->execute([$nombre, $cargo, $salario, $id]);
    } catch (PDOException $e) {
        exit("Error al actualizar el empleado: " . $e->getMessage());
    }
}

// == Modelo para Eliminar UN empleado en la BD por su ID == //
public function eliminarEmpleado(int $id): bool {
    try {
        $statement = $this->conexion->prepare("DELETE FROM empleados WHERE id = ?");
        return $statement->execute([$id]);
    } catch (PDOException $e) {
        exit("Error al eliminar el empleado: " . $e->getMessage());
    }
}


}
?>