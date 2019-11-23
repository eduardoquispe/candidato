<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$destinatario = 'eduardoquispe344@gmail.com';
$asunto = 'Nueva propuesta de '.$email;

$carta = "De: {$name} \n";
$carta .= "Correo: {$email}";
$carta .= "Mensaje: {$message}";
/*
$respuesta= mail(destinatario, $asunto, $carta);

$estado = array('estado'=> true);
echo json_encode($estado);
*/
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'eduardoquispe344@gmail.com';                     // SMTP username
    $mail->Password   = 'jfedaadmdhdyvusc';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('eduardoquispe344@gmail.com', 'Eduardo');
    $mail->addAddress('eduardoquispe344@gmail.com', 'Eduardo');     // Add a recipient
    

      // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $destinatario;
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();
    $estado = array('estado'=> true);
    echo json_encode($estado);
} catch (Exception $e) {
    $estado = array('estado'=> false);
    echo json_encode($estado);
}