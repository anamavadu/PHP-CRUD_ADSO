<!-- Archivo: Vistas/empleadoview.php -->
<!-- Propósito: Vista para mostrar la lista de empleados -->

<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Empleados</title>
</head>
<body>
    <h3>CRUD de Empleados</h3>
    <a href="index.php?accion=modalAdd">Agregar Empleado ➕📁</a>
    
    <table class="table" border="1" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado): ?>
                <tr>
                    <td><?= $empleado['id'] ?></td>
                    <td><?= $empleado['nombre'] ?></td>
                    <td><?= $empleado['cargo'] ?></td>
                    <td><?= $empleado['salario'] ?></td>
                    <td>
                        <a href="index.php?accion=modalActualizar&id=<?= $empleado['id'] ?>">✏️</a>
                        <a href="index.php?accion=eliminarEmpleado&id=<?= $empleado['id'] ?>">❌</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>