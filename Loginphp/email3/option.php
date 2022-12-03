<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sonia77mlm@gmail.com';                     //SMTP username
    $mail->Password   = 'veronica2005';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sonia77mlm@gmail.com', 'Sonia phpmailer');
    $mail->addAddress('c.morell@removegroup.com');     //Add a recipient


    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperar contraseña desde option.php (email3)';
    $mail->Body    = '<b>Hola!</b>Este es un correo de prueba ';
    

    $mail->send();
    echo 'El mensaje se envió correctamente!';
} catch (Exception $e) {
    echo "Error al envair el mensaje {$mail->ErrorInfo}";

}
?>