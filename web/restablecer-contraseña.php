
<htm>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../restablecer-contraseña.css">
        <title>Restablecer Contraseña</title>
    </head>
    <body>
        <div class="reset-password-container">
                   <div class="reset-box">
                    <img src="../imagenes\logo.jpg" alt="Logo" class="logo">
            <h1>Restablecer Contraseña</h1>
            <p>Introduzca su nueva contraseña a continuación:</p>
            <form action="procesar-restablecer-contrasena.php" method="post">
                <div class="form-group">
                    <label for="new-password">Nueva Contraseña:</label>
                    <input type="password" id="new-password" name="new-password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirmar Contraseña:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <div class="form-button">
                    
                    <button type="submit" value="Restablecer Contraseña">Restablecer Contraseña</button>
                </div>
            </form>
            </div>
        </div>
    </body>
</htm>