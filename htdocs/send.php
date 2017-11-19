<?php
require 'PHPMailer-master/class.phpmailer.php';
require 'PHPMailer-master/class.smtp.php';
require 'PHPMailer-master/class.pop3.php';




$mail = new PHPMailer();                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'cs.ammarn@gmail.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('cs.ammarn@gmail.com', 'Mailer');
    $mail->addAddress('cs.ammarn@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('cs.ammarn@gmail.com');               // Name is optional
    $mail->addReplyTo('cs.ammarn@gmail.com', 'Information');
    $mail->addCC('qgxx@hotmail.com');
    $mail->addBCC('te@hotmail.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}



?>