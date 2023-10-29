<?php include 'conexion.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

if ($result !== false) {
    if ($result->num_rows > 0) {
        echo "Inicio de sesión exitoso.";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
} else {
    echo "Error en la consulta: " . $conn->error;
}

$conn->close();

?>