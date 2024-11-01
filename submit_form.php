<?php
// Configuración de la base de datos
$host = 'localhost';            // Host de la base de datos
$db = 'contactos_website';      // Nombre de la base de datos
$user = 'JoseMendoza';           // Usuario de la base de datos
$password = 'Joseñirky';    // Contraseña de la base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$tipoConsulta = $_POST['tipoConsulta'];
$preferenciaContacto = $_POST['preferenciaContacto'];
$fechaContacto = $_POST['fechaContacto'];
$horaContacto = $_POST['horaContacto'];
$mensaje = $_POST['mensaje'];

// Preparar y ejecutar la consulta
$stmt = $conn->prepare("INSERT INTO contactos (nombre, email, telefono, asunto, tipoConsulta, preferenciaContacto, fechaContacto, horaContacto, mensaje) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $nombre, $email, $telefono, $asunto, $tipoConsulta, $preferenciaContacto, $fechaContacto, $horaContacto, $mensaje);

if ($stmt->execute()) {
    echo "Información enviada correctamente.";
} else {
    echo "Error al enviar la información: " . $stmt->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
