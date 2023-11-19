<?php
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "icarplus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear tabla de vehículos
$sql = "CREATE TABLE IF NOT EXISTS vehiculos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(255),
    imagen_url VARCHAR(255),
    marca VARCHAR(50),
    modelo VARCHAR(50),
    tipo VARCHAR(50),
    año INT,
    clasificacion VARCHAR(50),
    repuesto_asignado BOOLEAN
)";

if ($conn->query($sql) === FALSE) {
    echo "Error al crear la tabla de vehículos: " . $conn->error;
}

$conn->close();
?>
