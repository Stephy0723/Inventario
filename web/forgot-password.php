<?php include('../backend/registrar_correo.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylos/forgot-password.css">
    <title>Recuperar Contraseña</title>
</head>

<body>
    <div class="forgot-password-container">
        <div class="forgot-password-box">
            <img src="../imagenes\logo.jpg" alt="Logo de la empresa" class="logo">
            <h2>Recuperar Contraseña</h2>
            <p>Ingresa tu dirección de correo electrónico para restablecer tu contraseña.</p>
            <form method="post" action="forgot-password.php">
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit">Enviar Enlace de Recuperación</button>

            </form>
        </div>
    </div>
</body>

</html>