<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';


function sendEmail($subject, $htmlContent){

      global  $config;  // on rend local les infos du fichier $config

      $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
      try {
            //Server settings
            //$mail->SMTPDebug = 2;                                 // décommenter en cas de non fonctionnement de l'envois (de base à 2, on peut mettre 4 pour avoir plus d'infos)
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = $config['MAIL_HOST'];  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = $config['MAIL_USERNAME'];                 // SMTP username
            $mail->Password = $config['MAIL_PASSWORD'];                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to


            $mail->SMTPOptions = array(
                  'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                  )
            );

            //Recipients
            $mail->setFrom('jeremydeumer@gmail.com', 'Jérémy');
            $mail->addAddress('jeremydeumer@gmail.com', 'Jérémy');     // Add a recipient

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = '<b>'.$htmlContent.'</b>';

            $mail->send();


            //if echo 'Message has been sent'
            // => send true if message send
            $emailSent = true;


      } catch (Exception $e) {
      //echo 'Message could not be sent.';
      //echo 'Mailer Error: ' . $mail->ErrorInfo;
      $emailSent = false;
      $emailError = $mail->ErrorInfo;
      }
}
