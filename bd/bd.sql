-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS `payroll_db`;

-- Usar la base de datos
USE `payroll_db`;

-- Crear la tabla de empleados
CREATE TABLE IF NOT EXISTS `empleados` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(255) NOT NULL,
    `cargo` VARCHAR(255) NOT NULL,
    `salario` INT NOT NULL
);

-- Insertar datos de ejemplo
INSERT INTO `empleados` (`nombre`, `cargo`, `salario`) VALUES
('Juan Pérez', 'Gerente', 3000000),
('María López', 'Vendedora', 2500000),
('Carlos Martínez', 'Repartidor', 2000000);