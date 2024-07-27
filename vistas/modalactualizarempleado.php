<div id="modalActualizarEmpleado" class="modal" style="display:block;">
    <div class="modal-content">
        <span class="close" onclick="cerrarModal()">&times;</span>
        <h2>Actualizar Empleado</h2>
        <form id="formulario-actualizar-empleado" method="post" action="index.php">
            <input type="hidden" name="accion" value="actualizar_empleado">
            <input type="hidden" name="id" value="<?= $empleado['id'] ?>">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" value="<?= $empleado['nombre'] ?>" required><br>
            <label for="cargo">Cargo:</label><br>
            <input type="text" id="cargo" name="cargo" value="<?= $empleado['cargo'] ?>" required><br>
            <label for="salario">Salario:</label><br>
            <input type="number" id="salario" name="salario" value="<?= $empleado['salario'] ?>" step="0.01" required><br><br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</div>

<script>
    // Función para cerrar el modal //
    function cerrarModal() {
        document.getElementById('modalActualizarEmpleado').style.display = 'none';
    }
</script>