<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "JoseMendoza"; // Cambia esto por tu usuario de MySQL
$password = "Joseñirky"; // Cambia esto por tu contraseña de MySQL
$dbname = "formulario_contacto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
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
$terminos = isset($_POST['terminos']) ? 1 : 0;

// Insertar datos en la tabla
$sql = "INSERT INTO contactos (nombre, email, telefono, asunto, tipoConsulta, preferenciaContacto, fechaContacto, horaContacto, mensaje, terminos) 
        VALUES ('$nombre', '$email', '$telefono', '$asunto', '$tipoConsulta', '$preferenciaContacto', '$fechaContacto', '$horaContacto', '$mensaje', '$terminos')";

if ($conn->query($sql) === TRUE) {
    echo "Formulario enviado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
