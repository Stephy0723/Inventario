<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylos/login.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="../imagenes\logo.jpg" alt="Logo" class="logo">
            <h2>Iniciar sesión</h2>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Iniciar sesión</button>
                <a href="forgot-password.html" class="forgot-password">¿Olvidaste tu contraseña?</a>
            </form>
        </div>
    </div>
</body>
</html>
