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

const GUSER = 'leandrolima.dev85@gmail.com';

        /**
        *String que armazena a senha do email de onde partirá os emails (remetente).
        *@var string
        */
        const GPWD = 'mudarsenha';

        /**
        *String que armazena o email para qual as mensagens serão enviadas (destinatário).
        *@var string
        */
        $mail = new PHPMailer;
// Configura para envio de e-mails usando SMTP


static function contactUsEmail(){

            $emailRemetente = 'dinhob6@hotmail.com';
            $name = 'Leandro ';
            $subject = 'teste';
            $mensagem = 'Mensagem';
            $corpoMensagem = '<b>CONCTACT US EMAIL</b>'.'<br /><b>Email Remetente: </b>'.$emailRemetente.
            '<br /><b>Nome:</b>'.$name.'<br /><b>Assunto:</b>'.$subject.'<br /><b>Mensagem:</b>'.$mensagem;

            $sendResult = SendEmail::smtpMailer(SendEmail::GSEND, SendEmail::GUSER, $name, $subject, $corpoMensagem);

            if($sendResult === true){
                 echo 'Mensagem Enviada com Sucesso';
            }else{
                echo $sendResult;
            }
        }

        function smtpMailer($destinatario, $remetente, $nomeRemetente, $assunto, $corpo){

            /*
            *Objeto que realizará a composição do email com os dados passados como parametros, 
            *armazenara as configurações do servidor SMTP utilizado e todas as outras configurações 
            *e realizará o envio do email.
            *@var PHPMailer object
            */
            $mail = new PHPMailer();

            /**
            *Define o charset do email a ser enviado.
            */
            $mail->CharSet = 'UTF-8';

            /**
            *Ativa SMTP para uso.
            */
            $mail->IsSMTP();

            /**
            *Não exibirá erros e mensagens, outras configurações possiveis: 
            *Debugar: 1 = erros e mensagens, 2 = mensagens apenas.
            */
            $mail->SMTPDebug = 0;

            /**
            *Ativa a autenticação.
            */
            $mail->SMTPAuth = true;

            /**
            *Protocolo utilizado, o gmail (servidor utilizado) requere o uso de tls.
            */
            $mail->SMTPSecure = 'tls';

            /**
            *SMTP utilizado
            */
            $mail->Host = 'smtp.gmail.com';

            /**
            *Porta utilizado para envio de mensagens (ela deverá estar aberta em seu servidor).
            */
            $mail->Port = 587;

            /**
            *Login do usuário utilizado para envio do email (no caso usuário comum do gmail).
            */
            $mail->Username = SendEmail::GUSER;

            /**
            *Senha do login de usuário utilizado para envio do email.
            */
            $mail->Password = SendEmail::GPWD;

            /**
            *Identificação do remetente do email (usuário de email utilizado para envio do 
            *email pelo sistema (logo de propriedade do sistema) e o nome do usuário remetente 
            *(informado na hora da criação do email)) do email.
            */
            $mail->SetFrom($remetente, $nomeRemetente);

            /**
            *Assunto do email.
            */
            $mail->Subject = $assunto;

            /**
            *Corpo do email.
            */
            $mail->Body = $corpo;

            /**
            *Email destinatário do email (de propriedade do sistema).
            */
            $mail->AddAddress($destinatario);

            /**
            *Seta o email como HTML (por padrão ele é text/plain).
            */
            $mail->IsHTML(true);

            $sendResult = $mail->Send();

            if(!$sendResult){
                return "<b>Informações do erro:</b> " . $mail->ErrorInfo;
            }else{
                return true;
            }
        }

?>
