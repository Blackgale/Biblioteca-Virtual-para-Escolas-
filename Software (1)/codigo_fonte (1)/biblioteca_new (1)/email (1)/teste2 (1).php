<?php
//include required phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
require 'includes/OAuth.php';
require 'includes/POP3.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\POP3;
//Create instance of phpmailer 

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
 $mail->SMTPAutoTLS = false;
$mail->Username = 'leandrolima.dev85@gmail.com';
$mail->Password = 'mudarsenha';
$mail->Port = 587;


$mail->setFrom('leandrolima.dev85@gmail.com');
$mail->addReplyTo('leandrolima.dev85@gmail.com');
$mail->addAddress('leandrolima85@gmail.com', 'Leandro');
$mail->addAddress('leandrolima.dev85@gmail.com', 'Contato');
$mail->addCC('leandrolima.dev85@gmail.com', 'Cópia');
$mail->addBCC('leandrolima.dev85@gmail.com', 'Cópia Oculta');


$mail->isHTML(true);
$mail->Subject = 'Assunto do email';
$mail->Body    = 'Este é o conteúdo da mensagem em <b>HTML!</b>';
$mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';
$mail->addAttachment('/tmp/image.jpg', 'nome.jpg');



if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}
?>
