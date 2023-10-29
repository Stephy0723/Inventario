<?php
// URL a la que deseas redirigir
$url = 'https://www.ejemplo.com';

// Texto que se mostrará en el botón
$textoBoton = 'Ir al enlace';

// Generar el código HTML del botón de enlace
$botonEnlace = '<a href="' . $url . '">' . $textoBoton . '</a>';
?>

<!-- Mostrar el botón en el navegador -->
<!DOCTYPE html>
<html>
<head>
    <title>Botón de enlace en PHP</title>
</head>
<body>
    <?php echo $botonEnlace; ?>
</body>
</html>