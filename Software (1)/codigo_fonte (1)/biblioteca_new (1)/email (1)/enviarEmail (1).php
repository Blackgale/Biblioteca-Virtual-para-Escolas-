<?php

// Configura para envio de e-mails usando SMTP
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


function enviarEmail($to = '', $cc = '' , $assunto = '', $mensagem = '')
{
      
    $mail = new PHPMailer;
    $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false,
                                                'verify_peer_name' => false,
                                                'allow_self_signed' => true));
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl'; 
	 //$mail->SMTPAutoTLS = true;
	$mail->Username = 'leandrolima.dev85@gmail.com';
	$mail->Password = 'mudarsenha';
	$mail->Port = 465;
	$mail->IsHTML(true);
	 // Email do Remetente
	$mail->From = 'leandrolima.dev85@gmail.com';
	 // Nome do Remetente
	$mail->FromName = 'Leandro';
	 // Endereço do e-mail do destinatário
	$mail->addAddress($to);
	$mail->AddCC($cc);
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

/*if(enviarEmail('leandrolima.dev85@gmail.com', $cc = 'adriano@ibaro.com.br' , $assunto = 'novo envio', $mensagem = 'Teste Teste TesteTeste Teste TesteTeste Teste TesteTeste Teste Teste')){
	echo 'Email enviado com sucesso';

}else{
	echo 'Erro ao enviar';
}*/

