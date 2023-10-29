<?php include 'conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];
    if ($contrasena !== $confirmar_contrasena) {
        echo "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";

        header("Location: ./index.php");
    } else {
        // echo $nombre, 'Hola';
        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario  (nombre, apellido, cedula, correo, usuario, contrasena) 
            VALUES ('$nombre', '$apellido', '$cedula', '$email', '$usuario', '$contrasena')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($result == 1) {
            echo "Registro exitoso. ¡Bienvenido, $nombre!";
            header("Location: ./web/login.php");
        } else {
            echo "Error en $nombre!";
            header("Location:  ./index.php");
        }

    }
}
?>