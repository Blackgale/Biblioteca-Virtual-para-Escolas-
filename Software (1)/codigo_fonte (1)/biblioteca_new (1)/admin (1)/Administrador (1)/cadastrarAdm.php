<?php
require_once '../config.php';
$conn = conexao();


$rm_admin = filter_input(INPUT_POST, 'rm_admin', FILTER_SANITIZE_STRING);
$nome_admin = filter_input(INPUT_POST, 'nome_admin', FILTER_SANITIZE_STRING);
$email_admin = filter_input(INPUT_POST, 'email_admin', FILTER_SANITIZE_STRING);
$curso_admin = filter_input(INPUT_POST, 'curso_admin', FILTER_SANITIZE_STRING);
$senha_admin = filter_input(INPUT_POST, 'senha_admin', FILTER_SANITIZE_STRING);
$telefone_admin = filter_input(INPUT_POST, 'telefone_admin', FILTER_SANITIZE_STRING);
$tipo_admin = filter_input(INPUT_POST, 'tipo_admin', FILTER_SANITIZE_STRING);
$status_admin = filter_input(INPUT_POST, 'status_admin', FILTER_SANITIZE_STRING);
$data_cadastro_admin = date("Y-m-d", time());

require 'validacoes.php';


if(validarAdmin($rm_admin, $email_admin, $nome_admin, $senha_admin)){
    session_start();
    header("Location: ../resposta.php");
}else{

$insert = $conn->prepare("INSERT INTO tb_administrador(rm_admin, nome_admin, email_admin, curso_admin, senha_admin, telefone_admin, tipo_admin,  data_cadastro_admin) VALUES(:rm_admin, :nome_admin, :email_admin, :curso_admin, :senha_admin, :telefone_admin, :tipo_admin, NOW())");
$insert->bindValue(":rm_admin", $rm_admin);
$insert->bindValue(":nome_admin", $nome_admin);
$insert->bindValue(":email_admin", $email_admin);
$insert->bindValue(":curso_admin", $curso_admin);
$insert->bindValue(":senha_admin", $senha_admin);
$insert->bindValue(":telefone_admin", $telefone_admin);
$insert->bindValue(":tipo_admin", $tipo_admin);
$insert->execute();
    
    
    if($insert){
       echo "Chamar função envia email" ;
    }
    //header('Location: ../listar_admin.php');

}


























