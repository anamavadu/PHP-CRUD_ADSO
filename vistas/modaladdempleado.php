<div id="modalAgregarEmpleado" class="modal" style="display:block;">
    <div class="modal-content">
        <span class="close" onclick="cerrarModal()">&times;</span>
        <h2>Agregar Empleado</h2>
        <form id="formulario-empleado" method="post" action="index.php">
            <input type="hidden" name="accion" value="agregar_empleado">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="cargo">Cargo:</label><br>
            <input type="text" id="cargo" name="cargo" required><br>
            <label for="salario">Salario:</label><br>
            <input type="number" id="salario" name="salario" required><br>
            <div class = "button-container">
            <button type="submit">Agregar</button>
            </div>
        </form>
    </div>
</div>
<script>
    // == Función para cerrar el modal == //
    function cerrarModal() {
        document.getElementById('modalAgregarEmpleado').style.display = 'none';
    }
</script>