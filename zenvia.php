<?php

require("class.phpmailer.php");
require 'PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPAuth = true;

$mail->SMTPDebug = 2;

$mail->Host = "mailhub.interman.com.ar";

$mail->Username = "ensiweb@ensi-comex.com.ar";

$mail->Password = "P0l1m3r0s";

$mail->Port = 25;

$mail->From = "ensiweb@ensi-comex.com.ar";

$mail->FromName = "Web Ensi";
 
$mail->AddAddress("ricardot@ifono.net");

$mail->Subject = "Test";

$body = "Correo de prueba desde la web de Ensi" ;

$mail->Body = $body;

$exito = $mail->Send();

if ($exito){ echo "El correo fue enviado correctamente."; }

else { echo "Hubo un problema. Contacta a un administrador."; }

?>