<?php include 'conexion.php'; 
$contrasena = $_POST['contrasena'];
$nuevaContrasena = $_POST['nueva_contrasena'];

$sql = "SELECT contrasena FROM usuarios WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $contrasenaExistente = $row["contrasena"];

    if ($nuevaContrasena != $contrasenaExistente) {
        $sqlUpdate = "UPDATE usuarios SET contrasena = '$nuevaContrasena' WHERE id = 1"; 
        if ($conn->query($sqlUpdate) === TRUE) {
            echo "Contraseña actualizada correctamente.";
        } else {
            echo "Error al actualizar la contraseña: " . $conn->error;
        }
    } else {
        echo "La nueva contraseña debe ser diferente a la existente.";
    }
} 


// Cerrar la conexión
$conn->close();
?>