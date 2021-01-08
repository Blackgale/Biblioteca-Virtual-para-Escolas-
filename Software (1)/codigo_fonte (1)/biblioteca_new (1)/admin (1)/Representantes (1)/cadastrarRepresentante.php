<?php

require_once '../config.php';
$conn = conexao();

$login_representante_grupo = filter_input(INPUT_POST, 'login_representante_grupo', FILTER_SANITIZE_STRING);
$email_representante_grupo = filter_input(INPUT_POST, 'email_representante_grupo', FILTER_SANITIZE_STRING);
$senha_representante_grupo = filter_input(INPUT_POST, 'senha_representante_grupo', FILTER_SANITIZE_STRING);
$nome_representante_grupo = filter_input(INPUT_POST, 'nome_representante_grupo', FILTER_SANITIZE_STRING);
$curso_representante_grupo = filter_input(INPUT_POST, 'curso_representante_grupo', FILTER_SANITIZE_STRING);
$status_representante_grupo = filter_input(INPUT_POST, 'status_representante_grupo', FILTER_SANITIZE_STRING);
require 'validacoes.php';

if (validarRepresentantes($nome_representante_grupo, $login_representante_grupo, $email_representante_grupo, $senha_representante_grupo, $curso_representante_grupo, $status_representante_grupo)) {
    //print_r(validarRmAdmin());exit();
    session_start();
    header("Location: ../resposta.php");
} else {

    try {
        $insert = $conn->prepare("INSERT INTO tb_grupo(nome_representante_grupo, login_representante_grupo, email_representante_grupo, senha_representante_grupo, curso_representante_grupo, data_cadastro_representante_grupo)"
                . "                             VALUES(:nome_representante_grupo, :login_representante_grupo, :email_representante_grupo, :senha_representante_grupo, :curso_representante_grupo, NOW())");

        $insert->bindValue(":nome_representante_grupo", $nome_representante_grupo);
        $insert->bindValue(":login_representante_grupo", $login_representante_grupo);
        $insert->bindValue(":email_representante_grupo", $email_representante_grupo);
        $insert->bindValue(":senha_representante_grupo", $senha_representante_grupo);
        $insert->bindValue(":curso_representante_grupo", $curso_representante_grupo);
        $insert->execute();
    } catch (PDOException $e) {
        echo "erro" . $e->getMessage();
    }

    if ($insert) {
        require '../../email/enviarEmail.php';
        $destinatario = $email_representante_grupo;
        $mensagem = "Olá ". $nome_representante_grupo.", seu login e senha são:<br>". "Login: " . $login_representante_grupo . "<br> Senha: " . $senha_representante_grupo;
        enviarEmail($destinatario, $cc = 'leandrolima.dev85@gmail.com', $assunto = 'Biblioteca TCC - Login de Acesso', $mensagem = $mensagem);
        //echo "Cadastro realizado com sucesso com sucesso!";
        session_start();
        $_SESSION['msg_resposta']= "Cadastrado com Sucesso";
        header('location: ../listar_representante.php');
    }
    //
}