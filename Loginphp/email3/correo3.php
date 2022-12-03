<?php
   /* if(isset($_POST['enviar'])){
        if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])){
            $name = $_POST['name'];
            $asunto = $_POST['asunto'];
            $msg = $_POST['msg'];
            $email = $_POST['email'];
            $header = "From: noreply@example.com" . "\r\n";
            $header.= "Reply-To: c.morell@removegroup.com" . "\r\n";
            $header.= "X-Mailer: PHP/" . phpversion();
            $mail = mail($email,$asunto,$msg,$header);
            if($mail){
                echo "<h4> Mail enviado exitosamente desde la plantilla formulario.php!</h4>";
            }


        }
    }*/

    
$headers = "MIME-Version: 1.0\r\n";
$headers .=  'Content-Type: text/html; charset=utf-8' . "\r\n";
//dirección del remitente
$headers .= "From: miaplicacion.com <hola@miaplicacion.com >\r\n";
//dirección de respuesta, si queremos que sea distinta que la del remitente
$headers .= "Reply-To: hola@miaplicacion.com \r\n";
//ruta del mensaje desde origen a destino
$headers .= "Return-path: hola@miaplicacion.com \r\n";
/*$mailhtml = plantillaMailHtml($asunto,$body,$URLpedido);*/
$mailhtml = "<h1>Hola! Para recuperar tu contraseña pulsa en el siguiente enlace: <br>https://oropres.es/practicaSonia/loginphp/email2/recuperar.php</br></h1>";
$mailDestino = "sonia77mlm@gmail.com";
$asunto = "Recuperar contraseña";
mail($mailDestino,$asunto,$mailhtml,$headers);

?>