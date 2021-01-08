<?php

// Configura para envio de e-mails usando SMTP



function enviarEmail($to = '', $cc = '' , $assunto = '', $mensagem = '')
{

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

		$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.zoho.com';
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl'; 
	 //$mail->SMTPAutoTLS = true;
	$mail->Username = 'adriano@ibaro.com.br';
	$mail->Password = 'RvAl@2016';
	$mail->Port = 465;
	$mail->IsHTML(true);
	 // Email do Remetente
	$mail->From = 'adriano@ibaro.com.br';
	 // Nome do Remetente
	$mail->FromName = 'Leandro';
	 // Endereço do e-mail do destinatário
	$mail->addAddress($to);
	$mail->CcAddress($cc);
	 // Assunto do e-mail
	$mail->Subject = $assunto;
	 // Mensagem que vai no corpo do e-mail
	$mail->Body = $mensagem;

	$mail->SMTPDebug = 2;
	//$mail->Debugoutput = 'html';
	$mail->setLanguage('pt');

	// Envia o e-mail e captura o sucesso ou erro
	if($mail->Send()){
	    return true;
	    $mail->smtpClose();	}
	
	return false;
	$mail->smtpClose();

}

enviarEmail('leandrolima.dev85@gmail.com', $cc = 'adriano@ibaro.com.br' , $assunto = 'Envio Teste', $mensagem = 'Teste');
?>
