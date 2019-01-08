<?php

    // require("class.phpmailer.php");
    // require 'PHPMailerAutoload.php';
    //
    // $mail = new PHPMailer();
    //
    // $mail->IsSMTP();
    //
    // $mail->SMTPAuth = true;
    //
    // $mail->SMTPDebug = 2;
    //
    // $mail->Host = "mailhub.interman.com.ar";
    //
    // $mail->Username = "ensiweb@ensi-comex.com.ar";
    //
    // $mail->Password = "P0l1m3r0s";
    //
    // $mail->Port = 25;
    //
    // $mail->From = "ensiweb@ensi-comex.com.ar";
    //
    // $mail->FromName = "Web Ensi";
    //
    // $mail->AddAddress("ricardot@ifono.net");
    //
    // $mail->Subject = "Test";
    //
    // $body = "Correo de prueba desde la web de Ensi" ;
    //
    // $mail->Body = $body;
    //
    // $exito = $mail->Send();
    //
    // if ($exito){ echo "El correo fue enviado correctamente."; }
    //
    // else { echo "Hubo un problema. Contacta a un administrador."; }

    ///////////////////////////////////////////////////////////

    // use PHPMailer\PHPMailer\PHPMailer;
    //
    // use PHPMailer\PHPMailer\Exception;
    //
    // require 'vendor/PHPMailer/src/Exception.php';
    //
    // require 'vendor/PHPMailer/src/PHPMailer.php';
    //
    // require 'vendor/PHPMailer/src/SMTP.php';

    require( 'class.phpmailer.php' );

    require 'PHPMailerAutoload.php';

    $name = addslashes( $_POST[ 'name' ] );

    $email = addslashes( $_POST[ 'email' ] );

    $phone = addslashes( $_POST[ 'phone' ] );

    $message = addslashes( $_POST[ 'message' ] );

    if ( $name && filter_var( $email, FILTER_VALIDATE_EMAIL ) && $message )
    {

        $body = 'Nombre: <b>' . $name . '</b><br>' .
                'Email: <b>' . $email . '</b><br>' .
                'Telefono: <b>' . $phone . '</b><br>' .
                'Mensaje: <br><b>' . $message . '</b><br><br><br>' .
                'Este mensaje ha sido generado automaticamente desde el sitio web';


        // Passing 'true' enables exceptions
        $mail = new PHPMailer();

        try
        {
            //Server settings

            // Enable verbose debug output
            // $mail->SMTPDebug = 2;

            // Set mailer to use SMTP
            $mail->isSMTP();

            // Specify main and backup SMTP servers
            $mail->Host = 'mailhub.interman.com.ar';

            // Enable SMTP authentication
            $mail->SMTPAuth = true;

            // SMTP username
            $mail->Username = 'ensiweb@ensi-comex.com.ar';

            // SMTP password
            $mail->Password = 'P0l1m3r0s';

            // Enable TLS encryption, 'ssl' also accepted
            // $mail->SMTPSecure = 'tls';

            // TCP port to connect to
            $mail->Port = 25;

            //Recipients
            $mail->setFrom( 'ensiweb@ensi-comex.com.ar', $name );

            // Add a recipient
            $mail->addAddress( 'info@ensi-comex.com.ar' );

            $mail->addReplyTo( $email, $name );

            // $mail->addCC( 'cc@example.com' );

            $mail->addBCC( 'romero.m.alejandro@gmail.com' );

            //Content

            // Set email format to HTML
            $mail->isHTML( true );

            $mail->Subject = 'Contacto desde sitio web';

            $mail->Body    = $body;

            $mail->AltBody = $body;

            $mail->send();

            echo 'Message has been sent';

        } catch ( Exception $e ) {

            echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;

        }

    }else{

        echo "Wrong information";

    }

?>
