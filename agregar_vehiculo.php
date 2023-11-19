<?php
include 'db.php';

$descripcion = $_POST['descripcion'];
$imagen_url = $_POST['imagen_url'];
// Agrega más campos según tus necesidades

$sql = "INSERT INTO vehiculos (descripcion, imagen_url, ...) VALUES ('$descripcion', '$imagen_url', ...)";

if ($conn->query($sql) === TRUE) {
    echo "Vehículo agregado con éxito";
} else {
    echo "Error al agregar el vehículo: " . $conn->error;
}

$conn->close();
?>
