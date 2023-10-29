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
    } else {
        // echo $nombre, 'Hola';
        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario  (id,nombre, apellido, cedula, correo, usuario, contrasena,confirmar_contrasena	) 
            VALUES (1,'$nombre', '$apellido', '$cedula', '$email', '$usuario', '$hashed_password','$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso. ¡Bienvenido, $nombre!";
        } else {
            echo "Error en $nombre!";
        }

    }
    header("Location: index.php");
}
?>