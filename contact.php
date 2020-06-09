<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

$nam=$_POST['cname'];
$emai=$_POST['email'];
$sub=$_POST['subject'];
$mess=$_POST['message'];

// Load Composer's autoloader
require 'PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer;

try {
    //Server settings
    //$mail->SMTPDebug = 4;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'preethiprojectstartup@gmail.com';                     // SMTP username
    $mail->Password   = 'preethi123';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($emai, $nam);
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('preethiprojectstartup@gmail.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $sub;
    $mail->Body    = '<h1><center>NAME: '.$nam.'</center></h1><br/><br/>'.'<h4><center>EMAIL: '.$emai.'</center></h4><br/><br/>MESSAGE:'.$mess;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent.  <a href="contact.html">Click here</a> to send another mail.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}..<br/><a href='contact.html'>Click here</a> to try again...";
}