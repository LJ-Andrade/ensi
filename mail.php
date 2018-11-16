<?php

    use PHPMailer\PHPMailer\PHPMailer;

    use PHPMailer\PHPMailer\Exception;

    require 'vendor/PHPMailer/src/Exception.php';

    require 'vendor/PHPMailer/src/PHPMailer.php';

    require 'vendor/PHPMailer/src/SMTP.php';

    $name = addslashes( $_POST[ 'name' ] );

    $email = addslashes( $_POST[ 'email' ] );

    $phone = addslashes( $_POST[ 'phone' ] );

    $message = addslashes( $_POST[ 'message' ] );

    if ( preg_match("/^[a-zA-Z ]*$/", $name) && filter_var( $email, FILTER_VALIDATE_EMAIL ) && $message )
    {

        $body = 'Nombre: <b>' . $name . '</b><br>' .
                'Email: <b>' . $email . '</b><br>' .
                'Telefono: <b>' . $phone . '</b><br>' .
                'Mensaje: <br><b>' . $message . '</b><br><br><br>' .
                'Este mensaje ha sido generado automaticamente desde el sitio web';


        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'mailhub.interman.com.ar';            // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'ensiweb ';                           // SMTP username
            $mail->Password = 'P0l1m3r0s';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom( $email, $name );
            $mail->addAddress( 'info@ensi-comex.com.ar', 'ENSI S.R.L.');     // Add a recipient
            $mail->addReplyTo( $email, $name );
            // $mail->addCC( 'cc@example.com' );
            $mail->addBCC( 'romero.m.alejandro@gmail.com' );

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Contacto desde sitio web';

            $mail->Body    = $body;

            $mail->AltBody = $body;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {

            echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;

        }

    }

?>
