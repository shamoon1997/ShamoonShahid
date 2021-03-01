<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$mail = new PHPMailer(true);
$alert = '';
if (isset($_POST['submit'])) {
    try {
      $mail->isSMTP();
      $mail->Host = $_ENV['SMTP_HOST'];
      $mail->Port = (int)$_ENV['SMTP_PORT'];
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'tls';
      $mail->Username = $_ENV['SMTP_USERNAME'];
      $mail->Password = $_ENV['SMTP_PASSWORD'];
      $mail->setFrom($email, $name);
      $mail->addAddress($_ENV['SMTP_EMAIL']);
      $mail->isHTML(true);
      $mail->Subject = "Shamoon Shahid Contact Page";
      $mail->Body = "<h3>Name : $name <br> Email: $email <br> Message: $message <h3>";
      $mail->send();
  }



}