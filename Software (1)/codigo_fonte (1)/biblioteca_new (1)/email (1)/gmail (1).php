<?php
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
$mail = new PHPMailer;
// Configura para envio de e-mails usando SMTP


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
 //$mail->SMTPAutoTLS = true;
$mail->Username = 'leandrolima.dev85@gmail.com';
$mail->Password = 'mudarsenha';
$mail->Port = 465;
 // Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);
 // Email do Remetente
$mail->From = 'leandrolima.dev85@gmail.com';
 // Nome do Remetente
$mail->FromName = 'Leandro';
 // Endereço do e-mail do destinatário
$mail->addAddress('leandrolima.dev85@gmail.com');
 // Assunto do e-mail
$mail->Subject = 'E-mail PHPMailer';
 // Mensagem que vai no corpo do e-mail
$mail->Body = '<h1>Mensagem enviada via PHPMailer</h1>';

$mail->SMTPDebug = 2;
//$mail->Debugoutput = 'html';
$mail->setLanguage('pt');

// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;
$mail->smtpClose();

?>
