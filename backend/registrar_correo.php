<?php include 'conexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $sql = "SELECT * FROM usuario WHERE correo = '$email'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "ssl";
            $mail->Debugoutput = 'html';
            $mail->Host = 'smtp.gmail.com';
            $mail->Username = 'salylopez0723@gmail.com';
            $mail->Password = 'hgrd xpkl eery ofba';
            $mail->Port = 465;
            $mail->setFrom('salylopez0723@gmail.com', 'Stephanie');
            $mail->addAddress('stephanielopezfrias@gmail.com', ' Stephanie');
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->isHTML(true);
            $mail->Subject = 'recuperacion de contraseña ';
            $mail->Body = '<!DOCTYPE html>
            <html>
            
            <head>
                <meta charset="UTF-8">
                <title>Vista del Documento</title>
            </head>
            
            <body style="
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;">
                <div class="container" style="max-width: 600px;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1)">
                    <h1 class="company-name" style="  text-align: center;
                    margin-bottom: 20px;
                    font-size: 24px;
                    font-weight: bold">On the ocean shore</h1>
                    <div class="document-content" style="
                    font-size: 16px;
                    line-height: 1.5;">
            
                        <p>Este es un correo unicamente para reestablecer la contraseña. Porfavor no devolver el mensaje, presione
                            el link de REESTABLECER.</p>
                    </div>
                    <div class="reset-password-link" style="text-align: center;
                    margin-top: 20px;">
                        <a style="   color: #007bff;
                        text-decoration: none;" href="localhost/Inventario/web/restablecer-contraseña.php">Reestablecer
                            contraseña</a> 
                    </div>
                </div>
            </body>
            
            </html>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if (!$mail->send()) {

                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            } else {
                echo 'Message has been sent';
                header("Location: ../web/login.php");

            }
            $mail->smtpClose();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Message could not be sent. Mailer Error:";
        header("Location: ../web/forgot-password.php");
    }
}



?>