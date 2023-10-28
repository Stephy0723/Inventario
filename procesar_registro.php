<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];


    if ($contrasena !== $confirmar_contrasena) {
        echo "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";
    } else {

        $servername = "localhost";
        $username_db = "root";
        $password_db = "";
        $database = "inventario";
        try {
            $conn = new PDO("sqlsrv:Server=$servername;Database=$database;ConnectionPooling=0", "Stephy0723", "stephy0723");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $e->getMessage();

        }
        print($conn);
        $conn = new mysqli($servername, $username_db, $password_db, $database);

        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT); 
        $sql = "INSERT INTO usuarios (nombre, apellido, cedula, correo, usuario, contraseña) 
                VALUES ('$nombre', '$apellido', '$cedula', '$correo', '$usuario', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso. ¡Bienvenido, $nombre!";
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
        }

        $conn->close();
    }
} else {
    header("Location: registro.html");
}
?>