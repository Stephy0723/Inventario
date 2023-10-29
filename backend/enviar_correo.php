<?php
$email = $_POST['email'];

$enlaceRecuperacion = 'web\restablecer-contraseña.php' . urlencode($email);

$asunto = 'Recuperación de contraseña';
$mensaje = 'Haz clic en el siguiente enlace para recuperar tu contraseña: ' . $enlaceRecuperacion;
$headers = 'From: Stephanielopezfrias"gmail.com' . "\r\n" .
           'Reply-To: Stephanielopezfrias"gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail($email, $asunto, $mensaje, $headers);

header('Location: web\restablecer-contraseña.php');
?>