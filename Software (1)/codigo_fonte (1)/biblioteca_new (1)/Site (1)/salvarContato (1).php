<?php
require_once '../config.php';
$conn = conexao();

$nome_contato = trim(filter_input(INPUT_POST, 'nome_contato', FILTER_SANITIZE_STRING));
$assunto_contato = trim(filter_input(INPUT_POST, 'assunto_contato', FILTER_SANITIZE_STRING));
$email_contato = trim(filter_input(INPUT_POST, 'email_contato', FILTER_SANITIZE_STRING));
$telefone_contato = trim(filter_input(INPUT_POST, 'telefone_contato', FILTER_SANITIZE_STRING));
$mensagem_contato = trim(filter_input(INPUT_POST, 'mensagem_contato', FILTER_SANITIZE_STRING));

if( $nome_contato    != NULL &&
    $assunto_contato != NULL &&
	$email_contato    != NULL &&
	$telefone_contato    != NULL &&
	$mensagem_contato    != NULL){
        try{            
            $insert = $conn->prepare("INSERT INTO tb_contato(nome_contato, email_contato, assunto_contato, mensagem_contato, telefone_contato, data_contato) VALUES(:nome_contato, :email_contato, :assunto_contato, :mensagem_contato, :telefone_contato, NOW())");
            $insert->bindValue(":nome_contato", $nome_contato);
            $insert->bindValue(":assunto_contato", $assunto_contato);
            $insert->bindValue(":email_contato", $email_contato);
			$insert->bindValue(":telefone_contato", $telefone_contato);
			$insert->bindValue(":mensagem_contato", $mensagem_contato);
            $insert->execute();
        }catch(PDOException $e){
           echo $e->getMessage(); 
        }
        header('location: ../fale_conosco.php');
		exit();
    }else{
		print("<p>Existem Campos vazios</p>");
	}
























